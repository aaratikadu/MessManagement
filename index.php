<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
      .card{
        border-radius: 10px;
      }
      .head-title{
        font-family: 'Lobster', cursive;
      }
      </style>
    </head>

    <body>
        <div class="container">
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
                include('layouts/customer/registration.php');
            }
        ?>
        </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <script type="text/javascript" src="assets/js/app.js"></script>
    </body>
  </html>