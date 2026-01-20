<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriModel extends Model
{
    use HasFactory;

    protected $table = 'materi';
    protected $fillable = ['kelas_id', 'judul', 'tipe', 'url', 'durasi', 'urutan'];
}
