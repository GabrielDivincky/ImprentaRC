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
    <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
    
    <!--normalize-->
    <link rel="stylesheet" type="text/css" href="CSS/normalize.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="CSS/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="validar.js"></script>

    <!--aos animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



  </head>

  <!---------------------------BODY------------------------------------------------------------>

  <body>
      
  <!--------------------- NAVIGATION----------------------------------------------------------->
     <?php 
     include('barraNavegacion.php')
      ?>
<!-----------------------------------seccion 1-------------------------------------------------->
 

<section class="container-fluid seccion1" style="background-color: #4C566E">
  <div class="row imagenesProd justify-content-center">
      <div class="col-sm-12 col-md-6 col-lg-6 py-3" data-aos="fade-right">
          <img src="imagenes/papeleria-comercial.jpg " class="fotos">
     </div> 
     <div class="col-sm-12 col-md-6 col-lg-6 py-3" data-aos="fade-down"> 
      <h3>PAPELERIA COMERCIAL</h3>
      <p>Imprimimos su papelería de empresa, profesional o institucional con la máxima calidad Digital u Offset de acuerdo al volumen que requiera, terminaciones y papeles especiales de acuerdo a su gusto.</p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 py-3">
        <a href="presupuesto.php"><button type="submit" class="btn btn-info mb-2 botonPresupuesto"  data-aos="fade-left"onclick="presupuesto.php">Solicitar presupuesto</button></a>
    </div>
  </div>  
</section>

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
    <!-- aos animation script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
  </body>
</html>