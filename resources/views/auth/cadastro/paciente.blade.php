<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/eupsi.png">

    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/CadPaciente.css">
    <link rel="stylesheet" href="./style/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>EuPSICO - Cadastro Paciente</title>
</head>

<body>
    @include('template.header')

    <main>
        <form id="form" class="cadPaciente" method="post" action="{{ route('store.patient') }}">
            @csrf
            <div class="cadastra_paciente">
                <h1>EuPSICO - Cadastro Paciente</h1>
                @if ($errors->any())
                    <div class="alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <label for="nome">Nome:</label>
                <input type="text" name="name" id="nome" placeholder="Nos diga seu nome">

                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" maxlength="14" placeholder="Informe o seu CPF">

                <label for="phone">Telefone:</label>
                <input type="text" name="phone" id="phone" placeholder="Informe seu telefone">

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Informe se e-mail">

                <label for="senha">Crie uma senha:</label>
                <input type="password" name="password" id="password" oninput="buttonAbility()"
                    placeholder="Crie a sua Senha" required>

                <label for="password_confirmation">Confirme a senha:</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Confirmar Senha" required oninput="buttonAbility()">

                <button id="button" class="warning-button-two" type="submit">Enviar</button>

                <p class="erro">Caso já tenha, faça o login, clique <a href="./login.html">aqui</a> !</p>
            </div>
        </form>
    </main>

    <!-- JANELA MODAL DE CADASTRAO -->
    @include('template.modal-login')

    <footer>
        <section class="f1">
            <img src="./assets/eupsi.png" alt="EuPSI" class="logo">
        </section>

        <section class="f2">
            <p>Eupsi é um Buscador de Psicólogos e Clientes para Terapia Online e Presencial e oferece aos seus usuários
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
    <script src="./js/script.js"></script>
    <script src="{{ asset('js/maks.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', buttonAbility);

        function buttonAbility() {
            const button = document.querySelector('#button');
            const pass = document.querySelector('#password').value;
            const passConfirm = document.querySelector("#password_confirmation").value;

            if (pass === passConfirm && pass.length > 0) {
                button.disabled = false;
            } else {
                button.disabled = true;
            }
        }


    </script>
    <!-- <script src="./js/form.js"></script> -->
    <!-- <script src="./js/testes.js"></script> -->
</body>

</html>
