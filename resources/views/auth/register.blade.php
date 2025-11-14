<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <!-- Fontes e Ícones -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0a0a0a, #20232a);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
        }

        .register-box {
            background-color: #111;
            padding: 40px 35px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.4);
            width: 340px;
            text-align: center;
            border-top: 4px solid #ff0000;
        }

        .register-box h2 {
            margin-bottom: 25px;
            font-weight: 600;
            color: #fff;
            font-size: 1.6rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .register-box label {
            display: block;
            text-align: left;
            font-weight: 500;
            margin-bottom: 6px;
            color: #ccc;
            font-size: 0.9rem;
        }

        .register-box input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: none;
            border-radius: 6px;
            background-color: #1c1c1c;
            color: #fff;
            font-size: 1rem;
            box-sizing: border-box;
        }

        .register-box input:focus {
            outline: none;
            border: 1px solid #ff0000;
            box-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
        }

        .register-box button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
        }

        .btn-register {
            background-color: #ff0000;
            color: white;
        }

        .btn-register:hover {
            background-color: #cc0000;
        }

        .register-box .voltar {
            display: block;
            margin-top: 18px;
            color: #bbb;
            text-decoration: none;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .register-box .voltar:hover {
            color: #ff0000;
        }

        .errors {
            color: #ff5555;
            font-size: 0.9rem;
            margin-bottom: 15px;
            text-align: left;
        }

        @media (max-width: 400px) {
            .register-box {
                padding: 30px 20px;
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <div class="register-box">
        <h2><i class="fas fa-user-plus"></i> Registro</h2>

        @if ($errors->any())
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.store') }}" method="POST">
            @csrf

            <label for="name">Nome</label>
            <input type="text" name="name" placeholder="Digite seu nome" required>

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" required>

            <label for="password">Senha</label>
            <input type="password" name="password" placeholder="Digite sua senha" required>

            <label for="password_confirmation">Confirmar Senha</label>
            <input type="password" name="password_confirmation" placeholder="Confirme sua senha" required>

            <button type="submit" class="btn-register">Cadastrar</button>
        </form>

        <a href="{{ route('login') }}" class="voltar">
            <i class="fas fa-arrow-left"></i> Já tem conta? Faça login
        </a>
    </div>
</body>

</html>
