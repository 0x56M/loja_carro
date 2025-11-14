@extends("template_admin.index")

@section("conteudo")
<style>
    .form-container {
        max-width: 600px;
        width: 100%;
        background-color: #fff;
        padding: 30px 40px;
        margin: 50px auto;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        box-sizing: border-box;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #222;
        font-weight: 600;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    .form-group label {
        margin-bottom: 8px;
        font-weight: 500;
        color: #555;
    }

    .form-group input,
    .form-group textarea {
        padding: 10px 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 0.95rem;
        transition: border-color 0.3s;
        width: 100%;
        box-sizing: border-box;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #ff0000;
        outline: none;
    }

    .form-group textarea {
        resize: vertical;
        min-height: 80px;
    }

    .form-container .btn {
        display: block;
        width: 100%;
        padding: 12px;
        background-color: #000000;
        color: #fff;
        font-size: 1rem;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
        margin-top: 10px;
    }

    .form-container .btn:hover {
        background-color: #cc0000;
    }
</style>

<div class="form-container">
    <h2>Cadastrar Novo Carro</h2>

    <form method="POST" action="{{ route('carros.novo') }}">
        @csrf

        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" required>
        </div>

        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" required>
        </div>

        <div class="form-group">
            <label for="cor">Cor</label>
            <input type="text" name="cor" id="cor" required>
        </div>

        <div class="form-group">
            <label for="ano_fabricacao">Ano de Fabricação</label>
            <input type="number" name="ano_fabricacao" id="ano_fabricacao" required>
        </div>

        <div class="form-group">
            <label for="preco">Preço (R$)</label>
            <input type="number" step="0.01" name="preco" id="preco" required>
        </div>

        <div class="form-group">
            <label for="km">Quilometragem (km)</label>
            <input type="number" name="km" id="km" required>
        </div>

        <div class="form-group">
            <label for="imagem">URL da Imagem 1</label>
            <input type="url" name="imagem" id="imagem" placeholder="https://...">
        </div>

        <div class="form-group">
            <label for="imagem2">URL da Imagem 2</label>
            <input type="url" name="imagem2" id="imagem2" placeholder="https://...">
        </div>

        <div class="form-group">
            <label for="imagem3">URL da Imagem 3</label>
            <input type="url" name="imagem3" id="imagem3" placeholder="https://...">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" placeholder="Detalhes do carro..."></textarea>
        </div>

        <button type="submit" class="btn">Salvar</button>
    </form>
</div>
@endsection
