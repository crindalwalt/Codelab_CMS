<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    public function student() {
        return $this->belongsToMany(User::class);
    }
    public function course() {
        return $this->belongsTo(Course::class);
    }
}
