

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/eupsi.png">

    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/CadPsicologo.css">
    <link rel="stylesheet" href="./style/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>EuPSICO - Cadastro Psicologo</title>
</head>

<body>
    @include("template.header")

    <main>
        <form id="form" class="cadPsi" method="post">
            <div class="cadastra_psicologo">
                <h1>EuPSICO - Cadastro de Psicólogo</h1>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Nos diga seu nome" required>

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required>

                <label for="crp">CRP:</label>
                <input type="text" id="crp" name="crp" placeholder="Digite seu CRP" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Informe seu e-mail">

                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" placeholder="Informe seu número de Telefone" required>

                <label for="senha">Crie uma senha:</label>
                <input type="password" name="senha" id="senha" placeholder="Crie a sua Senha" required>

                <label for="senha-repeat">Confirme a senha:</label>
                <input type="password" name="senha-repeat" id="senha-repeat" placeholder="Confirmar Senha" required>

                <!-- <button type="submit" id="btnEnviar" onclick="cadPsi()">Enviar</button> -->

                <input type="submit" name="submit" value="Enviar" id="btnEnviar" onclick="cadPsi()">

                <p class="erro">Caso já tenha, faça o login, clique <a href="./login.html">aqui</a> !</p>
            </div>
        </form>
    </main>

    <!-- JANELA MODAL DE CADASTRAO -->
    @include("template.modal-login")

    <footer>
        <section class="f1">
            <img src="./assets/eupsi.png" alt="EuPSI" class="logo">
        </section>

        <section class="f2">
            <p>Eupsico é um Buscador de Psicólogos e Clientes para Terapia Online e Presencial e oferece aos seus usuários
                o melhor método para encontrar o profissional ideal para sua necessidade. Possuindo um catálogo completo
                e profissionais experientes e certificados, seu uso será a solução ideal para qualquer dúvida
                relacionada aos serviços de terapia. Nossos profissionais são especialistas capacitados para lidar com
                as diversas áreas da psicologia, garantindo assim a melhor terapia para você.</p>
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
    <!-- <script src="./js/script.js"></script> -->
    <!-- <script src="./js/form.js"></script> -->
    <!-- <script src="./js/testes.js"></script> -->
</body>

</html>
