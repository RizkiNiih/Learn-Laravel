<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nisn extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
    ];

    public function student() {
        return $this->belongsTo(student::class);
    }
}
