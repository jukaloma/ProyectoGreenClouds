<?php

namespace App\Models;

use App\Http\Controllers\Semilleros;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semillero extends Model
{
    protected $table= 'semilleros';
    protected $primaryKey = 'nomSemillero';
    public $timestamps = true;
}
