<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatans';
    protected $fillable = ['nama_jabatan', 'gaji_id'];

    // Relasi ke model Karyawan
    public function karyawans()
    {
        return $this->hasMany(Karyawan::class);
    }

    // Relasi ke model Gaji
    public function gaji()
    {
        return $this->belongsTo(Gaji::class);
    }
}
