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
        <a href="<?= base_url('login')?>" class="btn btn-secondary" data-dismiss="modal"><span data-feather="rotate-cw" class="mr-2"></span>Atualizar senha</a>
    </div>
</div>