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
  <link href="../css/bootstrap.css" rel="stylesheet">
  <!-- General CSS -->
  <link href="../css/general.css" rel="stylesheet">
  <!-- FONT AWESOME CDN -->
  <link href=
  "http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
  rel="stylesheet">

  <!-- JAVASCRIPT -->
  <script src="../js/jquery-1.11.2.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
  <script src="../js/bootstrap.js"></script>


  <link href="img/favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>

<?php
  //Create error vars
  $nameErr = $passErr = $namelenErr = $message = $passlenErr = $userexistErr = " ";
  //Create data vars
  $username = $passwordtemp = $email = "";


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
  if( empty($nameErr) && empty($passErr) && empty($namelenErr) && empty($passlenErr) && empty($userexistErr)) {
    // Create our insert SQL by hashing the password and using the escaped Username. 
    $password = hashPassword($passwordtemp, SALT1, SALT2);

    $sql = "INSERT INTO wms_member ( username, password, email ) VALUES ( :username, :password, :email )";

    $query = $db->prepare( $sql );
    $query->execute( array( ':username'=>$username, ':password'=>$password, ':email'=>$email ) );

    $message = '<h2 class="text-center">Account registered!
    </h2><br /><a href="login.php"><h2 class="text-center">Go to the 
    login page</h2></a>';  
  }
?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="box">
          <h2 class="text-center">Register an account</h2>
          <br />
          <form name="registration" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="input-group margin-bottom-sm">
              <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
              <input class="form-control" type="text" placeholder="Username" name="username" value="<?php echo htmlspecialchars($username);?>"/>
            </div>
            <span class="error"><?php echo $nameErr;?></span>
            <span class="error"><?php echo $namelenErr;?></span>
            <span class="error"><?php echo $userexistErr;?></span>
            <br />
            <br />
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
              <input class="form-control" type="password" placeholder="Password" name="password"/>
            </div>
            <span class="error"><?php echo $passErr;?></span>
            <span class="error"><?php echo $passlenErr;?></span>
            <br />
            <br />
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
              <input class="form-control" type="text" placeholder="Email address" name="email"/>
            </div> 
            <br/>
            <button type="submit" class="btn btn-default">Register!</button>
         </form>
         <span class="error"><?php echo $message;?></span>
        </div>
      </div>
    </div>
  </div>
</body>
</html>