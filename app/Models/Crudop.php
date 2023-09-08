<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crudop extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'image', 'textarea', 'skill', 'flexRadioDefault'];
}
