<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/eupsi.png">

    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>EuPSICO - (Protótipo)</title>
</head>

<body>

    @include("template.header")

    <main id="principal">
        <div class="img-fundo">
            <img src="./assets/terapia-de-casal.jpg" alt="terapia-de-casal" class="consulta">
        </div>

        <div class="banner">
            <h1>Os Melhores Profissionais</h1>
            <h2>As Melhores Oportunidades</h2>
            <ul>
                <li><a href="./procuraPsi.php">Encontre um Psicólogo</a></li>
                <li><a href="#">Encontre um Paciente</a></li>
            </ul>
        </div>

        <div class="aviso" style="background-color: red; text-align: center;">
            <h1>ATENÇÃO: SITE AINDA SE ENCONTRA EM DESENVOLVIMENTO!</h1>
            <h2>Algumas funções podem não funcionar como esperado!</h2>
        </div>

        <div class="titulo_sobre">
            <h2>Sobre Nós</h2>
        </div>

        <div class='sobre'>
            <p>Eupsico é um Buscador de Psicólogos e Clientes para Terapia Online e Presencial e oferece aos seus usuários
                o
                melhor método para encontrar o profissional ideal para sua necessidade. Possuindo um catálogo completo e
                profissionais experientes e certificados, seu uso será a solução ideal para qualquer dúvida relacionada
                aos
                serviços de terapia. Nossos profissionais são especialistas capacitados para lidar com as diversas áreas
                da
                psicologia, garantindo assim a melhor terapia para você. Por trás dos nossos serviços, existem a
                responsabilidade e a ética para oferecer os melhores resultados na recuperação de nossos clientes. Nos
                serviços online, os profissionais fazem o melhor uso da tecnologia para oferecer a você um contato mais
                prático e direto, o que é muito importante e produtivo para o tratamento, porém, buscando atender à sua
                necessidade, temos os profissionais que atendem de forma presencial, num espaço pensado em você e perto
                de
                você. Além de todo suporte e da qualidade dos serviços prestados, nossas prioridades ainda são manter a
                privacidade e oferecer segurança aos nossos usuários. Você é bem-vindo (a) para experimentar nosso
                serviço
                de terapia online e presencial, e encontrar a melhor forma de cuidar de sua saúde mental e emocional!
            </p>
        </div>
    </main>

    <!-- JANELA MODAL DE CADASTRAO -->
    @include("template.modal-login")

    <footer>
        <section class="f1">
            <img src="./assets/eupsi.png" alt="EuPSI" class="logo">
        </section>

        <section class="f2">
            <p>footer 2</p>
            <!-- <p>Eupsi é um Buscador de Psicólogos e Clientes para Terapia Online e Presencial e oferece aos seus usuários o melhor método para encontrar o profissional ideal para sua necessidade. Possuindo um catálogo completo e profissionais experientes e certificados, seu uso será a solução ideal para qualquer dúvida relacionada aos serviços de terapia. Nossos profissionais são especialistas capacitados para lidar com as diversas áreas da psicologia, garantindo assim a melhor terapia para você.</p> -->
        </section>

        <section class="f3">
            <ul class="menuf">
                <li>Menu</li>
                <li><a href="./index.html">início</a></li>
                <li><a href="./procuraPsi.php">procurar psicólogo</a></li>
                <li><a href="#">plano psicologo</a></li>
                <li><a href="./contato.html">contato</a></li>
            </ul>
        </section>
    </footer>

    <script src="./js/script.js"></script>
</body>

</html>
