<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Produk;

class OrderItem extends Model
{
    protected $table= 'order_item';
    protected $fillable = [
        'order_id',
        'prod_id',
        'price',
        'qty'
    ];

    public function products(): BelongsTo
    {
        return $this->belongsTo(Produk::class, 'prod_id','id');
    }
}
