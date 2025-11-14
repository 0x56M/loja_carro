@extends('template_site.index')

@section('conteudo')
<style>
    body {
        background-color: #f6f8fa;
    }

    h1 {
        margin: 20px;
        font-weight: 700;
    }

    /* Container principal dos cards */
    .carros-container {
        display: flex;
        flex-wrap: wrap;
        gap: 25px;
        justify-content: flex-start;
        margin: 20px;
    }

    /* Cada card individual */
    .carro-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 250px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
        display: flex;
        flex-direction: column;
    }

    .carro-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    /* Imagem do carro */
    .carro-imagem {
        width: 100%;
        height: 160px;
        background-color: #eee;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }

    /* Conteúdo textual */
    .carro-info {
        padding: 15px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .carro-info h3 {
        margin: 0 0 8px;
        color: #222;
        font-size: 1.1rem;
        font-weight: 700;
    }

    .carro-info p {
        margin: 3px 0;
        color: #555;
        font-size: 0.9rem;
    }

    /* Botão */
    .carro-acoes {
        margin-top: auto;
        padding: 15px;
        text-align: right;
    }

    .carro-acoes a {
        background-color: #000000;
        color: #fff;
        padding: 8px 12px;
        border-radius: 5px;
        text-decoration: none;
        transition: background 0.3s;
        font-size: 0.9rem;
    }

    .carro-acoes a:hover {
        background-color: #cc0000;
    }
</style>

<h1>Modelos de Carros</h1>

<div class="carros-container">
    @foreach($carros as $linha)
        <div class="carro-card">
            <div class="carro-imagem" 
                 style="background-image: url('{{ $linha->imagem ?? asset('imagens/sem-foto.jpg') }}');">
            </div>

            <div class="carro-info">
                <h3>{{ strtoupper($linha->marca) }} {{ strtoupper($linha->modelo) }}</h3>
                <p><strong>Cor:</strong> {{ strtoupper($linha->cor) }}</p>
                <p><strong>Ano:</strong> {{ $linha->ano_fabricacao }}</p>
                <p><strong>KM:</strong> {{ number_format($linha->km, 0, ',', '.') }} km</p>
                <p><strong>Preço:</strong> R$ {{ number_format($linha->preco, 2, ',', '.') }}</p>
            </div>

            <div class="carro-acoes">
                <a href="{{ route('carros.detalhes', $linha->id) }}">
                    <i class="fas fa-info-circle"></i> Ver detalhes
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection
