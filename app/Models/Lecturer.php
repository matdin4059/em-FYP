<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'lecturer_id');
    }

    public function supervisor() {
        return $this->hasOne(Supervisor::class, 'supervisor_id');
    }

    public function examiner() {
        return $this->hasOne(Examiner::class, 'examiner_id');
    }
}
