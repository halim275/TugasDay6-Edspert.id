<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'phone_number'];

    protected $dates = ['deleted_at'];

    public function parent()
    {
        return $this->hasOne(Parent::class, 'student_id');
    }
}
