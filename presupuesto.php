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

<!-----------------------------------PRESUPUESTO---------------------------------------------->
   <!--?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
      
          if(isset($_POST['submit'])){
            $empresa = $_POST['empresa'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
          }
       ?>   -->

      <div class="row pt-5" id="presu" style="background: #DCE1EF" >
    
        <form action="enviando.php " method="POST" class="FormPresu">
          <div class="row form-group">
            <label for="empresa" class=" titulo col-form-label col-md-12"><b>Empresa</b></label>
            <div class="col-md-12">
              <input type="" name="empresa" value="" id="empresa" class="form-control" >
            </div>
          </div>
          <div class="row form-group">
            <label for="nombre" class=" titulo col-form-label col-md-12"><b>Nombre</b></label>
            <div class="col-md-12">
              <input type="" name="nombre" value="<?php if(isset($nombre)) echo $nombre ?>" id="nombre" class="form-control" >
          </div>
          </div>
          <div class="row form-group">
            <label for="apellido" class=" titulo col-form-label col-md-12"><b>Apellido</b></label>
            <div class="col-md-12">
              <input type="" name="apellido" value="" id="apellido" class="form-control" >
            </div>
          </div>
          <div class="row form-group">
            <label for="telefono" class="titulo col-form-label col-md-12"><b>Telefono</b></label>
            <div class="col-md-12">
              <input type="" name="telefono" value="<?php if(isset($telefono)) echo $telefono ?>" id="telefono" class="form-control" >
            </div>
          </div>
          <div class="row form-group">
            <label for="email" class=" titulo col-form-label col-md-12"><b>Email</b></label>
            <div class="col-md-12">
              <input type="email" name="email" value="<?php if(isset($email)) echo $email ?>" id="email" class="form-control" >
            </div>
          </div>
          <div class="row form-group">
            <label for="Selector" name="producto" class="titulo col-form-label col-md-12"><b>Seleccione el producto</b></label>
            <div class="col-md-12">
                <select class="form-control" id="selector">
                  <option>Papeleria Comercial</option>
                  <option>Form.Continuos</option>
                  <option>Folletería</option>
                  <option>Banners</option>
                  <option>Etiquetas</option>
                  <option>Packaging</option>
                </select>
            </div>    
          </div>
          <div class="row form-group">
              <label for="Consulta" class="titulo col-form-label col-md-12"><b>Consulta</b></label>
              <div class="col-md-12">
                <textarea row="3" class="form-control id="consulta" name="consulta"></textarea>
              </div>
          </div>
          <button type="submit" value= "Enviar" name= "submit" id="boton" class="btn btn-info mb-2 col-md-12">Enviar presupuesto</button>
          <?php 
            include("validarFormPpto.php");
           ?>
        </form> 

       
      </div>

    
      

<!-------------------------------------FOOTER-------------------------------------------------->

<?php 
    include('footer.php')
 ?>
   
  <!---------------------------------------------------------------------------------------------> 
    <!-- Optional JavaScript -->
    <script type= "text/javascript" src="JS/jquery-3.3.1.min.js"></script>

      <script>
        var boton = $("#boton");
        boton.click(function(){
          $(this).css("background", "black")
         .css("color", "red");
      });  
    </script>

    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- aos animation script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
  </body>
</html>