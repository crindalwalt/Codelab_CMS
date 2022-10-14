<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function student() {
        return $this->belongsToMany(User::class);
    }
    public function batch() {
        return $this->hasMany(Batch::class);
    }
}
