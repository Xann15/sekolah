<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileMadrasah extends Model
{
    protected $table = 'profile_madrasah';
    protected $fillable = ['nama', 'deskripsi', 'gambar', 'logo', 'jumlah_guru', 'jumlah_siswa', 'jumlah_jurusan'];
    protected $connection = 'mysql'; // Add this line
}
