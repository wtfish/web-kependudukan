<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $guarded = ["id"];
    use HasFactory;

    public function rt(){
        return $this->belongsTo(rt::class,"rt_id");
    }
    public function hubungan_keluarga()
    {
        return $this->belongsTo(hubungan_keluarga::class, "hubungan_id");
    }
    public function agama()
    {
        return $this->belongsTo(agama::class, "agama_id");
    }
    public function pendidikan()
    {
        return $this->belongsTo(pendidikan::class, "pendidikan_id");
    }
    public function status(){
        return $this->belongsTo(status_perkawinan::class,"status_id");
    }
    public function pekerjaan(){
        return $this->belongsTo(pekerjaan::class,"pekerjaan_id");
    }
}
