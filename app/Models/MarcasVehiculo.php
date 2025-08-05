<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MarcasVehiculo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nombre_marca','icono'];
    
}
