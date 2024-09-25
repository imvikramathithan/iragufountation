<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serviceStudent extends Model
{
    use HasFactory;
        protected $fillable = ['subject_id','name', 'slug','logo', 'bg_image', 'quotes', 'description', 'brochure'];
         public function course()
    {
        return $this->belongsTo(Courses::class, 'subject_id');
    }
}
