<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
     protected $table= 'brands';
     protected $fillable=[
         'name',
         'images',
         'description',
     ];
     public function brands()
     {
         return $this->hasMany(Product::class);
     }
}