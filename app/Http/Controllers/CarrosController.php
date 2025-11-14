<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{
    public function index()
    {
        $carros = Carros::all();
        //var_dump($carros);
        //compact()
        echo "Chegou no controller carros";
        return view ('carros.index', compact ('carros'));
    }

    public function salvarCarro(Request $request)
{
    $carro = new Carros();
    $carro->marca = $request->input('marca');
    $carro->modelo = $request->input('modelo');
    $carro->cor = $request->input('cor');
    $carro->ano_fabricacao = $request->input('ano_fabricacao');
    $carro->preco = $request->input('preco');
    $carro->km = $request->input('km');
    $carro->descricao = $request->input('descricao');
    $carro->imagem = $request->input('imagem');
    $carro->imagem2 = $request->input('imagem2');
    $carro->imagem3 = $request->input('imagem3');

    $carro->save();

    return redirect()->route('dashboard')->with('success', 'Carro cadastrado com sucesso!');
}

    public function buscarCarro($id)
    {
        $carro = Carros::find($id);

        if(!$carro)
        {
            echo "Caiu na trap bobão, não foi dessa vez";
        }

        return view('carros.alterar', compact('carro'));
    }

    public function alterarCarro(Request $req)
    {
        $carro = Carros::find($req->input('id'));

        if(!$carro) {
            return redirect()->route('carros.index')->with('error', 'Veículo não encontrado');
        }

        $carro->marca = $req->input('marca');
        $carro->modelo = $req->input('modelo');
        $carro->cor = $req->input('cor');
        $carro->ano_fabricacao = $req->input('ano_fabricacao');
        $carro->save();

        return redirect()->route('carros.index')->with('success', 'Veículo alterado com sucesso!');
    }

    public function dashboard()
{
    $carros = Carros::all();
    return view('dashboard', compact('carros'));
}

public function deletarCarro($id)
{
    $carro = Carros::find($id);
    if($carro){
        $carro->delete();
        return redirect()->route('dashboard')->with('success', 'Veículo deletado com sucesso!');
    }
    return redirect()->route('dashboard')->with('error', 'Veículo não encontrado.');
}

public function detalhes($id)
{
    $carro = Carros::findOrFail($id);
    return view('carros.detalhes', compact('carro'));
}

}
