<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'travel_package_id',
        'user_id',
        'transaction_total',
        'transaction_status',
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }

    public function travel_packages()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_package_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
