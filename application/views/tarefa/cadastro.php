<form action="<?= base_url('tarefa/adicionar')?>" method="post" class="needs-validation" novalidate>
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título da tarefa" autofocus required/>

        <div class="invalid-feedback">
          Informe um título para tarefa.
        </div>

        <div class="valid-feedback">
          Parece um bom título!
        </div>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição da tarefa" required></textarea>
        
        <div class="invalid-feedback">
          Informe uma descrição para tarefa.
        </div>

        <div class="valid-feedback">
          Parece uma boa descrição!
        </div>
    </div>

    <div class="form-group">
        <label for="prioridade">Prioridade:</label>
        <select name="prioridade" id="prioridade" class="custom-select" required>
            <option value="" selected disabled>Escolher...</option>
            <option value="1">Baixa</option>
            <option value="2">Normal</option>
            <option value="3">Alta</option>
        </select>

        <div class="invalid-feedback">
          Selecione um nível de prioridade.
        </div>
    </div>

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