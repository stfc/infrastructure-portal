<?php
session_start();
$errorMsg = "";
$user2=file('../csvex/login.s');
$user = array(str_replace("\n", "",$user2[0]),str_replace("\n", "",$user2[1]));
$validUser = $_SESSION["login"] === true;
if(isset($_POST["sub"])) {
  $validUser = $_POST["username"] == $user[0] && $_POST["password"] == $user[1];
  if(!$validUser) {
  $errorMsg = "invalid username or password";
  }
  else $_SESSION["login"] = true;
}
if($validUser) {
   $errorMsg='generating file. please wait 5 minutes';  
   $oldpath = getcwd();
   chdir('../csvex/');
   $out = shell_exec('bash exp.sh 2>&1');
   header('Content-Type: application/csv');                                                                                header('Content-Disposition: attachment; filename=privatedata.csv');   
   header('Pragma: no-cache');                                                                                             readfile('outtrimmed.csv');  
 
 
   //die();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Login</title>
</head>
<body>
  <form name="input" action="" method="post">
    <label for="username">Username:</label><input type="text" value="<?= $_POST["username"] ?>" id="username" name="username" />
    <label for="password">Password:</label><input type="password" value="" id="password" name="password" />
    <div class="error"><?= $errorMsg ?></div>
    <input type="submit" value="Download" name="sub" />
  </form>
</body>
</html>
