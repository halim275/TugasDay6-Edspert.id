<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parent extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'address'];

    protected $dates = ['deleted_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
