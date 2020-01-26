<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Categoria'];

    
    /**
     * 1 para muitos tabela empresa_categoria(pivot)
     */
    public function empresas(){
    	return $this->belongsToMany('App\Models\Empresa','empresa_categorias');
    }
}
