<?php
  session_start();
  if(isset($_SESSION['login']) AND $_SESSION['login'] == "ok"){
    header('location: index.php');
    exit();
  }
  if(isset($_POST['action']) AND $_POST['action'] == "login"){
    $email = "abc@xyz.com";
    $pwd = "123";
    if($_POST['email'] == $email AND $_POST['pwd'] == $pwd){
      $_SESSION['login'] = "ok";
      header('location: index.php');
      exit();
    }else{
      echo "Invalid Login Details";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>

<title>USER - LOGIN</title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/custom.css">
<meta charset="UTF-8" />



</head>
<body>
<div id="container">
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3">
      <form name="frm" method="post" action="">
        <input class="form-group form-control" type="text" name="email" placeholder="Enter Email" />
        <input class="form-group form-control" type="password" name="pwd" placeholder="Enter Password" />
        <input class="form-group btn btn-md btn-primary" type="submit" value="Login"/>
        <input type="hidden" name="action" value="login">

      </form>
    </div>
  </div>


</div>
<script src="assets/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>