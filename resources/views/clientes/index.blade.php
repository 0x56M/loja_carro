@extends("template_admin.index")

@section("conteudo")

    <style>
        .hero {
            background: linear-gradient(135deg, #0a0a0a, #20232a);
            color: #fff;
            padding: 60px 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        }

        .hero h1 {
            font-size: 2.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero p {
            font-size: 1.1rem;
            color: #ccc;
            max-width: 700px;
            margin: 0 auto 25px;
            line-height: 1.6;
        }

        .hero a {
            display: inline-block;
            background-color: #ff0000;
            color: #fff;
            padding: 12px 30px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.3s;
            text-transform: uppercase;
        }

        .hero a:hover {
            background-color: #cc0000;
        }

        .features {
            margin-top: 60px;
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
            font-size: 2.5rem;
            color: #ff0000;
            margin-bottom: 15px;
        }

        .feature h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #222;
        }

        .feature p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
        }
    </style>

    <div class="hero">
        <h1>Bem-vindo à Carros Inovadores 🚗</h1>
        <p>
            A <strong>Carros Inovadores</strong> é o seu portal exclusivo para explorar o futuro da mobilidade.
            Aqui você encontra os modelos mais modernos, as melhores ofertas e um atendimento que coloca você no
            volante das inovações automotivas.
        </p>
        <a href="{{ route('carros.index') }}"><i class="fas fa-car"></i> Ver Modelos</a>
    </div>

    <div class="features">
        <div class="feature">
            <i class="fas fa-bolt"></i>
            <h3>Tecnologia de Ponta</h3>
            <p>Explore veículos equipados com o que há de mais moderno em conforto, segurança e eficiência.</p>
        </div>

        <div class="feature">
            <i class="fas fa-tags"></i>
            <h3>Ofertas Especiais</h3>
            <p>Encontre condições imperdíveis e promoções exclusivas em diversos modelos.</p>
        </div>

        <div class="feature">
            <i class="fas fa-headset"></i>
            <h3>Atendimento Personalizado</h3>
            <p>Nosso time está pronto para ajudar você a escolher o carro ideal, com suporte rápido e eficiente.</p>
        </div>
    </div>

@endsection
