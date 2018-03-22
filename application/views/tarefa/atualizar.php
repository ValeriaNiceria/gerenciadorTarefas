<form action="<?= base_url('tarefa/atualizar')?>" method="post" class="needs-validation" novalidate>

    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="titulo">Título:</label>
         <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $tarefa['titulo']?>" placeholder="Título da tarefa" autofocus required/>

        <div class="invalid-tooltip">
          Informe um título para tarefa.
        </div>

      </div>
    </div>

    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição da tarefa" required><?= $tarefa['descricao']?></textarea>
        
        <div class="invalid-tooltip">
          Informe uma descrição para tarefa.
        </div>

      </div>
    </div>

    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="prioridade">Prioridade:</label>
        <select name="prioridade" id="prioridade" class="custom-select" required>
            <option value="" selected disabled>Escolher...</option>
            <option value="1" <?= ($tarefa['prioridade'] == 1) ? "selected" : "";?>>Baixa</option>
            <option value="2" <?= ($tarefa['prioridade'] == 2) ? "selected" : "";?>>Normal</option>
            <option value="3" <?= ($tarefa['prioridade'] == 3) ? "selected" : "";?>>Alta</option>
        </select>

        <div class="invalid-tooltip">
          Selecione um nível de prioridade.
        </div>
      </div>  
    </div>

    <input type="hidden" name="id" value="<?= $tarefa['id']?>"/>

    <button type="submit" class="btn btn-success float-right"><span data-feather="save"></span>Salvar</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>