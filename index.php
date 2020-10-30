<!DOCTYPE html>
<html lang="en">
<head>
  <title>CA1 - 2018076 - Gisele de Lima Lopes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

<div id=menu class="menu">
<?php include 'menu.php';?>
</div>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/technology01.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <p>Photo by ThisIsEngineering from Pexels</p>
        </div>
      </div>

      <div class="item">
        <img src="img/technology02.jpg" alt="Photo by ThisIsEngineering from Pexels" width="460" height="345">
        <div class="carousel-caption">
          <p>Photo by ThisIsEngineering from Pexels</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/technology03.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <p>Photo by Julia M Cameron from Pexels</p>
        </div>
      </div>

      <div class="item">
        <img src="img/technology04.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <p>Photo by cottonbro from Pexels</p>
        </div>
      </div>

  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div id=footer class="footer">
<?php include 'footer.php';?>
</div>

  
</body>
</html>



