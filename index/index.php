<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Kampeer Weekend 2016</title>

   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <link href="mainStyle.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand"  href="index.php">FDKW</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inschrijven <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="inschrijven.php">Inschrijven deelnemers</a></li>
                    <li><a href="inschrijven_vrijwilliger.php">Inschrijven vrijwilligers</a></li>
                  </ul>
                </li>
                <li><a href="#contact">Foto's</a></li>
                <li><a href="#informatie">Info</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/IMAG0960.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Inschrijving FDKW 2016</h1>
              <p>Schrijf je nu in voor het kampeer weekend 2016!</p>
              <p><a class="btn btn-lg btn-primary" href="inschrijven.php" role="button">Inschrijven</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/IMAG1013.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Foto Album 2015</h1>
              <p>Bekijk hier de foto's van het vorige kampeerweekend!</p>
              <p><a class="btn btn-lg btn-primary" href="#foto's" role="button">Foto album</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/IMAG0962.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Meer informatie.</h1>
              <p>Hier vindt je meer informatie over het kampeer weekend!</p>
              <p><a class="btn btn-lg btn-primary" href="#info" role="button">info</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Flevo Delta, Inc.</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>