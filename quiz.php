<?php
ob_start();


?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Scrum quiz" name="description">
  <meta content="Scrum quiz" name="keywords">
  <meta content="Jelle" name="author">
  <meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible">
  <title>Quiz</title>
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
  $vraag1 = $vraag2 = $vraag3 = $vraag4 = $vraag5 = $vraag6 = $vraag7 = $vraag8 = $vraag9 = $vraag10 = $vraag11 = $vraag12 = $vraag13 = $vraag14 = $vraag15 ="";

  //Create data vars
  $a1 = $a2 = $a3 = $a4 = $a5 = $a6 = $a7 = $a8 = $a9 = $a10 = $a11 = $a12 = $a13 = $a14 = $a15 ="";

  $score=0;

  //CHECK IF POST IS EMPTY OR NOT
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v1 field
    if (empty($_POST["v1"])) {
      $vraag1 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v1'] === "a1b") {
        $a1 = "Correct beantwoord. Het antwoord is inderdaad B.";
        $score++;
      } else {
        $a1 = "Fout antwoord. Het antwoord is B.";
      } 
    }    
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v2 field
    if (empty($_POST["v2"])) {
      $vraag2 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v2'] === "a2a") {
        $a2 = "Correct beantwoord. Het antwoord is inderdaad A.";
        $score++;
      } else {
        $a2 = "Fout antwoord. Het antwoord is A.";
      } 
    }    
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v3 field
    if (empty($_POST["v3"])) {
      $vraag3 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v3'] === "a3a") {
        $a3 = "Correct beantwoord. Het antwoord is inderdaad A.";
        $score++;
      } else {
        $a3 = "Fout antwoord. Het antwoord is A.";
      } 
    }    
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v4 field
    if (empty($_POST["v4"])) {
      $vraag4 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v4'] === "a4b") {
        $a4 = "Correct beantwoord. Het antwoord is inderdaad B.";
        $score++;
      } else {
        $a4 = "Fout antwoord. Het antwoord is B.";
      } 
    }    
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v5 field
    if (empty($_POST["v5"])) {
      $vraag5 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v5'] === "a5c") {
        $a5 = "Correct beantwoord. Het antwoord is inderdaad C.";
        $score++;
      } else {
        $a5 = "Fout antwoord. Het antwoord is C.";
      } 
    }    
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v6 field
    if (empty($_POST["v6"])) {
      $vraag6 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v6'] === "a6b") {
        $a6 = "Correct beantwoord. Het antwoord is inderdaad B.";
        $score++;
      } else {
        $a6 = "Fout antwoord. Het antwoord is B.";
      } 
    }    
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v7 field
    if (empty($_POST["v7"])) {
      $vraag7 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v7'] === "a7b") {
        $a7 = "Correct beantwoord. Het antwoord is inderdaad B.";
        $score++;
      } else {
        $a7 = "Fout antwoord. Het antwoord is B.";
      } 
    }    
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v8 field
    if (empty($_POST["v8"])) {
      $vraag8 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v8'] === "a8a") {
        $a8 = "Correct beantwoord. Het antwoord is inderdaad A.";
        $score++;
      } else {
        $a8 = "Fout antwoord. Het antwoord is A.";
      } 
    }    
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v9 field
    if (empty($_POST["v9"])) {
      $vraag9 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v9'] === "a9c") {
        $a9 = "Correct beantwoord. Het antwoord is inderdaad C.";
        $score++;
      } else {
        $a9 = "Fout antwoord. Het antwoord is C.";
      } 
    }    
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v10 field
    if (empty($_POST["v10"])) {
      $vraag10 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v10'] === "a10b") {
        $a10 = "Correct beantwoord. Het antwoord is inderdaad B.";
        $score++;
      } else {
        $a10 = "Fout antwoord. Het antwoord is B.";
      } 
    }    
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v11 field
    if (empty($_POST["v11"])) {
      $vraag11 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v11'] === "a11b") {
        $a11 = "Correct beantwoord. Het antwoord is inderdaad B.";
        $score++;
      } else {
        $a11 = "Fout antwoord. Het antwoord is B.";
      } 
    }    
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v12 field
    if (empty($_POST["v12"])) {
      $vraag12 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v12'] === "a12c") {
        $a12 = "Correct beantwoord. Het antwoord is inderdaad C.";
        $score++;
      } else {
        $a12 = "Fout antwoord. Het antwoord is C.";
      } 
    }    
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v13 field
    if (empty($_POST["v13"])) {
      $vraag13 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v13'] === "a13b") {
        $a13 = "Correct beantwoord. Het antwoord is inderdaad B.";
        $score++;
      } else {
        $a13 = "Fout antwoord. Het antwoord is B.";
      } 
    }    
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v14 field
    if (empty($_POST["v14"])) {
      $vraag14 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v14'] === "a14b") {
        $a14 = "Correct beantwoord. Het antwoord is inderdaad B.";
        $score++;
      } else {
        $a14 = "Fout antwoord. Het antwoord is B.";
      } 
    }    
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Checks for the v15 field
    if (empty($_POST["v15"])) {
      $vraag15 = "";
    }
    else {
      //CHECK IF ANSWER IS CORRECT
      if ($_POST['v15'] === "a15a") {
        $a15 = "Correct beantwoord. Het antwoord is inderdaad A.";
        $score++;
      } else {
        $a15 = "Fout antwoord. Het antwoord is A.";
      } 
    }    
  }
  //CHECKING IF ALL ERRORS ARE EMPTY THEN UPDATE DB OR SHOW ERRORS ON THE PAGE
  if( empty($a1) && empty($a2) && empty($a3) && empty($a4) && empty($a5) ) {

    $message = '<h2 class="text-center">Account registered!
    </h2><br /><a href="login.php"><h2 class="text-center">Go to the 
    login page</h2></a>';  
  }
  echo $score;
?>
<? php echo $score; ?> 
<p>Je hebt <? php echo $score; ?> op 15 behaald.</p>
  <div class="container-fluid">
    <div class="row">
      <form name="registration" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <div class="col-md-8 col-md-offset-2 content">
          <h2 class="text-center">Scrum vragenlijst</h2>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
       <p>Je hebt <? php echo $score; ?> op 15 behaald.</p>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">In het ontwikkelingsteam zit een anderstalige. Hij kent niet goed de moedertaal van het bedrijf en is vaak stil tijdens de verschillende Scrum meetings. </p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v1" value="a1a"></span>
            <p>De anderstalige moet zo snel mogelijk een taalcursus volgen, zodat deze persoon zo goed mogelijk met de rest van het ontwikkelteam kan communiceren.</p>

           
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v1" value="a1b"></span>
             <p>Tijdens de Sprint Retrospective Meeting wordt dit probleem besproken. Er worden verschillende voorstellen gedaan over hoe dit probleem aangepakt kan worden, zodat het ontwikkelingsteam zo productief mogelijk aan de volgende Sprint kan beginnen.</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v1" value="a1c"></span>
            <p>De anderstalige is een hindernis voor de ontwikkeling van het product. Deze persoon moet daarom van het project gehaald worden en vervangen worden door iemand die wel de moedertaal beheerst.</p>
            </div>
            <br />
            <span class="error"><?php echo $a1;?></span>

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
            <br />
            <span class="error"><?php echo $a2;?></span>

      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Er is een interne stakeholder die vraagt of hij/zij aanwezig mag zijn tijdens de Stand-up Scrum Meeting. Jij bent de Scrum Master. Wat beslis je?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v3" value="a3a"></span>
            <p>Als Scrum Master laat je hem toe om de Scrum Meeting bij te wonen. Je licht de interne stakeholder wel in dat hij enkel mag observeren tijdens de meeting.</p>
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v3" value="a3b"></span>
             <p>Je meldt de interne stakeholder vriendelijk in dat hij/zij niet aanwezig mag zijn tijdens deze meeting, want dit zou de ontwikkeling kunnen verstoren. </p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v3" value="a3c"></span>
            <p>De interne stakeholder mag deelnemen aan de Stand-up Scrum Meeting. Je moet echter als Scrum Master de interne stakeholder even inlichten over wat er besproken wordt tijdens een Stand-up Scrum Meeting.</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a3;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Welke vier onderdelen zijn het belangrijkste volgens het Agile Manifesto?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v4" value="a4a"></span>
            <p>Processen en tools, werkende software, samenwerking met je klant en reageren op verandering.</p>           
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v4" value="a4b"></span>
             <p>Individuen en interacties, werkende software, samenwerking met je klant en reageren op verandering.</p>   
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v4" value="a4c"></span>
            <p>Individuen en interacties, verstaanbare documentatie, samenwerking met je klant en reageren op verandering.</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a4;?></span>
            <span class="error"><?php echo $vraag4;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Je bent ontwikkelaar in een Scrum team. Je merkt op dat een bepaalde functionaliteit nog niet is opgenomen in de Product Backlog. Wat doe je?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v5" value="a5a"></span>
            <p>Je meldt het aan het einde van de Sprint tijdens de Sprint Retrospective Meeting.</p>
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v5" value="a5b"></span>
             <p>Je voegt een nieuwe User Story toe aan de Product Backlog die de functionaliteit omvat.</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v5" value="a5c"></span>
            <p>Je verwittigt de Product Owner dat er een bepaalde functionaliteit nog niet in de Product Backlog zit. De Product Owner zal dan beslissen of deze functionaliteit opgenomen moet worden in de Product Backlog.</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a5;?></span>
            <span class="error"><?php echo $vraag5;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Je bent Scrum Master en tijdens de Stand-up Scrum Meeting zitten ontwikkelaars aan elkaar vragen te stellen. Wat doe je?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v6" value="a6a"></span>
            <p>Je verteld je Scrum Team aan het einde van de Sprint Retrospective Meeting dat het goed is dat ze elkaar vragen stellen tijdens de Sprint Retrospective Meeting.</p>
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v6" value="a6b"></span>
             <p>Je legt uit aan het Scrum Team dat het niet de bedoeling is dat er tijdens de Stand-up Meeting vragen gesteld worden.</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v6" value="a6c"></span>
            <p>Het team is goed bezig, maar dit hoeft niet vermeld te worden. Dit neemt namelijk tijd in beslag.</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a6;?></span>
            <span class="error"><?php echo $vraag6;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Je bent Scrum Master en tijdens de Sprint Retrospective Meeting wordt er verteld dat iemand zijn taken niet correct uitvoert.</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v7" value="a7a"></span>
            <p>U bespreekt de problemen met de persoon in kwestie na de Sprint Retrospective Meeting. Het Scrum Team hoort hier niet bij te zijn.</p>
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v7" value="a7b"></span>
             <p>U probeert samen met het team het probleem op te lossen. Zodat deze taken in de toekomst in de toekomst door iedereen correct worden uitgevoerd.</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v7" value="a7c"></span>
            <p>De persoon in kwestie wordt gewaarschuwd en men gaat verder met de meeting.</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a7;?></span>
            <span class="error"><?php echo $vraag7;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Wie hoort er allemaal aanwezig te zijn tijdens de Sprint Retrospective Meeting?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v8" value="a8a"></span>
            <p>Het ontwikkelteam en de Scrum Master</p>
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v8" value="a8b"></span>
             <p>Het ontwikkelteam, de Scrum Master, Klant en de Product Owner</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v8" value="a8c"></span>
            <p>Het ontwikkelteam, de Product Owner en de Scrum Master</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a8;?></span>
            <span class="error"><?php echo $vraag8;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Wie hoort er allemaal aanwezig te zijn tijdens de Sprint Planning Meeting?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v9" value="a9a"></span>
            <p>Het ontwikkelteam en de Scrum Master</p>
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v9" value="a9b"></span>
             <p>Het ontwikkelteam, de Scrum Master, Klant en de Product Owner</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v9" value="a9c"></span>
            <p>Het ontwikkelteam, de Product Owner en de Scrum Master</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a9;?></span>
            <span class="error"><?php echo $vraag9;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Hoelang duurt een Stand-up Scrum Meeting?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v10" value="a10a"></span>
            <p>De tijd is niet belangrijk. Wat er gezegd wordt is belangrijker.</p>
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v10" value="a10b"></span>
             <p>Een Stand-up Scrum Meeting mag maximum een kwartier duren.</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v10" value="a10c"></span>
            <p>Een Stand-up Scrum Meeting duurt minimum 5 minuten en maximum 10 minuten.</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a10;?></span>
            <span class="error"><?php echo $vraag10;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Hoeveel tijd moet er gereserveerd worden voor een Sprint Review Meeting?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v11" value="a11a"></span>
            <p>Voor een Sprint Planning Meeting wordt er ongeveer twee uur voorzien.</p>
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v11" value="a11b"></span>
             <p>Dit hangt af van hoelang de Sprint duurt. Er wordt ongeveer 2,5 percent van de gehele Sprint duur voorzien voor de Sprint Review Meeting.</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v11" value="a11c"></span>
            <p>Dit hangt af van hoelang de Sprint duurt en aan de hand uit eigen ervaring zal de gereserveerde tijd ook aangepast worden.</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a11;?></span>
            <span class="error"><?php echo $vraag11;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Wie is er verantwoordelijk voor de Product Backlog?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v12" value="a12a"></span>
            <p>De Scrum Master</p>
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v12" value="a12b"></span>
             <p>Het hele Scrum team is verantwoordelijk voor de Product Backlog.</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v12" value="a12c"></span>
            <p>De Product Owner</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a12;?></span>
            <span class="error"><?php echo $vraag12;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Je bent Project Manager en je hebt beslist om je project te ontwikkelen met de Scrum methodologie. Je vindt wel dat bepaalde meetings te veel tijd kosten. Wat doe je?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v13" value="a13a"></span>
            <p>Je laat bepaalde meetings niet doorgaan, zoals bijvoorbeeld de Scrum Review Meeting en de Sprint Retrospective Meeting.</p>
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v13" value="a13b"></span>
             <p>Je beslist om de meetings toch door te laten gaan. Je weet dat deze veel tijd kosten, maar op lange termijn zorgen deze meetings ervoor dat je tijd wint en kosten kan besparen.</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v13" value="a13c"></span>
            <p>Je probeert de meetings minder tijd in beslag te laten nemen door de Sprint Review Meeting en de Sprint Retrospective Meeting samen te voegen.</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a13;?></span>
            <span class="error"><?php echo $vraag13;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Wat is een voordeel van Scrum?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v14" value="a14a"></span>
            <p>Het is heel eenvoudig om Scrum toe te passen. Ieder ontwikkelingsteam kan het meteen aanleren.</p>
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v14" value="a14b"></span>
             <p>Er is een duidelijk inzicht in project vooruitgang.</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v14" value="a14c"></span>
            <p>Het is makkelijk te implementeren zonder dat de klant er iets van merkt.</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a14;?></span>
            <span class="error"><?php echo $vraag14;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
          
            <div class="input-group">
              <p class="qqhead">Je bent Product Owner van een Scrum project. De klant toont geen enkele medewerking in het Scrum proces. Wat kan je het best doen?</p>
            </div> 
            <br />
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v15" value="a15a"></span>
            <p>Je contacteert de klant en legt uit dat het belangrijk is voor de kwaliteit van het product dat zij aanwezig zijn bij de Sprint Review Meeting.</p>
            </div>
            <div class="input-group">
            <span class="input-group-addon"><input type="radio" name="v15" value="a15b"></span>
             <p>Je moet niets doen. Het is de klant hun verantwoordelijkheid om input te geven in het Scrum proces.</p>
           
            </div> 
            <div class="input-group">
              <span class="input-group-addon"><input type="radio" name="v15" value="a15c"></span>
            <p>Je contacteert de klant regelmatig met wat de stand van zaken zijn, vanwege dat ze zelf niet komen kijken.</p>
           
            </div>
            <br />
            <span class="error"><?php echo $a15;?></span>
            <span class="error"><?php echo $vraag15;?></span>
      </div>
      <div class="col-md-8 col-md-offset-2 content">
                        <button type="submit" class="btn btn-default">Vragen verbeteren</button>
         </form>
      </div>
    </div>
  </div>
</body>
</html>