<!-- Notificação -->
<?php
    $error = $this->session->flashdata('error');
    $success = $this->session->flashdata('success');

    echo isset($error) ?
        "<div class='alert alert-danger alert-dismissible fade show text-center' role='alert'>
          <strong>" . $error . "</strong>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>" : 
        "";
    echo isset($success) ?
        "<div class='alert alert-success alert-dismissible fade show text-center' role='alert'>
          <strong>" . $success . "</strong>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>" : 
        "";
?>

<!-- Informações perfil-->

<div class="modal-content">
    <div class="modal-header bg-dark">
    <h5 class="modal-title text-white"><img src="<?= base_url('assets/img/user.png')?>" class="mr-2">Informações</h5>
    </div>
    <div class="modal-body">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" value="<?= $usuario['nome']?>" disabled>

        <label for="email">Email:</label>
        <input type="email" class="form-control" value="<?= $usuario["email"]?>"  disabled>
    </div>
    <div class="modal-footer">
        <a href="<?= base_url('login')?>" class="btn btn-secondary"  data-toggle="modal" data-target="#senhaModal"><span data-feather="rotate-cw" class="mr-2"></span>Atualizar senha</a>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="senhaModal" tabindex="-1" role="dialog" aria-labelledby="senhaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form action="<?= base_url('usuario/atualizarSenha')?>" method="post">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="senhaModalLabel">
                    <span data-feather="lock" class="mr-2"></span>Atualizar senha
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="senhaAtual">Senha atual:</label>
                    <input type="password" name="senhaAtual" id="senhaAtual" placeholder="Informe a senha atual" class="form-control" onkeyup="checarSenha();"/>
                </div>
                <div class="form-group">
                    <label for="senhaNova">Nova senha:</label>
                    <input type="password" name="senhaNova" id="senhaNova" placeholder="Informe a nova senha" class="form-control" onkeyup="checarSenha();"/>
                </div>
                <div class="form-group">
                    <label for="senhaConfirma">Confirmar Senha</label>
                    <input type="password" name="senhaConfirma" id="senhaConfirma" placeholder="Confirmar nova senha" class="form-control" onkeyup="checarSenha();"/>
                </div>

                <!-- Mensagem de validação da senha-->
                <div class="row">
                    <strong>
                        <div id="divcheck"></div>
                    </strong>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" id="enviarSenha" class="btn btn-primary" disabled>Salvar alteração</button>
            </div>
        </div>
    </form>
    </div>
</div>


<!-- Validação dos campos -->
<script>
    $(document).ready(function()
    {
        $("#senhaAtual").keyup(checarSenha);
        $("#senhaNova").keyup(checarSenha);
        $("#senhaConfirma").keyup(checarSenha); 
    });

    function checarSenha()
    {
        var senhaAtual = $("#senhaAtual").val();
        var senhaNova = $("#senhaNova").val();
        var senhaConfirma = $("#senhaConfirma").val();

        if (senhaNova == senhaAtual)
        {
            $("#divcheck").html("<span class='text-danger'>A senha informada é a mesma do campo da senha atual!</span>");
            document.getElementById("enviarSenha").disabled = true;
        } else if (senhaNova == "" || senhaConfirma == "")
        {
            $("#divcheck").html("<span class='text-danger'>Campo de senha vazio!</span>");
            document.getElementById("enviarSenha").disabled = true;
        } else if (senhaNova == senhaConfirma)
        {
            $("#divcheck").html("<span class='text-success'>Ok!</span>");
            document.getElementById("enviarSenha").disabled = false;
        }
    }
    
</script>