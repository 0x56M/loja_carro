<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

/*class ClienteController extends Controller
{
    private $mensagem = "1";

    public function index()
    {
        return view('clientes.index');
    }
    public function recebeDados(Request $req)
    {
        //Validar se o nome foi digitado
        $validador = $req->validate(
            [
                'nome' => 'required|min:3', 
                'cpf' => 'required|min:11|max:14', 
                'telefone' => 'required|min:11|max:11'
            ],
            [
                'nome.required' => "Preenche o campo nome, seu burro",
                'nome.min' => "Mínimo de 3 letras",
                'cpf.required' => "O CPF também, animal",
                'telefone.required' => "Põe o telefone, besta"
            ]
    );

        echo $req->input('nome');
        echo "<br>";
        echo $req->input('cpf');
        echo "<br>";
        echo $req->input('telefone');

        return redirect()->route("clientes")->with('success','Cliente incluido com sucesso');
    }
}
*/

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Clientes::all();

        echo "chegou no controller";
        return view('clientes.index', compact('clientes'));
    }

    public function recebeDados(Request $req)
    {
        //Validar se o nome foi digitado
        $validador = $req->validate(
            [
                'nome' => 'required|min:3', 
                'cpf' => 'required|min:11|max:14', 
                'telefone' => 'required|min:11|max:11',
                'email' => 'required|email',
                'sexo' => 'required|max:1',
                'dataNasc' => 'required|date'
            ],
            [
                'nome.required' => "Preenche o campo nome, seu burro",
                'nome.min' => "Mínimo de 3 letras",
                'cpf.required' => "O CPF também, animal",
                'telefone.required' => "Põe o telefone, besta",
                'email.required' => "O e-mail é obrigatório",
                'sexo' => "O sexo é obrigatório",
                'dataNasc' => "A data de nascimento é obrigatória"
            ]
    );
        $clientes = new Clientes();
        $clientes->nome = $req->input('nome');
        $clientes->cpf = $req->input('cpf');
        $clientes->telefone = $req->input('telefone');
        $clientes->email = $req->input('email');
        $clientes->sexo = $req->input('sexo');
        $clientes->dataNasc = $req->input('dataNasc');
        $clientes->save();

        return redirect()->route('clientes.novo');
    }

    public function buscarCliente($id)
    {
        $clientes = Clientes::find($id);

        if(!$clientes)
        {
            echo "Não foi dessa vez";
        }

        return view('clientes.alterar', compact('clientes'));
    }
    
     public function alterarCliente(Request $req)
    {
        $clientes = Clientes::find($req->input('id'));
        //pego o cliente e troco pela dado que digitei
        $clientes->nome = $req->input('nome');
        $clientes->cpf = $req->input('cpf');
        $clientes->telefone = $req->input('telefone');
        $clientes->email = $req->input('email');
        $clientes->sexo = $req->input('sexo');
        $clientes->dataNasc = $req->input('dataNasc');
        $clientes->save();

        return view('clientes.index');
    }

    public function destroy(int $id)
    {
        $clientes = Clientes::findOrFail($id);
        $clientes->delete();

        return view('clientes.index');
    }
}


