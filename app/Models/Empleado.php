<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\rolEmpleado;

class Empleado extends Model
{
    use HasFactory;

    public function rol(){
        return $this->belongsTo(rolEmpleado::class, 'idRolEmpleado', 'id');
    }
}
