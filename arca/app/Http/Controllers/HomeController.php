<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Categoria;
use App\Models\Endereco;
use DB;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function menuInicial()
    {
        //filtros para a tela inicial
        $filtroBusca = [];
        $filtroBusca[0] = "Título";
        $filtroBusca[1] = "Endereço";
        $filtroBusca[2] = "Cep";
        $filtroBusca[3] = "Cidade";
        $filtroBusca[4] = "Estado";

        return view('welcome', compact('filtroBusca'));
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //::get tras todos os produtos ativos no banco, não usei o paginate
        $products = Empresa::get();
        $categories = Categoria::get();
        //index não há nada a ser buscado por isso eu passo o array vazio
        $selected_cat = [];
        // dd($categories);
        //return view('empresa.index', compact('products','categories','selected_cat'));
        return view('home', compact('products', 'categories', 'selected_cat'));
    }
    /**
     * todo parametro post deve ter um request de parametro
     * pega a reques para que eu possa realiza a trativa
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
      
        $this->validate($request, [
            'name' => 'required|min:1|max:255',
            'endereco'  => 'required|min:1|max:255',
            'cep' => 'required|min:1|max:255',
            'category'=>'required',
            'cidade' => 'required|min:1|max:255',
            'estado' => 'required|min:1|max:255',
            'description' => 'required'
        ], [
            'name' => ' The  name field is required.',
            'endereco'  => 'The  endereco field is required.',
            'cep' => 'The  cep field is required.',
            'cidade' => 'The  cidade field is required.',
            'category'=> 'The  category field is required.',
            'estado' => 'The  estado field is required.',
            'description' => 'The  description field is required.'
        ]);
        // dd( $request->input('name'));
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|min:1|max:255',
                'description' => 'required'
            ]
        );
        if (!$validator->fails()) {
            //   dd($request);
            $endereco = $request->input('endereco');
            $cep = $request->input('cep');
            $cidade = $request->input('cidade');
            $estado = $request->input('estado');
            //crio de uma forma estática
            $empresa = Empresa::create([
                'name' => $request->input('name'),
                'description' => $request->input('description')
            ]);

            if (!empty($empresa) && !empty($endereco) && !empty($cep) && !empty($cidade) && !empty($estado)) {
                $enderecoModel = new Endereco;
                $enderecoModel->empresa_id = $empresa->id;
                $enderecoModel->cep = $cep;
                $enderecoModel->cidade = $cidade;
                $enderecoModel->estado = $estado;
                $enderecoModel->endereco = $endereco;

                $enderecoModel->save();
            }
            //faz o insert na pivot table   produto ->pivot->categoria, atraves da sync eu consigo inserir na pivot
            $empresa->categorias()->sync($request->input('category'));
            $filtroBusca = [];
            $filtroBusca[0] = "Título";
            $filtroBusca[1] = "Endereço";
            $filtroBusca[2] = "Cep";
            $filtroBusca[3] = "Cidade";
            $filtroBusca[4] = "Estado";
            return view('welcome', compact('filtroBusca'));
        }
        // return view('welcome');
    }
}
