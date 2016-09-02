<?php

namespace Videotienda;

use Illuminate\Database\Eloquent\Model;

class Filas extends Model {

    protected $table = 'filas';
    protected $primaryKey = 'fila_id';
    protected $fillable = ['nom_fila'];
    public $timestamps = 'false';

    public function columnas() {
        
        return $this->belongsToMany
                ('Videotienda\Columnas','reservas',$this->primaryKey,'columna_id')->withPivot('id_usuario');
    }

}
