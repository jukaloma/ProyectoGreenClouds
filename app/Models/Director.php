<?php

namespace App\Models;

use App\Http\Controllers\DirectorController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table= 'director';
    protected $primaryKey = 'nomDir';
    public $timestamps = true;
}
