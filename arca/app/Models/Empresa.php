<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * 1 para muitos tabela empresa_categoria(pivot)
     */
    public function categorias(){
    	return $this->belongsToMany('App\Models\Categoria','empresa_categorias');
    }


    public function enderecos(){
    	return $this->hasMany('App\Models\Endereco');	
    }
}
