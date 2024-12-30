<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementQuery extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email','number','institute','query'];
}
