<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppLevel extends Model
{
    use HasFactory;

    const DIRECTOR = 'director';
    const SECRETARY = 'secretary';
    const TEACHER = 'teacher';
    const STUDENT = 'student';
    const PARENT = 'parent';

}
