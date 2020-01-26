<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //selec * from categories
        $categories= Categoria::paginate(10);
        return view('category.index', compact('categories'));
    }

    
    /**
     * busca por um elemento
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $name = $request->input('name');
        //  return   $name;
        //  $search = TRUE;
        if ($name) {
            //primeira é a coluna a segunda é a condição, terceira é o parametro 
            //se eu tive outro where só colocar antes do ->get(), ->where(); 
            $categories = Categoria::where('Categoria', 'like', '%' . $name . '%')->get();
        }
        //return $categories;
        // return view('category.index', compact('categories','search'));
    }
}
