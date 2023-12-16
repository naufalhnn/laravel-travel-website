<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'travel_package_id',
        'image',
    ];

    public function image()
    {
        if ($this->image) {
            return asset('storage/app/' . $this->image);
        }
    }

    public function travel_packages()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_package_id', 'id');
    }
}
