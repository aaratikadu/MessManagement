
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <div class="card-panel deep-orange lighten-1"><h2>Today's Special Menu</h2></div>

 <div class="container">   
<div class="row">
<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="assets/images/anda.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="assets/images/shewbhaji.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="assets/images/sabudana.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="assets/images/khichdi.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="assets/images/prate.jpg"></a>
  </div>
  </div>
  </div>
      <script>
       document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, options);
  });
 var instance = M.Carousel.getInstance(elem);

  
  </script>
  </body>
  </html>