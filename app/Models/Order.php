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
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
