<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table= 'products';
    protected $fillable=[
        'name',
        'images',
        'description',
        'price',
        'brand_id',
        'status'
    ];
    public function products()
    {
        return $this->belongsTo(Brand::class,'brand_id');
}}
