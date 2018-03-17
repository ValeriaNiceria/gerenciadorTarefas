<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Gerenciador de tarefas</title>

    <!-- Bootstrap core CSS -->
    <?= link_tag('assets/css/bootstrap.min.css')?>

    <!-- Custom styles for this template -->
    <?= link_tag('assets/css/dashboard.css')?>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Grenciador de tarefas</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <div class="row">
            <a class="nav-link mr-3" href="#"><span data-feather="user"></span>Perfil</a>
            <a class="nav-link mr-3" href="#"><span data-feather="log-out"></span>Sair</a>
          </div>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="list"></span>
                  Minhas tarefas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="plus"></span>
                  Cadastrar
                </a>
              </li>
              
            </ul>

          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>

         

        
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets/js/jquery-3.2.1.slim.min.js')?>" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url('assets/js/jquery-slim.min.js')?>"><\/script>')</script>
    <script src="<?= base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>

    <!-- Icons -->
    <script src="<?= base_url('assets/js/feather.min.js')?>"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="<?= base_url('assets/js/Chart.min.js')?>"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
