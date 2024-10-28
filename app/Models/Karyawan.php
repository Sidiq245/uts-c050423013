<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawans'; // Nama tabel
    protected $fillable = ['nama', 'email', 'telepon', 'alamat', 'jabatan_id']; // Sesuaikan kolomnya

    // Relasi ke model Jabatan
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
