<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	
	<link rel="stylesheet" type="text/css" href="/prowin/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="/prowin/assets/css/map-europe.css" media="screen" />
	<!-- Bootstrap CSS -->
	<link href="/prowin/assets/css/vendor/bootstrap/scss/bootstrap.css" rel="stylesheet">
	<!-- Grafico CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />

</head>

<body class="color-2">
<header>
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
			<div class="container">
					<a class="navbar-brand " href="./">
					<img src="/prowin/assets/img/svg/logo.svg" alt="LOGO PROWIN" height="100px" >
					</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href='<?php echo site_url('home/index')?>'>CLASIFICACIONES | </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href='<?php echo site_url('home/resultados')?>'>RESULTADOS |</a> 
					</li>
					<li class="nav-item">
						<a class="nav-link" href='<?php echo site_url('home/estadisticas')?>'>ESTADÍSTICAS |</a> 
					</li>
					<li class="nav-item">
						<a class="nav-link" href='<?php echo site_url('')?>'>INICIO SESIÓN |</a> 
					</li>
					
				</div> 
			</div>
		</nav>

	</header>
	<main></main>
	<footer class="bg-dark text-center text-white pt-md">
		<!-- Grid container -->
		<div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Únete a nuestra comunidad</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Suscríbete
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>
		<!-- Grid container -->
		<div class="container p-4 pb-0">
			<!-- Section: Social media -->
			<section class="mb-4">
			<!-- Facebook -->
			<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-facebook-f"></i
			></a>

			<!-- Twitter -->
			<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-twitter"></i
			></a>

			<!-- Google -->
			<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-google"></i
			></a>

			<!-- Instagram -->
			<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-instagram"></i
			></a>

			<!-- Linkedin -->
			<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-linkedin-in"></i
			></a>

			<!-- Github -->
			<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-github"></i
			></a>
			</section>
			<!-- Section: Social media -->
		</div>
		<!-- Grid container -->

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2020 Copyright:
			
		</div>
  	<!-- Copyright -->
	</footer>
	</body>
</html>
