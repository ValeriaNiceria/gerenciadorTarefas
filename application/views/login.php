<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/img/task.ico')?>"> 

    <title>Login - Gerenciador de tarefas</title>

    <!-- Bootstrap core CSS -->
    <?= link_tag('assets/css/bootstrap.min.css')?>
  </head>
  <body>
    <div class="modal-dialog" role="document">
    <form>
    <div class="modal-content">
        <div class="modal-header bg-dark">
        <h5 class="modal-title text-white"><img src="<?= base_url('assets/img/lock.png')?>" class="mr-2">Acesso ao sistema</h5>
        </div>
        <div class="modal-body">
            <label for="email" class="sr-only">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Informe o email" required autofocus>

            <label for="senha" class="sr-only">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control mt-2" placeholder="Senha" required>
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

      echo isset($error) ? "<div class='alert alert-danger text-center modal-dialog'>" . $error . "</div>" : "";
      echo isset($success) ? "<div class='alert alert-success text-center modal-dialog'>" . $success . "</div>" : "";
    ?>
  </body>
</html>

