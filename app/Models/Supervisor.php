<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

    public function lecturer() {
        return $this->belongsTo(Lecturer::class, 'supervisor_id', 'lecturer_id');
    }

    public function project() {
        return $this->belongsToMany(Project::class, 'project_id', 'project_id');
    }
}
