<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratoModel extends Model
{

    use HasFactory;
    protected $table = 'contratos'; // Nombre de la tabla
    protected $ident = 'id'; //primaryKey
    protected $fillable = [//datos alterar insert update, delete 
        'idColaborador',
        'idCallCenter',
        'correo',
        'status',
        'status_ine',
        'created_at',
        'updated_at',
        // Agrega los campos que usarás en login si necesitas más
    ];

    protected $hidden = [ //oculta no se muestra modelo
        'password',
    ];
    public function getAuthIdentifierName()
    {
        return 'correo';
    }
}
