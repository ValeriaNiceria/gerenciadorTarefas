    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $titulo ?></h1>
      </div>

      <div class="container">
        <?php
          $this->load->view($conteudo);
        ?>
      </div>

      </div>
    </main>
  </div>
</div>

