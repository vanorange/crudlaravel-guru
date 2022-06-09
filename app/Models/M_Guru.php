<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_Guru extends Model
{
    use softDeletes;

    protected $table = 'guru';
    protected $fillable = [
        'nama',
        'nip',
        'mapel',
        'alamat'
    ];

    protected $hidden;
}
