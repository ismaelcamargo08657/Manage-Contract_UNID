<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $table = 'colaborador';
    protected $primaryKey = 'idColaborador';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Apellido_paterno',
        'Apellido_Materno',
    ];
}
