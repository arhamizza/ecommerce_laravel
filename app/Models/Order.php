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
        'fax',
        'company',
        'address1',
        'address2',
        'city',
        'postcode',
        'region',
        'status',
        'message',
        'tracking_no'
    ];


    
}
