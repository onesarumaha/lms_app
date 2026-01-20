<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $fillable = [ 'kategori_id', 'judul', 'deskripsi', 'thumbnail', 'dibuat_oleh'];
}
