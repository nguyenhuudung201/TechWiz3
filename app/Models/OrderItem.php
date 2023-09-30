<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $fillable = [
        'accessory_id',
        'quantity',
        'price',
        'order_id',
        'created_at',
        'updated_at'
    ];
    public function type()
    {
        return $this->belongsTo(Order::class);
    }
}
