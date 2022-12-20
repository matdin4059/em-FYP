<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function student() {
        return $this->hasOne(Student::class);
    }

    public function supervisor() {
        return $this->hasOne(Supervisor::class);
    }

    public function examiner() {
        return $this->hasMany(Examiner::class);
    }
}
