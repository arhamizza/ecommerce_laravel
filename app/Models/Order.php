<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table= 'order';
    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'email',
        'telephone',
        'address1',
        'address2',
        'postcode',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'status',
        'message',
        'tracking_no'
    ];


    
}
