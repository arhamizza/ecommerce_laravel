<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Regency;
use App\Models\Village;
class Order extends Model
{
    use HasFactory;

    protected $table= 'order';
    protected $fillable = [
        'user_id',
        // 'fname',
        // 'lname',
        // 'email',
        // 'telephone',
        // 'address1',
        // 'address2',
        // 'postcode',
        // 'provinsi',
        // 'kota',
        // 'kecamatan',
        // 'kelurahan',
        'ongkir',
        'total_price',
        'payment_mode',
        'payment_id',
        'status',
        'message',
        'tracking_no'
    ];

    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class, 'kelurahan','id');
    }
}
