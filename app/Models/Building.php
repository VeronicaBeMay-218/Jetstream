<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = ['nombre'];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
