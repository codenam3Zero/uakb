<?php
// if (isset($_POST['username']) && isset($_POST['password'])) {
//   if ($_POST['username'] == '4lvan' && $_POST['password'] == '123') {
//     header("Location:http://localhost/uakb/page1.php");
//   } else {
//     echo '<script>alert("Login Failed")</script>';
//   }
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>LOGIN PAGE</title>
  <style media="screen">
  label{
    margin-top: 3;
  }
  .utama {
    width:200px;
    height:190px;
    position:fixed;
    margin-left:-150px;
    margin-top:-150px;
    top:50%;
    left:50%;
  }
</style>
</head>
<body>
<!-- <form action="<?= BASE_URL."index.php?r=home/login"?>" method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" aria-describedby="usernameHelp" placeholder="Enter username">
          <small name="usernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form> -->

      <form method='post' accept-charset='UTF-8'>
    <fieldset class="utama">
      <legend>Login</legend>
      <label for='username' >Username :</label>
      <input type="text" class="form-control" name="username" aria-describedby="usernameHelp" placeholder="Enter username" required/>
      <br>
      <small name="usernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
      <p></p>
      <label for='password' >Password :</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required/>
      <p></p>
      <button type="submit" class="btn btn-primary">Login</button>
      <!-- <input type='submit' name='Submit' value='Login' /> -->
    </fieldset>
  </form>
</body>
</html>
