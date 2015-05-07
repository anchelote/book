<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="Usuarios">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="../styles/main.css">
    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="../bower_components/modernizr/modernizr.js"></script>
    <!-- endbuild -->
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container">
      <div class="logoback"><a href="principal.php"><img src="../images/logo.png" alt="Logo" class="img-responsive"></a></div>
    <ul class="nav navbar-nav pull-left">
        <li><a href="archivo.php">Galería nueva</a></li>
        <li><a href="usuarios.php">Usuarios</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html" class="botonlogin"><span class="glyphicon glyphicon-log-out"></span></a></li>
    </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>Angel</td>
            <td>gelote@gmail.com</td>
            <td>111111</td>
            <td><a href="#">Modificar</a></td>
            <td><a href="#">Eliminar</a></td>
        </tr>
    </table>
    <h3>Agregar usuario nuevo:</h3>
   <form class="form-inline">
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Pepito">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="pepito@piscinas.com">
    </div>
    <div class="form-group">
        <label for="contra">Contraseña</label>
        <input type="password" class="form-control" id="contra" placeholder="111111">
    </div>
    <button type="submit" class="btn btn-default">Agregar</button>
</form>
</div>
<footer>
    <div>
       <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Angel
    </div>
    <div>
       <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Última conexión:
    </div>
</footer>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


        <!-- build:js scripts/main.js -->
        <script src="../bower_components/jquery/jquery.js"></script>
        <script src="../scripts/main.js"></script>
        <script src="../scripts/hello.js"></script>
        <!-- endbuild -->

        <!-- build:js scripts/vendor/bootstrap.js -->
        <script src="../bower_components/bootstrap/js/affix.js"></script>
        <script src="../bower_components/bootstrap/js/alert.js"></script>
        <script src="../bower_components/bootstrap/js/dropdown.js"></script>
        <script src="../bower_components/bootstrap/js/tooltip.js"></script>
        <script src="../bower_components/bootstrap/js/modal.js"></script>
        <script src="../bower_components/bootstrap/js/transition.js"></script>
        <script src="../bower_components/bootstrap/js/button.js"></script>
        <script src="../bower_components/bootstrap/js/popover.js"></script>
        <script src="../bower_components/bootstrap/js/carousel.js"></script>
        <script src="../bower_components/bootstrap/js/scrollspy.js"></script>
        <script src="../bower_components/bootstrap/js/collapse.js"></script>
        <script src="../bower_components/bootstrap/js/tab.js"></script>
        <!-- endbuild -->
</body>
</html>
