<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/img/task.ico')?>"> 

    <title>Cadastro usuário - Gerenciador de tarefas</title>

    <!-- Bootstrap core CSS -->
    <?= link_tag('assets/css/bootstrap.min.css')?>

    <?= link_tag('assets/css/style.css')?>
  </head>
  <body>
    <div class="modal-dialog" role="document">
    <form action="<?= base_url('usuario/adicionar')?>" method="post">
    <div class="modal-content">
        <div class="modal-header bg-dark">
        <h5 class="modal-title text-white"><img src="<?= base_url('assets/img/user.png')?>" class="mr-2">Cadastro</h5>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Informe o nome" autofocus>

            <!--mensagem validação-->
            <div id="validacao-nome" class="validacao badge badge-danger"></div>
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>

            <!--mensagem validação-->
            <div id="validacao-email" class="validacao badge badge-danger"></div>
          </div>

          <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>

            <!--mensagem validação-->
            <div id="validacao-senha" class="validacao badge badge-danger"></div>
          </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Salvar</button>
            <a href="<?= base_url('login')?>" class="btn btn-secondary" data-dismiss="modal">Fechar</a>
        </div>
    </div>
    </form>
    </div>


    <!-- Notificação -->
    <?php
      $error = $this->session->flashdata('error');

      echo isset($error) ?
        "<div class='alert alert-danger text-center modal-dialog'>
          <strong>" . $error . "</strong>
        </div>" : 
        "";
    ?>


  <!-- Validação dos campos -->
  <script src="<?=base_url('assets/js/jquery-3.2.1.slim.min.js')?>"></script>
  <script>
    $(document).ready(function() {
      $("#nome").keyup(checar);
      $("#email").keyup(checar);
      $("#senha").keyup(checar);
    });


    function checar() {
      var nome = $("#nome").val();
      var email = $("#email").val();
      var senha = $("#senha").val();

      var emailFiltro = /^.+@.+\..{2,}$/;
      var emailInvalido = /[\(\)\<\>\,\;\:\\\/\"\[\]]/;

      if (nome != "") {
        $("#nome").css("border-color", "green");
        $("#validacao-nome").hide();
      }

      if (email != "") {
        $("#email").css("border-color", "green");
        $("#validacao-email").hide();

        if (!(emailFiltro.test(email)) || email.match(emailInvalido)) {
          $("#email").focus();
          $("#email").css("border-color", "red");
          $("#validacao-email").show();
          $("#validacao-email").html("Email informado não é válido.");
          return false;
        }
      }

      if (senha != "") {
        $("#senha").css("border-color", "green");
        $('#validacao-senha').hide();

        if (senha.length < 5) {
          $("#senha").focus();
          $("#senha").css("border-color", "red");
          $("#validacao-senha").show();
          $("#validacao-senha").html("Senha com menos de 5 caracteres.");
          return false;
        }
      }
    }


    $("button").click(function(){
      var nome = $("#nome").val();
      var email = $("#email").val();
      var senha = $("#senha").val();

      var emailFiltro = /^.+@.+\..{2,}$/;
      var emailInvalido = /[\(\)\<\>\,\;\:\\\/\"\[\]]/;

      if(nome == "" && email == "" && senha == "") {
        $("#nome").focus();
        $("#nome").css("border-color", "red");
        $("#validacao-nome").show();
        $("#validacao-nome").html("Por favor, informe o nome.");

        $("#senha").css("border-color", "red");
        $("#validacao-senha").show();
        $("#validacao-senha").html("Por favor, informe a senha.");

        $("#email").css("border-color", "red");
        $("#validacao-email").show();
        $("#validacao-email").html("Por favor, informe o email.");

        return false;
      }
      
      if (nome == "") {
        $("#nome").focus();
        $("#nome").css("border-color", "red");
        $("#validacao-nome").show();
        $("#validacao-nome").html("Por favor, informe o nome.");
        return false;
      }

      if (email == "") {
        $("#email").focus();
        $("#email").css("border-color", "red");
        $("#validacao-email").show();
        $("#validacao-email").html("Por favor, informe o email.");
        return false;
      }

      if (senha == "") {
        $("#senha").focus();
        $("#senha").css("border-color", "red");
        $("#validacao-senha").show();
        $("#validacao-senha").html("Por favor, informe a senha.");
        return false;
      }

      if (!(emailFiltro.test(email)) || email.match(emailInvalido)) {
        $("#email").focus();
        $("#email").css("border-color", "red");
        $("#validacao-email").show();
        $("#validacao-email").html("Email informado não é válido.");
        return false;
      }

      if (senha.length < 5) {
        $("#senha").focus();
        $("#senha").css("border-color", "red");
        $("#validacao-senha").show();
        $("#validacao-senha").html("Senha com menos de 5 caracteres.");
        return false;
      }
    });
  </script>
  </body>
</html>