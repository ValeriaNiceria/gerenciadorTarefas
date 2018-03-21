<form action="<?= base_url('tarefa/atualizar')?>" method="post">
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $tarefa['titulo']?>" placeholder="Título da tarefa" autofocus required/>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição da tarefa" required><?= $tarefa['descricao']?></textarea>
    </div>

    <div class="form-group">
        <label for="prioridade">Prioridade:</label>
        <select name="prioridade" id="prioridade" class="custom-select" required>
            <option value="" selected disabled>Escolher...</option>
            <option value="1" <?= ($tarefa['prioridade'] == 1) ? "selected" : "";?>>Baixa</option>
            <option value="2" <?= ($tarefa['prioridade'] == 2) ? "selected" : "";?>>Normal</option>
            <option value="3" <?= ($tarefa['prioridade'] == 3) ? "selected" : "";?>>Alta</option>
        </select>
    </div>

    <input type="hidden" name="id" value="<?= $tarefa['id']?>"/>

    <button type="submit" class="btn btn-success float-right"><span data-feather="save"></span>Salvar atualização</button>
</form>