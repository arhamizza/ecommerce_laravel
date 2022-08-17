<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable =[
        'user_id',
        'prod_id',
        'category_id',
        'prod_qty',
    ];

    public function products()
    {
        return $this->belongsTo(Produk::class,'prod_id','id');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'cate_id','id');
    }
}
