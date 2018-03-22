<form action="<?= base_url('tarefa/adicionar')?>" method="post">

    <div class="form-group">
      <label for="titulo">Título:</label>
      <input type="text" class="form-control" id="titulo" name="titulo" onkeyup="validacaoCadastro()"  placeholder="Título da tarefa" autofocus/>

      <div id="validacao-titulo" class="validacao badge badge-danger">
        Informe um título para tarefa.
      </div>
    </div>

    <div class="form-group">
      <label for="descricao">Descrição:</label>
      <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição da tarefa"></textarea>
      
      <div id="validacao-descricao" class="validacao badge badge-danger">
        Informe uma descrição para tarefa.
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

      <div id="validacao-prioridade" class="validacao badge badge-danger">
        Selecione um nível de prioridade.
      </div>  
    </div>

    <button type="submit" class="btn btn-success float-right" onclick="validacaoCadastro()"><div data-feather="save"></div>Salvar</button>
</form>


<!-- Validação dos campos -->
<script>
  $(document).ready(function() {
    $("#titulo").keyup(validacaoCadastro); 
  });

  function validacaoCadastro() {
    var titulo = $("#titulo").val();
    var descricao = $("#descricao").val();
    var prioridade = $("#prioridade").val();

    if (titulo == "")
    {
      $("#titulo").css("border-color", "red");
      $("#titulo").css("background-color", "#FFC6C6");
      $("#validacao-titulo").show();     
    } else if (titulo != "") {
      $("#titulo").css("border-color", "green");
      $("#validacao-titulo").hide(); 
    }

    if (descricao == "")
    {
      $("#titulo").css("border-color", "red");
      $("#titulo").css("background-color", "#FFC6C6");
      $("#validacao-titulo").show();     
    }
  }
    
</script>