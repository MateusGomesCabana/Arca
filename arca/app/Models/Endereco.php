<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['endereco', 'cep', 'cidade', 'estado','empresa_id'];

    
    public function empresas(){
    	return $this->belongsTo('App\Models\Empresa');
    }
}
