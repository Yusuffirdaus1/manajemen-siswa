<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // Tambahkan ini:
    protected $fillable = ['nama', 'nis', 'kelas', 'alamat'];
}
