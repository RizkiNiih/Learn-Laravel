<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
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

    public function nisn() {
        return $this->hasOne(Nisn::class, 'id_student');
    }
}
