<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= base_url('dashboard')?>">Grenciador de tarefas</a>

    <div class="dropdown mr-3">
        <div class="dropdown-toggle text-white" data-toggle="dropdown" href="#">
            <span data-feather="user"></span> Olá, <?= $this->session->userdata['nome'] ?>
        </div>
        <ul class="dropdown-menu dropdown-user">
            <li>
                <a class="dropdown-item" href="<?= base_url('usuario/perfil')?>">
                    <span data-feather="user"></span>
                    Perfil
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="<?= base_url('login/logout')?>" onclick="return confirm('Deseja sair?');">
                    <span data-feather="log-out"></span>
                    Sair
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('dashboard')?>">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url('tarefa')?>">
                <span data-feather="list"></span>
                Minhas tarefas
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url('tarefa/cadastro')?>">
                <span data-feather="plus"></span>
                Cadastrar
            </a>
            </li>
            
        </ul>

        </div>
    </nav>