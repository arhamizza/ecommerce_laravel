<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'cate_id',
        'name',
        'slug',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'weight',
        'image',
        'qty',
        'tax',
        'status',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'role_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'cate_id','id');
    }

}
