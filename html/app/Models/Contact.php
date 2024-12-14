<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    // Definindo os campos que podem ser preenchidos (mass assignment)
    protected $fillable = ['name', 'contact', 'email'];
}
