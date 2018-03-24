<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/img/task.ico')?>"> 

    <title>Login - Gerenciador de tarefas</title>

    <!-- Bootstrap core CSS -->
    <?= link_tag('assets/css/bootstrap.min.css')?>

    <?= link_tag('assets/css/style.css')?>

  </head>
  <body>
    <div class="modal-dialog" role="document">
    <form action="login/logar" method="post">
    <div class="modal-content">
        <div class="modal-header bg-dark">
        <h5 class="modal-title text-white"><img src="<?= base_url('assets/img/lock.png')?>" class="mr-2">Acesso ao sistema</h5>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="email" class="sr-only">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Informe o email" autofocus/>

            <!--mensagem validação-->
            <div id="validacao-email" class="validacao badge badge-danger"></div>
          </div>
            
          <div class="form-group">
            <label for="senha" class="sr-only">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control mt-2" placeholder="Senha"/> 

            <!--mensagem validação-->
            <div id="validacao-senha" class="validacao badge badge-danger"></div>
          </div>
            
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Logar <img src="<?= base_url('assets/img/login.png')?>"></button>
        </div>
    </div>
    </form>
    </div>
    <p class="text-center">Não possui uma conta? <a href="<?= base_url('usuario')?>">Criar conta</a></p>

    <!-- Notificação -->
    <?php
      $error = $this->session->flashdata('error');
      $success = $this->session->flashdata('success');

      echo isset($error) ?
        "<div class='alert alert-danger text-center modal-dialog'>
          <strong>" . $error . "</strong>
        </div>" : 
        "";
      echo isset($success) ?
        "<div class='alert alert-success text-center modal-dialog'>
          <strong>" . $success . "</strong>
        </div>" : 
        "";
    ?>
  <!-- Validação dos campos -->
  <script src="<?=base_url('assets/js/jquery-3.2.1.slim.min.js')?>"></script>
  <script>
    $(document).ready(function() {
      $("#email").keyup(checar);
      $("#senha").keyup(checar);
    });

    function checar() {
      var email = $("#email").val();
      var senha = $("#senha").val();

      var emailFiltro = /^.+@.+\..{2,}$/;
      var emailInvalido = /[\(\)\<\>\,\;\:\\\/\"\[\]]/;

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
        $("#validacao-senha").hide();

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
      var email = $("#email").val();
      var senha = $("#senha").val();

      var emailFiltro = /^.+@.+\..{2,}$/;
      var emailInvalido = /[\(\)\<\>\,\;\:\\\/\"\[\]]/;

      if (email == "" && senha == ""){
        $("#email").focus();
        $("#email").css("border-color", "red");
        $("#validacao-email").show();
        $("#validacao-email").html("Por favor, informe o email.");

        $("#senha").css("border-color", "red");
        $("#validacao-senha").show();
        $("#validacao-senha").html("Por favor, informe a senha.");

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