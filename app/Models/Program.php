<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_program';

    public function subProgram(){
        return $this->hasMany(SubProgram::class);
    }
}
