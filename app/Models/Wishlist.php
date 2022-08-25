<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table =  'wishlists';
    protected $fillable = [
        'user_id',
        'prod_id',
    ];

    public function products()
    {
        return $this->belongsTo(Produk::class,'prod_id','id');
    }
}
