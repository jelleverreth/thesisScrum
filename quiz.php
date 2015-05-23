<?php
ob_start();


?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="WB CMS" name="description">
  <meta content="WB CMS" name="keywords">
  <meta content="Robin" name="author">
  <meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible">
  <title>WB CMS - Register a new user</title>
  <!-- BOOTSTRAP CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- General CSS -->
  <link href="css/general.css" rel="stylesheet">
  <!-- FONT AWESOME CDN -->
  <link href=
  "http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
  rel="stylesheet">

  <!-- JAVASCRIPT -->
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
  <script src="js/bootstrap.js"></script>


  <link href="img/favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
 <!-- START NAV BAR -->

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" data-target=".navbar-ex1-collapse"
        data-toggle="collapse" type="button"><span class="sr-only">Toggle
        navigation</span> <span class="icon-bar"></span> <span class=
        "icon-bar"></span> <span class="icon-bar"></span></button>
      </div>

      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a title="Home" href="index.html" >
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="index.html#about" title="Quiz">
              <p>About</p>
            </a>
          </li>
          <li>
            <a href="quiz.php" title="Quiz">
              <p>Quiz</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END NAV BAR -->
<?php
  //Create vraag error vars
  $vraag1 = $vraag2 = $vraag3 = "";

  //Create data vars
  $a1 = $a2 = $a3 = "";


  //CHECK IF POST IS EMPTY OR NOT
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the username field
    if (empty($_POST['username'])) {
      $nameErr = "Username is required!";
    }
    else {
      $username = $_POST['username'];
      $nameErr = "";
      $uLen = strlen($username); 
      if ($uLen < 4) { 
        $_SESSION['error'] = "Username must be longer then or equal to 4 characters.";
        $namelenErr = "Username must be longer then or equal to 4 characters!";  
      }
      else {
        $namelenErr = "";
        $sthandler = $db->prepare("SELECT username FROM wms_member WHERE username = :name");
        $sthandler->bindParam(':name', $username);
        $sthandler->execute();

        if ($sthandler->rowCount() > 0) { 
          $_SESSION['error'] = "Username already exists.";  
          $userexistErr = "Username already exists!"; 
        }
        else
        {
          $userexistErr = "";
        }
      }
    }
    //Checks for the password field
    if (empty($_POST['password'])) {
      $passErr = "Password is required!";
    }
    else {
      $passwordtemp = $_POST['password'];
      $passErr = "";
      $pLen = strlen($passwordtemp);
      if ($pLen < 6) { 
        $_SESSION['error'] = "Password must be longer then 6 characters.";
        $passlenErr = "Password must be longer then 6 characters!";
      }
      else {
        $passlenErr = "";
      }
    }
    //Retrieve email (even if empty)
    $email = $_POST['email'];
  }

  //CHECKING IF ALL ERRORS ARE EMPTY THEN UPDATE DB OR SHOW ERRORS ON THE PAGE
  if( empty($a1) && empty($a2) && empty($a3) ) {

    $message = '<h2 class="text-center">Account registered!
    </h2><br /><a href="login.php"><h2 class="text-center">Go to the 
    login page</h2></a>';  
  }
?>

  <div class="container-fluid">
    <div class="row">
      <form name="registration" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <div class="col-md-8 col-md-offset-2 content">
          <h2 class="text-center">Scrum vragenlijst</h2>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">In het ontwikkelingsteam zit een anderstalige. Hij kan niet goed de moedertaal van het bedrijf en is vaak stil tijdens de verschillende Scrum meetings. </p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v1" value="a1a"></span>
            <p>De anderstalige moet zo snel een taalcursus volgen, zodat deze persoon zo goed mogelijk met de rest van het ontwikkelteam kan communiceren.</p>

           
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v1" value="a1b"></span>
             <p>Tijdens de Sprint Retrospective Meeting wordt dit probleem besproken. Er worden verschillende voorstellen gedaan over hoe dit probleem aangepakt kan worden, zodat het ontwikkelingsteam zo productief mogelijk aan de volgende Sprint kan beginnen.</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v1" value="a1c"></span>
            <p>De anderstalige in een hindernis voor de ontwikkeling van het product. Deze persoon moet daarom van het project gehaald worden en vervangen worden door iemand die wel de moedertaal beheerst.</p>
           
            </div>

      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Een ontwikkelaar gaat te laat komen voor de Stand-up Scrum Meeting. Wat moet men doen?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v2" value="a2a"></span>
            <p>De Stand-up Scrum Meeting moet op het vaste tijdstip doorgaan zonder te wachten op de mensen die te laat zijn.</p>

           
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v2" value="a2b"></span>
             <p>Iedereen gaat terug werken en gaat later wanneer iedereen aanwezig is een Stand-up Scrum Meeting houden.</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v2" value="a2c"></span>
            <p>Er wordt maximum 10 minuten gewacht, anders gaat de Stand-up Scrum Meeting door zonder de ontwikkelaar.</p>
           
            </div>

      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Vraag 3</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v3" value="a3a"></span>
            <p>Antwoord 1</p>

           
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v3" value="a3b"></span>
             <p>Antwoord 2</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v3" value="a3c"></span>
            <p>Antwoord 3</p>
           
            </div>

      </div>
      <div class="col-md-8 col-md-offset-2 content">
                        <button type="submit" class="btn btn-default">Register!</button>
         </form>
         <span class="error"><?php echo $message;?></span>
      </div>
    </div>
  </div>
</body>
</html>