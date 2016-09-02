<?php

namespace Videotienda;

use Illuminate\Database\Eloquent\Model;

class Boletos extends Model
{
    protected $table = 'boletos';
    protected $primaryKey = 'id_boleto';
    protected $fillable =['caracteristica', 'costo'];
    
    public $timestamps = false;
    
}
