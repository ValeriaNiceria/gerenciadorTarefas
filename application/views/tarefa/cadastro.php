<form action="<?= base_url('tarefa/adicionar')?>" method="post">
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título da tarefa" autofocus required/>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição da tarefa" required></textarea>
    </div>

    <div class="form-group">
        <label for="prioridade">Prioridade:</label>
        <select name="prioridade" id="prioridade" class="custom-select" required>
            <option value="" selected disabled>Escolher...</option>
            <option value="1">Baixa</option>
            <option value="2">Normal</option>
            <option value="3">Alta</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success float-right"><span data-feather="save"></span>Salvar</button>
</form>