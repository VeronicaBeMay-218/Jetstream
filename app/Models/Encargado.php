<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    protected $fillable = ['nombre', 'apellido', 'telefono'];

    public function departments()
{
    return $this->belongsToMany(Department::class, 'encargado_departamento');
}

}
