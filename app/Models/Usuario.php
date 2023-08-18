<?php

namespace App\Models;

use App\Http\Controllers\Usuarios;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table= 'usuarios';
    protected $primaryKey = 'idUsuario';
    public $timestamps = true;
}
