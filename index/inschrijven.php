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
      <?php
        if(isset($_POST["inschrijven"])){
          $naam = $_POST["naam"];
          $adres = $_POST["adres"];
          $geboortejaar = $_POST["geboortejaar"];
          $telefoonnummer = $_POST["telefoonnummer"];
          $email = $_POST["email"];
          $categorie = $_POST["categorie"];
          $zwemdiploma = $_POST["zwemdiploma"];
          $bijzonderheden = $_POST["bijzonderheden"];
        

        if(empty($naam)){
          ?>
          <div class="alert alert-danger" role="alert">...</div>
          <?php
        }
      }
      ?>


      <div class="col-md-offset-2">
        <h2>Hier kunt u zich inschrijven voor het kampeer weekend.</h2>
        <div class="col-md-offset-2">
          <p> Wilt u zich als vrijwilliger inschrijven, klik dan <a href="inschrijven_vrijwilliger.html">hier</a>.</p>
        </div>
      </div>  
      <br>
      <div class="row">
        <div class="col-md-4 col-md-offset-1">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Naam*</span>
            <input name="name" type="text" class="form-control" placeholder="Naam Achternaam" aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Adres*</span>
            <input name="adres" type="text" class="form-control" placeholder="Straat straatnummer" aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Geboortejaar*</span>
            <input name="geboortejaar" type="text" class="form-control" placeholder="DD-MM-JJJJ" aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon input" id="basic-addon2">Telefoonnummer ouders*</span>
            <input name="telefoon" type="phone" class="form-control input" placeholder="06-123456789" aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Email-Adres*</span>
            <input name="email" type="email" class="form-control" placeholder="iemand@email.com" aria-describedby="basic-addon1">
          </div>

        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="sel1">Categorie*:</label>
            <select name="categorie" class="form-control" id="sel1">
              <option>Pupillen C</option>
              <option>Pupillen B</option>
              <option>Pupillen A1</option>
              <option>Pupillen A2</option>
              <option>Junioren D1</option>
              <option>Junioren D2</option>
              <option>Junioren C</option>
              <option>Junioren B</option>
              <option>Junioren A</option>
            </select>
          </div>
          
          <p style="font-weight: bold">In het bezit van een zwemdiploma*:</p>
          <div name="zwemdiploma" class="radio">
            <label class="radio-inline"><input type="radio" name="optradio">Ja</label>
            <label class="radio-inline"><input type="radio" name="optradio">Nee</label>
          </div>
          <div class="form-group">
            <label for="comment">Eventuele bijzonderheden (medicijngebruik, voedingsvoorschriften etc.) :</label>
            <textarea name="bijzonderheden" class="form-control" rows="3" id="comment"></textarea>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-md-offset-8">
        <input name="inschrijven" type="submit" class="btn btn-primary btn-block" value="inschrijven">
      </div>
    </div> 
  </body>
</html>