<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hamlet extends Model
{
    use HasFactory;

    protected $fillable = ['village_id', 'name'];

    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
