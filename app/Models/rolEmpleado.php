<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empleado;

class rolEmpleado extends Model
{
    use HasFactory;

    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'idRolEmpleado', 'id');
    }
}
