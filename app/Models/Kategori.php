<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

protected $table = 'kategori';
protected $fillable = [
    'nama',
    'slug',
    'description',
    'status',
    'popular',
    'meta_title',
    'meta_descrip',
    'meta_keywords',
];

}
