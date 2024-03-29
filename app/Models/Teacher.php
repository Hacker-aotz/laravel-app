<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $primaryKey = 'teacherid';

    public function courses()
    {
        return $this->hasMany(Course::class, 'teacherid', 'teacherid');
    }
}
