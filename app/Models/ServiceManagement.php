<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceManagement extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'bg_image','quotes', 'description', 'brochure'];
}
