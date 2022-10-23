<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inciar Sesion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="fondo">
<section class="vh-100" >
  <div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
        <div class="card shadow-2-strong cardBackground" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Iniciar Sesion</h3>

            <div class="form-outline mb-4">
            <img
          src="https://i.imgur.com/eb19gjq.png"
          height="80"
          alt="Proyectos de titulacion"
          loading="lazy"
        />
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="typeEmailX-2">Email</label>
            <input type="email" id="typeEmailX-2" placeholder = "usuario@example.com" class="form-control form-control-lg" />
              
            <label class="form-label" for="typePasswordX-2">Contraseña</label>
            <input type="password" id="typePasswordX-2" placeholder = "********" class="form-control form-control-lg" />
              
            </div>

            <!-- Checkbox -->
            

            <button class="btn btn-primary btn-lg btn-block mt-2" type="submit">Iniciar Sesion</button>

            <hr class="my-4">

            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Soy estudiante</button>
            <

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>