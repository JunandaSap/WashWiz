<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'service_id',
        'quantity',
        'total_price',
        'pickup_date',
        'pickup_time',
        'payment_method',
        'payment_details',
        'payment_status',
        'laundry_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function laundry()
    {
        return $this->belongsTo(Laundry::class, 'laundry_id');
    }
}

