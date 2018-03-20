<div class="col-md-12">
	<div class="row">
		<div class="col-md-4">
			<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
			  <div class="card-header text-center">
			    <a href="<?= base_url('tarefa')?>" style="text-decoration: none" title="Minhas tarefas">
			        <img src="<?= base_url('assets/img/list.png')?>">
			        <h6 class="mt-3 text-white">Minhas tarefas</h6>
			    </a>
			  </div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
			  <div class="card-header text-center">
			    <a href="<?= base_url('tarefa/lista_aberto')?>" style="text-decoration: none" title="Tarefas em aberto">
			        <img src="<?= base_url('assets/img/list3.png')?>">
			        <h6 class="mt-3 text-white">Tarefas em aberto</h6>
			    </a>
			  </div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
			  <div class="card-header text-center">
			    <a href="<?= base_url('tarefa/lista_concluido')?>" style="text-decoration: none" title="Tarefas concluídas">
			        <img src="<?= base_url('assets/img/list2.png')?>">
			        <h6 class="mt-3 text-white">Tarefas concluídas</h6>
			    </a>
			  </div>
			</div>
		</div>
	</div>
</div>