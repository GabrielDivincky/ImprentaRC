
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ROTATIVA COMERCIAL</title>

    <!---------- FONTS----------------------------------->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-----------ICOMOON--------------------------------->
    <link rel="stylesheet" href="css/icomoon/style.css">

    <!-----------------FAVICON---------------------------->
    <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">

    <!--normalize-->
    <link rel="stylesheet" type="text/css" href="/CSS/normalize.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="CSS/main.css"> 

   
   <script src="js/vendor/modernizr-2.8.3.min.js"></script>
   
    <!--aos-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  </head>

  <!---------------------------BODY------------------------------------------------------------>

  <body>
      
  <!--------------------- NAVIGATION----------------------------------------------------------->
      <?php 
              include('barraNavegacion.php')
         ?>
        

     
  <!--------------------------------- CAROUSEL ---------------------------------------------------->
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="imagenes/operadora.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imagenes/pantones.jpeg" alt="second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imagenes/maquina.jpg" alt="third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>

 
  
<!----------------------------seccion1-------------------------------------------------->

  <div class="container-fluid parrallax py-5" id="seccion1">
    <div class="container-fluid miniseccion2">
      <div class="container py-2">
        <h2>NOSOTROS</h2>
        <P><b>Somos una empresa gráfica dedicada a brindar un servicio integral de imagen institucional. Nuestro objetivo es brindar servicios y productos de calidad, no solo en los productos finales impresos sino en su terminación y colocación en el lugar deseado por el cliente.</b></P>
      </div>
    </div>
  </div>    

    
<!----------------------------seccion2-------------------------------------------------->

<div class="container-fluid seccion2">
<h2 class="container gama">CONTAMOS CON UNA AMPLIA GAMA DE CLIENTES</h2>
<div class="container">
  <div class="row empresas">
    <div class="col-md-4 columnas">
      <h3>Empresas Corporativas</h3>
      <p>Ofrecemos servicios para empresas corporativas, entre las cuales podemos mencionar empresas del rubro financiero, banco o financieras, de consumo masivo como empresas de comunicación y celulares, bebidas, turismo, y también del rubro laboratorios, gubernamentales e industriales.
    </div>
    <div class="col-md-4 columnas">
      <h3>Empresas Pymes</h3>
      <p>Damos soluciones efectivas en impresiones y procesos digitales de impresión o personalización de datos, mailings u piezas de promoción o marketing directo.
      Ofrecemos impresiones de alto o bajo volumen apuntando a resolver y utilizar tecnología para obtener la mejor relación costo beneficio.</p>
    </div>
    <div class="col-md-4 columnas">
      <h3>Profesionales o Diseñadores</h3>
      <p>Somos también diseñadores y técnicos gráficos por lo cual entendemos el lenguaje y la agilidad que requiere dar soluciones para clientes.
      Ofrecemos soluciones digitales, ajustes de archivos para la mejor obtención de resultados a la hora de poner en máquina su trabajo.</p>
    </div>

  </div>
</div>
</div>


 
<!---------------------------Formulario------------------------------->
<div class="parrallax" id="formulario">
<div class="container" >
      <div class="row" >
      <div class="col-md-6 col-lg-6" id="contacto">      

        <h1 class="display-4" >Contacto</h1>
        <hr class="bg-info">
        <p class="pb-0 mb-0"><b>Te invitamos a contactarnos, te responderemos a la brevedad</b> </p><br/>
        <form action="registrar.php" method="post" class="form-register" name="email" onsubmit="return validar();">
          <div class="row form-group">
            <label for="nombre" class="col-form-label col-md-4"><b>Nombre</b></label>
            <div class="col-md-8">
              <input type="" name="nombre" value="" id="nombre" class="form-control" required>
          </div>
        </div>
        <div class="row form-group">
            <label for="apellido" class="col-form-label col-md-4"><b>Apellido</b></label>
            <div class="col-md-8">
              <input type="" name="apellido" value="" id="apellido" class="form-control">
          </div>
        </div>
        <div class="row form-group">
            <label for="telefono" class="col-form-label col-md-4"><b>Telefono</b></label>
            <div class="col-md-8">
              <input type="" name="telefono" value="" id="telefono" class="form-control">
          </div>
        </div>
          <div class="row form-group">
            <label for="Email" class="col-form-label col-md-4"><b>Email</b></label>
            <div class="col-md-8">
              <input type="email" name="email" value="" id="email" class="form-control">
          </div>
        </div>
          <div class="row form-group">
              <label for="Consulta" class="col-form-label col-md-4"><b>Consulta</b></label>
              <div class="col-md-8">
                <textarea row="3" class="form-control id="consulta" name="consulta"></textarea>
              </div>
          </div>
          <button type="submit" class="btn btn-info mb-2">Enviar</button>
        </form> 
      </div>
           
    <div class="Mapa col-md-6 lg-6 py-2 pr-2" data-aos="fade-up">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.945233825637!2d-58.47805888508341!3d-34.58025228046561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb66ddd5bd3b1%3A0x2a1e682bded3e876!2sG%C3%A1ndara+2265%2C+C1431DAA+CABA!5e0!3m2!1ses-419!2sar!4v1544908563699" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>  
    </div>
    </div>
</div>
</div>
<!-------------------------------------FOOTER-------------------------------------------------->

<?php 
      include('footer.php')
 ?>
 
  <!---------------------------------------------------------------------------------------------> 
    <!-- Optional JavaScript -->
   
    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <!--JQUERY-->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script type="text/JavaScript" src="JS/main.js"></script>
   
    <script>
      function inOpa(x) {
        x.style.opacity = 0.7;
        
      }

    
      function outOpa(x) {
        x.style.opacity = 1;
        
      }
  
    

    </script>

    <!-- aos animation script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
  </body>
</html>