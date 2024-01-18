<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/eupsi.png">

    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style/cards.css') }}">
    <link rel="stylesheet" href="{{ asset('style/calendar.css') }}">
    <title>Procura Psicólogo - EuPSICO(protótipo)</title>

</head>

<body>
    @include('template.header')
    <main>
        <div class="card-Container">
            @foreach ($pyschologists as $value)
                <div class="card">
                    <div class="background"></div>
                    <div class="card_superior">
                        <div class="lado1">
                            <div class="avatar"><img src="{{ asset('img/user.jpg') }}" alt="picture">
                            </div>
                            <div class="content">
                                <h4 class="perfil">{{ $value->name }}</h4>
                                <p class="especialidade">{{ $value->specialty }}</p>
                                <p class="crp">{{ $value->crp }} | CRP</p>
                                <section class="regular">
                                    <p class="cidade">
                                        {{ $value->psychologistInfo->city . ' - ' . $value->psychologistInfo->state }}</p>
                                    <br>

                                </section>
                                <p><span class="price">R$ {{ $value->price . " / " . $value->session_time }}min</p>
                            </div>
                        </div>
                        <div class="lado2">
                            <div class="calendar">
                                <div class="wrapper">
                                    <table id="DiasSemana">
                                        <tr class="linhaTitulo">
                                            <td colspan="7">Horários Disponíveis</td>
                                        </tr>
                                        <tr id="dayRow">
                                            <td class="dia">dom.</td>
                                            <td class="dia">seg.</td>
                                            <td class="dia">ter.</td>
                                            <td class="dia">qua.</td>
                                            <td class="dia">qui.</td>
                                            <td class="dia">sex.</td>
                                            <td class="dia">sáb.</td>
                                        </tr>
                                    </table>
                                    <div class="colunaTempo">
                                        <table class="horas-scroll">
                                            <tr>
                                                <?php
                                                // Gera 7 colunas
                                                for ($i = 1; $i <= 7; $i++) {
                                                    echo '<td class="horaColumn' .
                                                        $i .
                                                        '">
                                                                                                                                                                                                                                                    <ul class="hora-list">
                                                                                                                                                                                                                                                    </ul>
                                                                                                                                                                                                                                                </td>';
                                                }
                                                ?>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_inferior">
                        <p class="resumo">
                            <!-- <button class="sobreBTN" onclick="window.location.href='agendamento.html?psi=' ">Saber Mais...</button> -->
                            <button class="sobreBTN">Saber
                                Mais...</button>
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </main>

    <!-- JANELA MODAL DE CADASTRAO -->
    <div id="id_janela_modal" class='janela_modal'>
        <div class="modal_conteiner">
            <h3>Olá! Bem vindo ao nosso cadastro.</h3>
            <h5>Em qual das opções você se encaixa?</h5>

            <!-- Duas ANCORAS estao com as mesmas class -->
            <a href="./CadPaciente.php" class="janela_modal_cliente">
                <img src="https://assets-global.website-files.com/613f7ca80295647d415b0d85/629f7441846001e38b41cc31_user.svg"
                    loading="lazy" alt="" class="janela_modal_cliente_icons">
                <div class="janela_modal_cliente_titulo">Cliente</div>
                <div class="janela_modal_cliente_frase">Quero fazer sessões de terapias e ver conteúdos sobre saúde
                    emocional</div>
            </a>

            <a href="./CadPsicologo.php" class="janela_modal_cliente">
                <img src="https://assets-global.website-files.com/613f7ca80295647d415b0d85/629f744100a51a93a6febb8c_certif.svg"
                    loading="lazy" alt="" class="janela_modal_cliente_icons">
                <div class="janela_modal_cliente_titulo">Profissional</div>
                <div class="janela_modal_cliente_frase">Quero atender pacientes online e fazer gestão da minha carreira
                </div>
            </a>

            <!-- Botão fechar -->
            <!--
            <div class="modal_footer">
                <a href="#" class="modal_footer_btn_close"> Fechar </a>
            </div> -->

            <a href="#" class="modal_close">&times;</a>
        </div>
    </div>

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
    <script>
        // Aqui está acrescentando os horários na tabela para todos os usuários
        function horasNaTabela() {
            for (let i = 0; i <= 7; i++) { // esse for é usado para as colunas das horas
                const horaColumns = document.querySelectorAll(`.horaColumn${i}`);

                horaColumns.forEach((horaColumn) => {
                    horaColumn.innerHTML += '';

                    // Hora inicial
                    let horaAtual = new Date();
                    // horaAtual.setMinutes(0); // Começa no minuto 0
                    horaAtual.setHours(10, 0)

                    let horaFinal = new Date();
                    horaFinal.setHours(22, 30)

                    const ul = document.createElement('ul');
                    ul.className = 'hora-list'; // Adicione uma classe para a lista

                    while (horaAtual < horaFinal) { // esse gera a quantidade de horas do dia
                        const horaFormatada = horaAtual.toLocaleTimeString('pt-BR', {
                            hour: '2-digit',
                            minute: '2-digit'
                        });

                        // const li = document.createElement('li');
                        // const button = document.createElement('button');
                        // button.textContent = horaFormatada;
                        // button.className = 'hora-button'; // Adicione uma classe para o botão
                        // button.addEventListener('click', indoCadCliente); // Redireciona os butões para cadPaciente
                        // li.appendChild(button);
                        // ul.appendChild(li);


                        const li = document.createElement('li');

                        const button = document.createElement('button');

                        button.textContent = horaFormatada;

                        button.className = 'hora-button'; // Adicione uma classe para o botão

                        button.addEventListener('click', indoCadCliente); // Redireciona os butões para cadPaciente

                        li.appendChild(button);

                        ul.appendChild(li);

                        // Avança 30 minutos
                        horaAtual.setMinutes(horaAtual.getMinutes() + 30);
                    }

                    horaColumn.appendChild(ul); // Adicione a lista à coluna de hora
                });
            }
        }

        // nessa função redireciona os butões para cadPaciente
        function indoCadCliente() {
            // Verifica se o usuário está logado
            window.location.href = "login.php";
        }
    </script>
</body>

</html>
