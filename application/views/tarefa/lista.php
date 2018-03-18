<!--Botão nova tarefa-->
<a href="<?= base_url('tarefa/cadastro')?>" class="btn btn-primary mb-3"><span data-feather="plus"></span>Nova tarefa</a>

<!-- Notificação -->
<?php
    $error = $this->session->flashdata('error');
    $success = $this->session->flashdata('success');

    echo isset($error) ? "<div class='alert alert-danger text-center'>" . $error . "</div>" : "";
    echo isset($success) ? "<div class='alert alert-success text-center'>" . $success . "</div>" : "";
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
                            <a href="" class="btn btn-danger" title="Excluir"><span data-feather="trash"></span></a>
                            <button class="btn btn-info" title="Concluir" disabled><span data-feather="check"></span></button>

                        <?php else: ?>

                            <a href="" class="btn btn-warning" title="Atualizar"><span data-feather="edit"></span></a>
                            <a href="" class="btn btn-danger" title="Excluir"><span data-feather="trash"></span></a>
                            <a href="" class="btn btn-info" title="Concluir"><span data-feather="check"></span></a>
                        
                        <?php endif; ?>
                    </td>   
                </tr>
            </tbody>
        <?php endforeach;?>
    </table>
<?php endif; ?>