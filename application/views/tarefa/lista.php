<!--Botão nova tarefa-->
<a href="<?= base_url('tarefa/cadastro')?>" class="btn btn-primary mb-3"><span data-feather="plus"></span>Nova tarefa</a>

<!-- Notificação -->
<?php
    $error = $this->session->flashdata('error');
    $success = $this->session->flashdata('success');

    echo isset($error) ? "<div class='alert alert-danger text-center'>" . $error . "</div>" : "";
    echo isset($success) ? "<div class='alert alert-success text-center'>" . $success . "</div>" : "";
?>

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
</table>