<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Contrato extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'contratos'; 
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'idColaborador',
        'idCallCenter',
        'correo',
        'status',
        'status_ine',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [ 
        'password',
    ];

    public function getAuthIdentifierName()
    {
        return 'correo';
    }

   
    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class, 'idColaborador', 'idColaborador');
    }
}
