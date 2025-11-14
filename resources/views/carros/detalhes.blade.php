@extends('template_site.index')

@section('conteudo')
<style>
    body {
        background-color: #f6f8fa;
    }

    .detalhes-container {
        max-width: 900px;
        margin: 40px auto;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        overflow: hidden;
        display: flex;
        flex-wrap: wrap;
    }

    .detalhes-imagens {
        flex: 1 1 50%;
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 20px;
        align-items: center;
        background: #f9f9f9;
    }

    .detalhes-imagens img {
        width: 100%;
        max-width: 380px;
        border-radius: 8px;
        object-fit: cover;
    }

    .detalhes-info {
        flex: 1 1 50%;
        padding: 30px;
    }

    .detalhes-info h2 {
        margin-top: 0;
        color: #222;
        font-weight: 700;
    }

    .detalhes-info p {
        margin: 8px 0;
        font-size: 1rem;
        color: #444;
    }

    .preco {
        font-size: 1.4rem;
        color: #ff0000;
        font-weight: 700;
        margin-top: 15px;
    }

    .btn-voltar {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #000000;
        color: #fff;
        border-radius: 6px;
        text-decoration: none;
        transition: background 0.3s;
    }

    .btn-voltar:hover {
        background-color: #0056b3;
    }

</style>

<div class="detalhes-container">
    <div class="detalhes-imagens">
        @if($carro->imagem)
            <img src="{{ $carro->imagem }}" alt="Imagem principal">
        @endif
        @if($carro->imagem2)
            <img src="{{ $carro->imagem2 }}" alt="Imagem 2">
        @endif
        @if($carro->imagem3)
            <img src="{{ $carro->imagem3 }}" alt="Imagem 3">
        @endif
    </div>

    <div class="detalhes-info">
        <h2>{{ strtoupper($carro->marca) }} {{ strtoupper($carro->modelo) }}</h2>
        <p><strong>Cor:</strong> {{ strtoupper($carro->cor) }}</p>
        <p><strong>Ano de fabricação:</strong> {{ $carro->ano_fabricacao }}</p>
        <p><strong>Quilometragem:</strong> {{ number_format($carro->km, 0, ',', '.') }} km</p>
        <p><strong>Descrição:</strong> {{ $carro->descricao ?? 'Sem descrição.' }}</p>
        <p class="preco">R$ {{ number_format($carro->preco, 2, ',', '.') }}</p>

        <a href="{{ url()->previous() }}" class="btn-voltar">← Voltar</a>
    </div>
</div>
@endsection
