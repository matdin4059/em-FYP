<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function project() {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
}
