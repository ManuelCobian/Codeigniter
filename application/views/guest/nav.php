<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <a class="navbar-brand" href="<?= base_url() ?>"><?= $nav?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>homes/Acerca">Acerca</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>homes/Contact">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>homes/Login">Login </a>
          
          </li>
        </ul>
      </div>
    </nav>