<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Vini CARS - Início</title>

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

        /* Seção de destaque */
        .hero {
            background: #fff;
            color: #333;
            padding: 60px 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .hero h1 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #222;
        }

        .hero p {
            font-size: 1rem;
            color: #555;
            max-width: 700px;
            margin: 0 auto 25px;
            line-height: 1.6;
        }

        .hero a {
            display: inline-block;
            background-color: #000000;
            color: #fff;
            padding: 10px 25px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.3s;
        }

        .hero a:hover {
            background-color: #cc0000;
        }

        /* Seção de destaques */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .feature {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        }

        .feature i {
            font-size: 2rem;
            color: #ff0000;
            margin-bottom: 10px;
        }

        .feature h3 {
            font-size: 1.1rem;
            margin-bottom: 8px;
            color: #222;
        }

        .feature p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
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
        <a href="{{ route('carros.index') }}"><i class="fas fa-list"></i> Modelos</a>
        <a href="{{ route('login') }}"><i class="fas fa-tags"></i> Área administrativa</a>
    </div>

    <div class="content">

        <main>
            <div class="hero">
                <h1>Bem-vindo à Vini CARS 🚗</h1>
                <p>
                    Aqui na <strong>Vini CARS</strong>, trabalhamos com seriedade e transparência.  
                    Oferecemos carros revisados, com procedência e preço justo.  
                    Nosso objetivo é ajudar você a encontrar o veículo certo, sem complicação.
                </p>
                <a href="{{ route('carros.index') }}"><i class="fas fa-car"></i> Ver Carros</a>
            </div>

            <div class="features">
                <div class="feature">
                    <i class="fas fa-check-circle"></i>
                    <h3>Carros Revisados</h3>
                    <p>Todos os veículos passam por uma revisão completa antes da venda, garantindo qualidade e segurança.</p>
                </div>

                <div class="feature">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h3>Preço Justo</h3>
                    <p>Trabalhamos com valores acessíveis e condições de pagamento que cabem no seu bolso.</p>
                </div>

                <div class="feature">
                    <i class="fas fa-users"></i>
                    <h3>Atendimento Amigável</h3>
                    <p>Somos uma loja de confiança, pronta para ouvir você e ajudar a fazer um bom negócio.</p>
                </div>
            </div>
        </main>

        <footer>
            © <span>Vini CARS</span> {{ date('Y') }} — Todos os direitos reservados.
        </footer>
    </div>
</body>

</html>
