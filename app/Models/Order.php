<?php

namespace App\Models;

use App\Models\OrderItem;
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
        'total_price',
        'status',
        'message',
        'tracking_no'
    ];

    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }

}
