<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';
    protected $fillable = [
        'user_id',
        'prod_id',
        'stars_rated',
        'review'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function Produk()
    {
        return $this->belongsTo(Produk::class, 'prod_id','id');
    }
}
