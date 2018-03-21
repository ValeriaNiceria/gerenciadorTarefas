<ul class="list-group">
  <li class="list-group-item list-group-item-action list-group-item-info">
    <h5><?= $tarefa['titulo']?></h5>
  </li>

  <li class="list-group-item"><strong>Descrição: </strong>
  	<?= $tarefa['descricao']?>
  </li>

  <li class="list-group-item"><strong>Prioridade: </strong>
  		<?php if ($tarefa['prioridade'] == 1) : ?>
	        <span class="badge badge-info">Baixa</span>
	    <?php elseif ($tarefa['prioridade'] == 2) : ?>
	        <span class="badge badge-warning">Normal</span>
	    <?php elseif ($tarefa['prioridade'] == 3) : ?>
	        <span class="badge badge-danger">Alta</span>
	    <?php endif; ?>
  </li>

  <li class="list-group-item"><strong>Status: </strong>
		<?= ($tarefa['status']) ? 
	        "<span class='badge badge-success'>Concluída</span>" : 
	        "<span class='badge badge-primary'>Em Aberto</span>";
	    ?>
  </li>

  <li class="list-group-item"><strong>Criada em: </strong>
  		<?= data_exibir($tarefa['data_criacao']) ?>
  </li>

  <li class="list-group-item"><strong>Terminada em: </strong>
  		<?= ($tarefa['data_termino']) ?
            data_exibir($tarefa['data_termino']) : 
            "<span class='badge badge-secondary'>Ainda em aberto</span>";
        ?>
  </li>

    <li class="list-group-item">
  		<div class="float-right">
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
  		</div>
  </li>
</ul>