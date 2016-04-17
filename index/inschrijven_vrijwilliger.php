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
              <a class="navbar-brand" href="index.php">FDKW</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown active">
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
    <!-- FORM
    ================================================== -->
    <div id="Form" class="container">
      <div class="col-md-offset-1">
        <h2>Hier kunt u zich inschrijven als vrijwilliger voor het kampeer weekend.</h2>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 col-md-offset-1">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Naam</span>
            <input type="text" class="form-control" placeholder="Naam Achternaam" aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Adres</span>
            <input type="text" class="form-control" placeholder="Straat straatnummer" aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon input" id="basic-addon2">Telefoonnummer</span>
            <input type="phone" class="form-control input" placeholder="06-123456789" aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Email-Adres</span>
            <input type="email" class="form-control" placeholder="iemand@email.com" aria-describedby="basic-addon1">
          </div>

        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="sel1">Categorie:</label>
            <select class="form-control" id="sel1">
              <option>Bouwer</option>
              <option>Chauffeur (kinder/bagage)</option>
              <option>Chauffeur (goederen)</option>
              <option>Groepsbegeleider</option>
              <option>Nachtwaker</option>
              <option>Fotograaf</option>
              <option>Keuekenhulp</option>
              <option>EHBO-er</option>
            </select>
          </div>
          <div class="form-group">
            <label for="comment">Eventuele bijzonderheden:</label>
            <textarea class="form-control" rows="3" id="comment"></textarea>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-md-offset-8">
        <button type="button" class="btn btn-primary btn-block">Inschrijven</button>
      </div>
    </div> 
  </body>
</html>mainStyle