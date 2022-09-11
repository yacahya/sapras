<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function instansi()
    {
        return $this->hasOne(Instansi::class, 'id', 'id_instansi');
    }
    public function alat()
    {
        return $this->hasOne(Alat::class, 'id', 'id_alat');
    }
    public function kondisi()
    {
        return $this->hasOne(Kondisi::class, 'id', 'id_kondisi');
    }
}
