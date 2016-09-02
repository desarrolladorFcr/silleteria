<?php

namespace Videotienda;

use Illuminate\Database\Eloquent\Model;

class Columnas extends Model {

    protected $table = 'columnas';
    protected $primaryKey = 'columna_id';
    protected $fillable = ['nom_columna'];
    public $timestamps = false;

    public function filas() {

        return $this->belongsToMany
                ('Videotienda\Filas','reservas','fila_id',$this->primaryKey)->withPivot('id_usuario');
    
    }

}
