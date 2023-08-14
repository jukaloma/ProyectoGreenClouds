<?php

namespace App\Models;

use App\Http\Controllers\Semilleristas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semillerista extends Model
{
    protected $table= 'semilleristas';
    protected $primaryKey = 'codSemillerista';
    public $timestamps = true;
}
