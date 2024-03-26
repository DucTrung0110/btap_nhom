<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'date',
        'status',
        'total',
        'payment_method',
        'user_id',
        'product_id',
        'address'

    ];

    public function product()
    {
        return $this->belongsTo(Product::class, "product_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}


