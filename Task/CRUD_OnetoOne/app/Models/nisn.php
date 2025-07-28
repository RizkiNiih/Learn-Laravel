<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nisn extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
    ];

    public function student() {
        return $this->belongsTo(Student::class, 'id_student');
    }
}
