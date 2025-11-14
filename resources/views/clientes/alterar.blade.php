@extends("template_admin.index")

@section("conteudo")

    <h2>Alterar cliente</h2>

    <div class="container">
        <form method="POST" action="{{ route('clientes.alterar') }}">
            @csrf
            <input type="text" name="id" value="{{ $clientes->id }}">
            <span>Nome</span>
            <div class="row">
                <input type="text" name="nome" value="{{ $clientes->nome }}">
            </div>
            <span>CPF</span>
            <div class="row">
                <input type="text" name="cpf" value="{{ $clientes->cpf }}">
            </div>
            <span>Telefone</span>
            <div class="row">
                <input type="text" name="telefone" value="{{ $clientes->telefone }}">
            </div>
            <span>E-mail</span>
            <div class="row">
                <input type="text" name="email" value="{{ $clientes->email }}">
            </div>
            <span>Sexo</span>
            <div class="row">
                <input type="text" name="sexo" value="{{ $clientes->sexo }}">
            </div>
            <span>Data de nascimento</span>
            <div class="row">
                <input type="text" name="dataNasc" value="{{ $clientes->dataNasc }}">
            </div>
            <div class="row">
                <input type="submit" class="btn btn-sucess" title="Alterar">
            </div>  
        </form>
    </div>

@endsection