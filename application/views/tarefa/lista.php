<!--Botão nova tarefa-->
<div class="col-md-12">
   <div class="row">
        <div class="col-md-2">
            <a href="<?= base_url('tarefa/cadastro')?>" class="btn btn-primary btn-block mb-3"><span data-feather="plus"></span>Nova tarefa</a>
        </div>
        
        <div class="col-md-10">
            <form action="<?= base_url('tarefa/filtro')?>" method="post">
                <div class="btn-group col-md-12" role="group" aria-label="Basic example">
                    <select name="filtro" id="filtro" class="custom-select">
                        <option value="" selected disabled>Filtrar tarefas...</option>
                        <option value="0">Em aberto</option>
                        <option value="1">Concluídas</option>
                    </select>
                    <button type="submit" class="btn btn-info btn-block col-md-2"><span data-feather="search" class="mr-2"></span>Filtrar</button>
                </div>
            </form>
        </div>        
        </div>
    </div>
</div>

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


<!-- Verifica se tem tarefas -->
<?php if (empty($tarefas)) : ?>
    <div class="alert alert-info text-center">Nenhum registro encontrado.</div>
<?php else : ?>
    <!-- Lista tarefas -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Prioridade</th>
                <th>Status</th>
                <th>Criada em</th>
                <th>Terminada em</th>
                <th></th>
            </tr>
        </thead>
        <?php foreach ($tarefas as $tarefa) : ?>
            <tbody>
                <tr>
                    <td><?= $tarefa['titulo'] ?></td>
                    <td><?= $tarefa['descricao'] ?></td>

                    <td>
                        <?php if ($tarefa['prioridade'] == 1) : ?>
                            <span class="badge badge-info">Baixa</span>
                        <?php elseif ($tarefa['prioridade'] == 2) : ?>
                            <span class="badge badge-warning">Normal</span>
                        <?php elseif ($tarefa['prioridade'] == 3) : ?>
                            <span class="badge badge-danger">Alta</span>
                        <?php endif; ?>
                    </td>

                    <td>
                        <?= ($tarefa['status']) ? 
                            "<span class='badge badge-success'>Concluída</span>" : 
                            "<span class='badge badge-primary'>Em Aberto</span>";
                        ?>
                    </td>
                    <td><?= data_exibir($tarefa['data_criacao']) ?></td>

                    <td><?= ($tarefa['data_termino']) ?
                            data_exibir($tarefa['data_termino']) : 
                            "<span class='badge badge-secondary'>Ainda em aberto</span>";
                        ?>
                    </td>

                    <td>
                        <!-- Verifica se a tarefa está concluida-->
                        <?php if ($tarefa['status'] == 1) : ?>

                            <button class="btn btn-warning" title="Atualizar" disabled><span data-feather="edit"></span></button>
                            <a href="<?= base_url('tarefa/excluir/') . $tarefa['id'] ?>" class="btn btn-danger" onclick="return confirm('Deseja excluir está tarefa?');" title="Excluir"><span data-feather="trash"></span></a>
                            <button class="btn btn-info" title="Concluir" disabled><span data-feather="check"></span></button>

                        <?php else: ?>

                            <a href="<?= base_url('tarefa/atualizar/') . $tarefa['id'] ?>" class="btn btn-warning" title="Atualizar"><span data-feather="edit"></span></a>
                            <a href="<?= base_url('tarefa/excluir/') . $tarefa['id'] ?>" class="btn btn-danger" onclick="return confirm('Deseja excluir está tarefa?');" title="Excluir"><span data-feather="trash"></span></a>
                            <a href="<?= base_url('tarefa/concluir/') . $tarefa['id'] ?>" class="btn btn-info" title="Concluir" onclick="return confirm('Deseja concluir está tarefa?');"><span data-feather="check"></span></a>
                        
                        <?php endif; ?>
                    </td>   
                </tr>
            </tbody>
        <?php endforeach;?>
    </table>
<?php endif; ?>