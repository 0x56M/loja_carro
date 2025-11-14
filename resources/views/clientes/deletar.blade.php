@extends ('template_admin.index')

@section ('conteudo')
<table class = "table table-striped">
    <thead>
    <tr>
        <td>Nome<td>
        <td>CPF<td>
        <td>Telefone<td>
        <td>E-mail<td>
        <td>Sexo<td>
        <td>Data de Nascimento<td>

</tr>
</thead>
<tbody>

@foreach ($clientes as $linha)
<tr>
         <td>{{ $linha->nome}}<td>
        <td>{{ $linha->cpf}}<td>
        <td>{{ $linha->telefone}}<td>
        <td>{{ $linha->email}}<td>
        <td>{{ $linha->sexo}}<td>
        <td>{{ $linha->dataNasc}}<td>
        <td><a href="{{ route('clientes.destroy', $linha->id) }}" class='btn btn-primary'>Excluir</td>
     
</tr>
@endforeach
<tbody>
</table>

@endsection