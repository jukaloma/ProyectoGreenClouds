<?php

namespace App\Models;

use App\Http\Controllers\Eventos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table= 'eventos';
    protected $primaryKey = 'codEvento';
    public $timestamps = true;
}
