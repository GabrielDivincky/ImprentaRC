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
      

<!-----------------------------------seccion 1------------------------------------------------>

    <div class="container-fluid" style="background-color: #4C566E;padding-left: 0;padding-right: 0;" >
      <div class="row imagenesProduc">
        <div class="col-sm-12 col-md-6 col-lg-4 recuadros1">
          <a href="papcomercial.php"><img src="imagenes/papeleria-comercial.jpg" class="fotos">
          </a>
          <h3>PAPELERIA COMERCIAL</h3>
          <!--<p>Imprimimos su papelería de empresa, profesional o institucional con la máxima calidad Digital u Offset de acuerdo al volumen que requiera, terminaciones y papeles especiales de acuerdo a su gusto.</p>-->
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 recuadros1" >
            <a href="formCont.php"><img src="imagenes/formcontinuos.jpg" class="fotos">
            </a>
            <h3>FORMULARIOS CONTINUOS</h3>
            <!--<p>Somos una imprenta líder en impresión de formularios continuos. 
            Nuestro sistema de impresión Offset y Rotativo nos permite imprimir bajas o grandes cantidades por igual, así como trabajos urgentes.</p>-->
        </div> 
        <div class="col-sm-12 col-md-6 col-lg-4 recuadros1">
            <a href='folleteria.php'><img src="imagenes/folleteria.jpg" class="fotos">
            </a>
            <h3>FOLLETERIA</h3>
            <!--<p>Imprimimos Flyers, Dípticos, Trípticos y todo tipo de formato para su Folletería en sistema Digital u Offset para lucir sus productos, empresa o comunicación.</p>-->
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 recuadros2">
            <a href='banners.php'><img src="imagenes/Gran_formato.jpg" class="fotos">
            </a>
            <h3>BANNERS</h3>
            <!--<p>Ploteamos e imprimimos en grandes formatos con calidad HP Látex, con tintas ecológicas y protección UV, en todo tipo de materiales y primera calidad.</p>-->
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 recuadros2">
            <a href='etiquetas.php'><img src="imagenes/etiquetas.jpg" class="fotos">
            </a>
            <h3>ETIQUETAS</h3>
            <!--<p>Producimos miles de calcos / stickers y etiquetas para sus productos, promoción o empresa sobre soportes diversos como vinilos y papeles autoadhesivos.</p>-->
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 recuadros2">
            <a href='packaging.php'><img src="imagenes/estuches.jpg" class="fotos">
            </a>
            <h3>PACKAGING</h3>
            <!--<p>Impresos sobre papel de distintos tipos y gramajes con terminaciones especiales como pueden ser Polipropileno, Laminado, Laca UV, Troquelado. Terminaciones en Stamping y Relieve.</p>-->
        </div>
     </div>
   </div> 
<!-------------------------------------FOOTER-------------------------------------------------->
<div class="container-fluid" style="padding: 0">
<?php 
    include('footer.php')
 ?>
 </div> 
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