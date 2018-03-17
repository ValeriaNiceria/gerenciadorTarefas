<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/img/task.ico')?>"> 

    <title>Cadastro usuário - Gerenciador de tarefas</title>

    <!-- Bootstrap core CSS -->
    <?= link_tag('assets/css/bootstrap.min.css')?>
  </head>
  <body>
    <div class="modal-dialog" role="document">
    <form action="<?= base_url('usuario/adicionar')?>" method="post">
    <div class="modal-content">
        <div class="modal-header bg-dark">
        <h5 class="modal-title text-white"><img src="<?= base_url('assets/img/user.png')?>" class="mr-2">Cadastro</h5>
        </div>
        <div class="modal-body">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Informe o nome" required autofocus>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" class="form-control mt-2" placeholder="Senha" required>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Salvar</button>
            <a href="<?= base_url('login')?>" class="btn btn-secondary" data-dismiss="modal">Fechar</a>
        </div>
    </div>
    </form>
    </div>
  </body>
</html>

