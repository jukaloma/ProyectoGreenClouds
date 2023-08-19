<?php

namespace App\Models;

use App\Http\Controllers\Proyectos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table= 'proyectos';
    protected $primaryKey = 'codProy';
    public $timestamps = true;
}
