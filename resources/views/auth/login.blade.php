<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/eupsi.png">

    {{-- <link rel="stylesheet" href="./style/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="./style/CadPsicologo.css">
    <link rel="stylesheet" href="./style/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>EuPSICO - Cadastro Psicologo</title>
</head>
<body>
    @include("template.header")

    <main id="main-login">
        <div class="cadastra_psicologo login">
            <form action="{{ route('login.auth') }}" method="post">
                @csrf
                <h1>Login</h1>
                <label for="nome">Email:</label>
                <input type="email" name="email"  id="email" placeholder="Informe seu email" required>

                <label for="senha">Senha:</label>
                <input type="password" name="password" id="senha" placeholder="Informe sua senha" required>

                <!-- <label for="tipo_usuario">Tipo de usuário:</label>
                <div class="opcoes-usuario">
                    <input type="radio" name="tipo_usuario" id="tipo_psicologo" value="psicologo" required>
                    <label for="tipo_psicologo">Psicólogo</label>

                    <input type="radio" name="tipo_usuario" id="tipo_paciente" value="paciente" required>
                    <label for="tipo_paciente">Paciente</label>

                    <!- <input type="radio" name="tipo_usuario" id="tipo_admin" value="admin" required>
                    <label for="tipo_admin">Administrador</label> ->
                </div> -->

                <!-- <button type="submit" id="btnEnviar">Entrar</button> -->
                <input type="submit" name="submit" value="Entrar" id="btnEnviar">

                <!-- <p class="erro">Caso não tenha, faça o cadastro, clique <a href="./CadPaciente.html">aqui</a> e faça sua consulta!</p> -->
                <p class="erro">Esqueceu a senha, clique <a href="./recuperar-senha.php">aqui</a> e recupere sua senha!</p>
            </form>

        </div>
    </main>

    <!-- JANELA MODAL DE CADASTRAO -->
    @include('template.modal-login')
    <footer>
        <section class="f1">
            <img src="./assets/eupsi.png" alt="EuPSI" class="logo">
        </section>

        <section class="f2">
            <!-- <p>Eupsico é um Buscador de Psicólogos e Clientes para Terapia Online e Presencial e oferece aos seus usuários
                o melhor método para encontrar o profissional ideal para sua necessidade. Possuindo um catálogo completo
                e profissionais experientes e certificados, seu uso será a solução ideal para qualquer dúvida
                relacionada aos serviços de terapia. Nossos profissionais são especialistas capacitados para lidar com
                as diversas áreas da psicologia, garantindo assim a melhor terapia para você.</p> -->
        </section>

        <section class="f3">
            <!-- <ul class="menuf">
                <li>Menu</li>
                <li><a href="./index.html">início</a></li>
                <li><a href="./procuraPsi.php">procurar psicólogo</a></li>
                <li><a href="#">plano psicologo</a></li>
                <li><a href="./contato.html">contato</a></li>
            </ul> -->
        </section>
    </footer>
    <!-- <script src="./js/script.js"></script> -->
    <!-- <script src="./js/form.js"></script> -->
</body>

</html>
