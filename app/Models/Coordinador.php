<?php

namespace App\Models;

use App\Http\Controllers\Coordinadores;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    protected $table= 'coordinadores';
    protected $primaryKey = 'idCoord';
    public $timestamps = true;
}
