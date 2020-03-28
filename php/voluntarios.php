<html>
    <head>
        <title>Registrado!!</title>
    <head>
    <body> <!doctype html>
<html>
  <head>
    <title>Funjiac | Registro Voluntarios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="StyleSheet" href="voluntarios.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  </head>
  <body>
    <header class="sticky-top"><!--inicio del header-->
        <div class="barra3">
          <nav></nav>
          <div class="row">
            <div class="col-auto" ><!--caracteristicas generales columna1-->
              <img src="funjiacno.png" width="300px" height="100px"> <!--Posicionamiento del logo-->
            </div>
            <div class="col-6"><!--caracteristicas generales columna2-->
            </div>
            <div class="col-auto"><!--caracteristicas generales columna3-->
                  <div class="social-top">
                    <a href="https://web.facebook.com/pages/category/Nonprofit-Organization/funjiac-106468524228668/?_rdc=1&_rdr"><i class="fab fa-facebook"></i></a>
                  <a href="https://www.instagram.com/funjiac/?hl=cs"><i class="fab fa-instagram"></i></a>
                  <a href="https://twitter.com/funjiac"><i class="fab fa-twitter"></i></a>
                  </div>
            </div>     
          </div>
        </div>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary sticky-top bg-light justify-content-between" style="background:url(menu4.png);">
            <a class="navbar-brand" href="inicio.html">F</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
              <ul class="navbar-nav mr-auto ml-auto text-center mt-2 mt-lg-0">
                <li class="nav-item active ">
                  <h5><a class="nav-link" href="inicio.html">Inicio</a></h5>
                </li>
                <li class="nav-item active ">
                  <h5><a class="nav-link" href="quienessomos.html">Quienes somos</a></h5>
                </li>
                <li class="nav-item active ">
                  <h5><a class="nav-link" href="juntadirectiva.html">Junta Directiva</a></h5>
                </li>
                  </li>
                  <li class="nav-item  ">
                    <a class="nav-link" href="voluntarioss.php"><h5>Voluntarios</h5></a>
                  </li>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <h5>Contacto</h5>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: rgb(0, 0, 131); color:white; border-bottom: rgb(173, 72, 0);">
                      <h6><span><i class="fas fa-phone"></i> &nbsp; 809-890-0341</span><br></h6>
                      <ph6><span> funjiac@gmail.com</span></h6>
                    </div>
                  </li>
              </ul>
            </div>
          </nav>
      </header><!--Fin del header-->
    <div class="container-fluid">
        <div class="barra2"><!--barra2-->
            <div class="row">
              <div class="col" style="font-family: 'Oswald', sans-serif; color:white;"><!--caracteristicas generales columna1-->
                <h3>Voluntarios</h3> <!--Posicionamiento del logo-->
              </div>
              <div class="col-6"><!--caracteristicas generales columna2-->
              </div>
              <div class="col"><!--caracteristicas generales columna3-->
               <p>|   Formulario de Registro</p><!--link de info-->
              </div>    
            </div>
        </div>
        <div class="container"> 
            <div class="jumbotron" style="background-color: #bbb;">
                <h1 class="text-center">FORMULARIO DE APLICACIÓN PARA VOLUNTARIOS FUNDACIÓN JUVENTUD INTERNACIONAL POR ACCION CIUDADANA</h1> <!--titulo-->
                <p class="text-center"><Strong><h3>La Fundación Juventud Internacional por Accion Ciudadana, se reserva el derecho de 
                    admitir o retirar al voluntario que no cumpla con el interés de la organización y su código de ética.</h3></Strong>
                </p>
            </div>
            <div class="jumbotron"><!--clase de info-->
                <h1 class="text-center">Registro exitoso !!   <i class="fas fa-thumbs-up"></i></h1> <!--titulo-->
                <p class="text-center"><h3><?php

                $conexion = mysqli_connect("localhost", "root", "", "base1") or
                die("Problemas con la conexión");

                mysqli_query($conexion, "insert into voluntarios
                (nombre, correo, direccion, cedula_pass, num_tel, edad, voluntario, academico) 
                values
                ('$_REQUEST[nombre]','$_REQUEST[email]','$_REQUEST[direccion]','$_REQUEST[id]','$_REQUEST[numerodetelefono]',
                '$_REQUEST[edad]','$_REQUEST[realidad]','$_REQUEST[academico]')")
                or die("Problemas en el select" . mysqli_error($conexion));
                mysqli_close($conexion);
                ?> Tu registro se ha ejecutado exitosamente, muy pronto nos estaremos comunicando contigo.
                </p>
                <a href="inicio.html" class="btn btn-primary btn-lg" style="background-color: blue; color:white">Volver a Inicio</a>  <!--boton para ingresar a la pagina-->    
            </div>
        </div>
    </div>
    <!--footer-->
    <footer>
        <div class="footer-container">
            <div class="left-col">
                <img src="funjiacno.png" alt="" class="logo">
                <div class="social-media">
                    <a href="https://web.facebook.com/pages/category/Nonprofit-Organization/funjiac-106468524228668/?_rdc=1&_rdr"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/funjiac/?hl=cs"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/funjiac"><i class="fab fa-twitter"></i></a>
                </div>
                <p class="right-text">© Funjiac - 2020. Todos los derechos reservados | Designed by Shantel Mora</p>
            </div>
        </div>
  </footer>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <body>

