<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chocolate extends Model
{
    use HasFactory;

    // Aqui vai os dados que serão salvos no BD
    protected $fillable = ['nome', 'amargor'];
}
