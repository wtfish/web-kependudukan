<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dusun extends Model
{
    protected $guarded=["id"];
    use HasFactory;
    public function rw()
    {
        return $this->hasMany(rw::class, "dusun_id");
    }
}
