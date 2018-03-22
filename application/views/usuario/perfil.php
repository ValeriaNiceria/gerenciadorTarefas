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
                    <img src="<?= base_url('assets/img/lock.png')?>" class="mr-2">
                    Atualizar senha
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="senhaAtual">Senha atual:</label>
                    <input type="password" name="senhaAtual" id="senhaAtual" placeholder="Informe a senha atual" class="form-control" onkeyup="checarSenha();" autofocus/>
                </div>
                <div class="form-group">
                    <label for="senhaNova">Nova senha:</label>
                    <input type="password" name="senhaNova" id="senhaNova" placeholder="Informe a nova senha" class="form-control" onkeyup="checarSenha();"/>
                    <!-- Mensagem de validação da senha-->
                    <div class="row" id="divNova"></div>
                </div>
                <div class="form-group">
                    <label for="senhaConfirma">Confirmar Senha</label>
                    <input type="password" name="senhaConfirma" id="senhaConfirma" placeholder="Confirmar nova senha" class="form-control" onkeyup="checarSenha();"/>
                    <!-- Mensagem de validação da senha-->
                    <div class="row" id="divConfirma"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" id="enviarSenha" class="btn btn-success" disabled>Salvar alteração</button>
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
            $("#divNova").html("<span class='badge badge-danger ml-3 mt-2'>A senha informada é a mesma do campo da senha atual</span>");
            $("#senhaNova").css("border-color", "red");

            document.getElementById("enviarSenha").disabled = true;

        } else if (senhaNova == "" || senhaConfirma == "")
        {
            $("#divNova").html("<span class='badge badge-danger ml-3 mt-2'>Campo de senha vazio</span>");
            $("#senhaNova").css("border-color", "red");

            $("#divConfirma").html("<span class='badge badge-danger ml-3 mt-2'>Campo de senha vazio</span>");
            $("#senhaConfirma").css("border-color", "red");

            document.getElementById("enviarSenha").disabled = true;

        } else if (senhaNova != senhaConfirma) 
        {
            $("#divNova").html("<span class='badge badge-danger ml-3 mt-2'>Senhas diferentes</span>");
            $("#senhaNova").css("border-color", "red");

            $("#divConfirma").html("<span class='badge badge-danger ml-3 mt-2'>Senhas diferentes</span>");
            $("#senhaConfirma").css("border-color", "red");

            document.getElementById("enviarSenha").disabled = true;

        } else if (senhaNova == senhaConfirma)
        {
            $("#divNova").html("");
            $("#divConfirma").html("");

            $("#senhaAtual").css("border-color", "green");
            $("#senhaNova").css("border-color", "green");
            $("#senhaConfirma").css("border-color", "green");

            document.getElementById("enviarSenha").disabled = false;
        }
    }
    
</script>