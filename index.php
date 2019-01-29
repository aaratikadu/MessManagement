<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <h1>Mess Management</h1>
        <?php
        
            if (isset($_GET['page']) and isset($_GET['role'])) {
                $page = 'layouts/'.$_GET['role'].'/'.$_GET['page'].'.php';
                /*
                http://localhost/MessManagement/?page=dashboard&role=admin
                This can access the layouts->admin->dashboard.php
                */
                if (!@include($page)) {
                  @include('layouts/error-404.php');
                }
            } else {
                include('layouts/homepage.php');
            }
        ?>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    </body>
  </html>