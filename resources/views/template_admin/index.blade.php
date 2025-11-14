<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Vini CARS</title>

    <!-- Fontes e ícones -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f8;
            color: #333;
            margin: 0;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, #0a0a0a, #20232a);
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.2);
        }

        .sidebar h2 {
            font-weight: 600;
            text-align: center;
            padding: 20px 10px;
            background-color: #111;
            margin: 0;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .sidebar a {
            color: #ccc;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #ff0000;
            color: #fff;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        /* Conteúdo principal */
        .content {
            margin-left: 250px;
            padding: 30px;
        }

        header {
            background-color: #fff;
            padding: 15px 25px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header h1 {
            font-weight: 600;
            color: #222;
            font-size: 1.5rem;
        }

        header .user {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        header .user img {
            width: 40px;
            border-radius: 50%;
        }

        /* Rodapé */
        footer {
            text-align: center;
            padding: 20px;
            color: #777;
            margin-top: 50px;
            font-size: 0.9rem;
        }

        footer span {
            color: #ff0000;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Vini CARS</h2>
        <a href="{{ route('logout') }}" method="POST"><i class="fas fa-right-from-bracket"></i> Fazer logoff</a>
    </div>

    <div class="content">
        <main>
            @yield('conteudo')
        </main>

        <footer>
            © <span>Vini CARS</span> {{ date('Y') }} — Todos os direitos reservados.
        </footer>
    </div>
</body>

</html>
