<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Categoria;
use App\Models\Endereco;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (empty($request->category)) {
            return redirect()->route('welcome');
        } else if (empty($request->name)) {
            return redirect()->route('welcome');
        } else {
            //::get tras todos os produtos ativos no banco, não usei o paginate
            // $empresas = Empresa::get();
            //NOME DA EMPRESA
            if ($request->category[0] == 0) {
                $empresas = Empresa::where('name', 'like', '%' . $request->name . '%')->get();
            } //Endereco
            else if ($request->category[0] == 1) {
                //SELECT  `empresas`.* FROM `enderecos` inner join `empresas` on `empresas`.`id` = `enderecos`.`empresa_id` where `enderecos`.`endereco` LIKE '%End%'
                $empresas = DB::table('enderecos')
                    ->join('empresas', 'empresas.id', '=', 'enderecos.empresa_id')
                    ->where('enderecos.endereco', 'like', '%' . $request->name . '%')
                    ->select('empresas.*')
                    ->get();
            } //Cep
            else if ($request->category[0] == 2) {    
                //SELECT * FROM `enderecos` inner join `empresas` on `empresas`.`id` = `enderecos`.`empresa_id` where `enderecos`.`cep` LIKE '%End%'
                $empresas = DB::table('enderecos')
                    ->join('empresas', 'empresas.id', '=', 'enderecos.empresa_id')
                    ->where('enderecos.cep', 'like', '%' . $request->name . '%')
                    ->select('empresas.*')
                    ->get();
            } //cidade
            else if ($request->category[0] == 3) {
                //SELECT * FROM `enderecos` inner join `empresas` on `empresas`.`id` = `enderecos`.`empresa_id` where `enderecos`.`cidade` LIKE '%End%'
                $empresas = DB::table('enderecos')
                    ->join('empresas', 'empresas.id', '=', 'enderecos.empresa_id')
                    ->where('enderecos.cidade', 'like', '%' . $request->name . '%')
                    ->select('empresas.*')
                    ->get()->paginate(10);
            } //Estado
            else if ($request->category[0] == 4) {
                // SELECT * FROM `enderecos` inner join `empresas` on `empresas`.`id` = `enderecos`.`empresa_id` where `enderecos`.`estado` LIKE '%End%'
                $empresas = DB::table('enderecos')
                    ->join('empresas', 'empresas.id', '=', 'enderecos.empresa_id')
                    ->where('enderecos.estado', 'like', '%' . $request->name . '%')
                    ->select('empresas.*')
                    ->get();
            }
            $categories = Categoria::get();
            //index não há nada a ser buscado por isso eu passo o array vazio
            $selected_cat = [];
            return view('empresa.index', compact('empresas', 'categories', 'selected_cat'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($id)
    {
        //verifica se a empresa existe
        $empresa = Empresa::find($id);

        if (!empty($empresa)) {
           //pega as categoras daquela empresa
            $categories = DB::table('empresa_categorias')
                ->join('empresas', 'empresa_categorias.empresa_id', '=', 'empresas.id')
                ->join('categorias', 'empresa_categorias.categoria_id', '=', 'categorias.id')
                ->where('empresas.id', '=', $id)
                ->select('categorias.*')
                ->get();
            //pega o endereço da empresa
            $endereco = Endereco::where('empresa_id', $empresa->id)->get();
            $selected_cat = array();
            //seta a categoria
            $categoriaText = "";
            for ($i = 0; $i < count($categories); $i++) {
                if ($i == 0) {
                    $categoriaText = $categories[$i]->categoria;
                } else {
                    $categoriaText = $categoriaText . ", " . $categories[$i]->categoria;
                }
            }
            return view('empresa.view', compact('empresa', 'categories', 'categoriaText', 'endereco'));
        }
    }
}
