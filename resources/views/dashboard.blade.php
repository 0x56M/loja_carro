@extends("template_admin.index")

@section("conteudo")

<h2>Dashboard - Painel de Controle</h2>
<p>Bem-vindo ao painel de controle! Aqui você pode gerenciar seus veículos.</p>

<div class="button-area">
    <a href="{{ route('carros.cadastrar') }}">
        <i class="fas fa-plus"></i> Cadastrar veículo
    </a>
</div>

<hr>

<h3>Veículos cadastrados</h3>

@if($carros->count() > 0)
    <div class="lista-veiculos">
        @foreach($carros as $carro)
            <div class="veiculo-card">

                {{-- Imagens --}}
                <div class="veiculo-imagens">
                    @if($carro->imagem)
                        <img src="{{ $carro->imagem }}" alt="{{ $carro->marca }} {{ $carro->modelo }}">
                    @endif
                    @if($carro->imagem2)
                        <img src="{{ $carro->imagem2 }}" alt="{{ $carro->marca }} {{ $carro->modelo }}">
                    @endif
                    @if($carro->imagem3)
                        <img src="{{ $carro->imagem3 }}" alt="{{ $carro->marca }} {{ $carro->modelo }}">
                    @endif
                </div>

                <div class="veiculo-info">
                    <h4>{{ $carro->marca }} {{ $carro->modelo }} - {{ $carro->cor }}</h4>
                    <p><strong>Ano:</strong> {{ $carro->ano_fabricacao }}</p>
                    <p><strong>Quilometragem:</strong> {{ number_format($carro->km, 0, ',', '.') }} km</p>
                    <p><strong>Preço:</strong> R$ {{ number_format($carro->preco, 2, ',', '.') }}</p>
                    <p><strong>Descrição:</strong> {{ $carro->descricao }}</p>
                </div>

                <div class="veiculo-actions">
                    <a href="{{ route('carros.buscar', ['id' => $carro->id]) }}" class="btn-alterar">
                        <i class="fas fa-edit"></i>
                    </a>

                    <form action="{{ route('carros.deletar', ['id' => $carro->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-deletar">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>

            </div>
        @endforeach
    </div>
@else
    <p>Nenhum veículo cadastrado.</p>
@endif

<style>
.button-area a {
    background-color: #000000;
    color: #fff;
    padding: 10px 4px;
    text-decoration: none;
    border-radius: 6px;
    margin-bottom: 20px;
    display: inline-block;
    transition: 0.3s;
}

.button-area a:hover {
    background-color: #cc0000;
}

.lista-veiculos {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 20px;
}

.veiculo-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    width: calc(33.333% - 20px);
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.veiculo-imagens {
    display: flex;
    gap: 5px;
}

.veiculo-imagens img {
    width: calc(33.333% - 4px);
    height: 120px;
    object-fit: cover;
    border-bottom: 1px solid #ccc;
}

.veiculo-info {
    padding: 15px;
    flex-grow: 1;
}

.veiculo-info h4 {
    margin: 0 0 10px;
    font-size: 1.1rem;
    color: #222;
}

.veiculo-info p {
    margin: 5px 0;
    color: #555;
    font-size: 0.95rem;
}

.veiculo-actions {
    padding: 15px;
    display: flex;
    justify-content: space-between;
}

.btn-alterar, .btn-deletar {
    width: 32px;             /* largura fixa para botões quadrados */
    height: 32px;            /* altura fixa */
    padding: 0;              /* remove padding */
    border-radius: 5px;
    border: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;         /* tamanho do ícone */
    cursor: pointer;
    transition: 0.3s;
    color: #fff;
}

.btn-alterar {
    background-color: #007bff;
}

.btn-alterar:hover {
    background-color: #0056b3;
}

.btn-deletar {
    background-color: #dc3545;
}

.btn-deletar:hover {
    background-color: #b02a37;
}


@media (max-width: 1024px) {
    .veiculo-card {
        width: calc(50% - 20px);
    }
}

@media (max-width: 600px) {
    .veiculo-card {
        width: 100%;
    }
    .veiculo-imagens img {
        height: 100px;
    }
}
</style>

@endsection
