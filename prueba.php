<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/themes/default.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/style.css">

    <title>INFERNUM.SB</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="hola" href="#">INFERNUM.SB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Productos</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal2" href="#">Sobre Nosotros</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link"  href="view/login.php"><img src="view/img/usuario.jpg" alt=""></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#"><img src="view/img/carito.png" alt=""></a>
      </li>
    </ul>
    </form>
  </div>
</nav>

<div class="slide">
			<div class="slide-inner">
				<input class="slide-open" type="radio" id="slide-1" 
			 	     name="slide" aria-hidden="true" hidden="" checked="checked">
				<div class="slide-item">
					<img src="https://www.migueltroyano.com/wp-content/uploads/2020/10/embeddingApi_7.jpg">
				</div>
				<input class="slide-open" type="radio" id="slide-2" 
			 	     name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="https://www.migueltroyano.com/wp-content/uploads/2020/09/postgres_copy.png">
				</div>
				<input class="slide-open" type="radio" id="slide-3" 
			 	     name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="https://www.migueltroyano.com/wp-content/uploads/2020/09/excel_guardar_como_csv.jpg">
				</div>
				<label for="slide-3" class="slide-control prev control-1">‹</label>
				<label for="slide-2" class="slide-control next control-1">›</label>
				<label for="slide-1" class="slide-control prev control-2">‹</label>
				<label for="slide-3" class="slide-control next control-2">›</label>
				<label for="slide-2" class="slide-control prev control-3">‹</label>
				<label for="slide-1" class="slide-control next control-3">›</label>
				<ol class="slide-indicador">
					<li>
						<label for="slide-1" class="slide-circulo">•</label>
					</li>
					<li>
						<label for="slide-2" class="slide-circulo">•</label>
					</li>
					<li>
						<label for="slide-3" class="slide-circulo">•</label>
					</li>
				</ol>
			</div>
		</div>

<center>
    <h3>Nuestros Productos</h3>
</center>


</body>
</html>