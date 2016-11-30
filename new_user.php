<?php
  require_once 'app/init.php';

  if (isset($_REQUEST['username'])){

    $password = stripslashes($_REQUEST['password']);

    $userQuery = $db->prepare("
      INSERT INTO users(username, password, email, created_at)
      VALUES (:username, '".md5($password)."', :email, NOW())
    ");

    $userQuery = $db->execute([
      'user' => $_SESSION['user_id']
    ]);

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forrestifya</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Shadows+Into+Light+Two" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="CSS/main.css" type="text/css">

  <meta name="viewport" content="width=width-device, initial-scale=1.0">
</head>
<body>
  <div class="list">
    <form id='register' action='' method='POST'
        accept-charset='UTF-8'>
      <!-- <fieldset > -->
      <h1 class="header">Register</h1>

      <ul class="items">
        <li><input type='text' name='username' id='username' placeholder="Username:" class="input" maxlength="50" autocomplete="off" required/></li>

        <li><input type='text' name='email' id='email' placeholder="Email:" class="input" maxlength="50" autocomplete="off" required/></li>

        <li><input type='password' name='password' id='password' placeholder="Password:" class="input" maxlength="50" autocomplete="off" required/></li>
      </ul>

      <input type='submit' name='Register' value='Register' class="submit"/><br>

      <a href="#"><h6>Already Registered? Login here.</h6></a>

      <!-- </fieldset> -->
    </form>
  </div>
</body>
</html>