<header>
    <style>
        .warning-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            /* border: 2px solid #DFD51A; */
            color: #DFD51A;
            background-color: transparent;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .warning-button-two {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: none;
            color: #ffffff;
            background-color: #DFD51A;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .warning-button-two:hover {
            background-color: #ada50f;
            border: none;
            color: #fff;
        }

        .warning-button-two:disabled {
            background-color: #ccc;
            color: #666;
            cursor: not-allowed;
        }

        .warning-button:hover {
            background-color: #DFD51A;
            color: #fff;
        }

        .warning-button.small {
            padding: 5px 10px;
            font-size: 14px;
        }

        .warning-button.large {
            padding: 15px 30px;
            font-size: 18px;
        }
        .alert-danger{
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 5px;
            color: red;
            background-color: rgb(253, 198, 198);
            border: 1px solid rgb(252, 147, 147);
            border-radius: 6px;
        }
    </style>
    <!-- LOGO -->
    <a href="index.html" class="logo">
        <img src="./assets/eupsi.png" alt="teste">
    </a>

    <!-- MENU -->
    <nav>
        <ul class="menu">
            <li><a class="active" href="{{ route('home.index') }}">início</a></li>
            <li><a href="{{ route('pyschologist.index') }}">procurar psicólogo</a></li>
            <li><a href="#">plano psicologo</a></li>
            <li><a href="./contato.html">contato</a></li>
        </ul>
    </nav>

    <div class="acesso">

        @if (auth()->user())
            <p style="margin-right: 6px;">{{ auth()->user()->name }}</p>
            <p>
                <a class="warning-button small" href="{{ route('logout') }}">Sair</a>
            </p>
        @else
            <p>
                <a class="warning-button small" style="margin-right: 6px;" href="{{ route('login.index') }}">Entrar</a>
            </p>
            <!-- <li><a href="CadPaciente.html">Cadastro</a></li> -->
            <p>
                <a class="warning-button small" href="#id_janela_modal">Cadastro</a>
            </p>
            <!-- <li><a href="ModalCadastro.html">Cadastro</a></li> -->
        @endif

        <!-- Icones das Redes Sociais -->
        <section class="icons_rede_sociais">
            <!-- LINK INSTA -->
            <a href="https://www.instagram.com/eupsi.insta/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>

            <!-- LINK WHATSAPP -->
            <a href="https://api.whatsapp.com/send?phone=5581982317474" target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>
        </section>
    </div>
</header>
