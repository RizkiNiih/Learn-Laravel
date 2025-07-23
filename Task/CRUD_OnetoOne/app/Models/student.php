<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'nama',
        'nis',
        'tempatlahir',
        'tanggallahir',
        'alamat',
        'jeniskelamin',
        'agama',
        'email',
        'warna',
    ];

    public function nisn () {
        return $this->hasOne(nisn::class,'id_student');
    }
}
