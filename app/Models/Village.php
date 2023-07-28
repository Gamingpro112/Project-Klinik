<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;
    protected $fillable = ['district_id', 'name'];

    public function houseData()
    {
        return $this->hasMany(HouseData::class, 'id');
    }

    public function hamlet()
    {
        return $this->hasMany(Hamlet::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
