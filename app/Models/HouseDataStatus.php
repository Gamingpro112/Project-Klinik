<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HouseDataStatus extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['uuid', 'house_data_id', 'status'];

    public function houseData()
    {
        return $this->hasOne(HouseData::class, 'house_data_id');
    }
}
