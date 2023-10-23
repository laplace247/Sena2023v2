<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios'; // Nombre de la tabla en la base de datos
    protected $fillable = ['correo', 'password','id'];
}
