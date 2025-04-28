<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'payment_method', 'payment_status'];

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
