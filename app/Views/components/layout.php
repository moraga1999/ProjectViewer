<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url('css/layout.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm  fixed-top">
      <a class="navbar-brand me-2 logo" href="http://localhost/ProjectViewer/dashboard">
        <img
          src="https://i.imgur.com/eb19gjq.png"
          height="50"
          alt="Proyectos de titulacion"
          loading="lazy"
        />
      </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Proyectos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Estudiantes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Reuniones</a>
      </li>
      
    </ul>

  </nav>
  <div>
    <?php
        $this->renderSection ('content');
    ?>
  </div>
  <footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">Tecnologias Web</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>