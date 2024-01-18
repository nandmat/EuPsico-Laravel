<div id="id_janela_modal" class='janela_modal'>
    <div class="modal_conteiner">
        <h3>Olá! Bem vindo ao nosso cadastro.</h3>
        <h5>Em qual das opções você se encaixa?</h5>

        <!-- Duas ANCORAS estao com as mesmas class -->
        <a href="{{ route('cadastrar.paciente.index') }}" class="janela_modal_cliente">
            <img src="https://assets-global.website-files.com/613f7ca80295647d415b0d85/629f7441846001e38b41cc31_user.svg"
                loading="lazy" alt="" class="janela_modal_cliente_icons">
            <div class="janela_modal_cliente_titulo">Cliente</div>
            <div class="janela_modal_cliente_frase">Quero fazer sessões de terapias e ver conteúdos sobre saúde
                emocional</div>
        </a>

        <a href="{{ route('cadastrar.psicologo.index') }}" class="janela_modal_cliente">
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
