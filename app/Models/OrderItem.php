<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table= 'order_item';
    protected $fillable = [
        'order_id',
        'prod_id',
        'price',
        'qty'
    ];
}
