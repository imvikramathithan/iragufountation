<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable =['id','course_name','slug','description'];
    
public function services()
{
    return $this->hasMany(serviceStudent::class, 'subject_id');
}
}
