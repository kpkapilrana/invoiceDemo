<?php
        include './template/config.php';
?>

<html>
    <title>Invoice Demo</title>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
            <link rel="stylesheet" href="./css/bootstrap.min.css">
           
            <script src="./js/jquery-3.2.1.min.js"></script>
            <script src="js/validation.min.js"></script>
            <script src="./js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="css/style.css">
            <script src="js/auto.js"></script>
    </head>
    <body>
    <div class="container">

      <form class="form-signin" method="post" id="login-form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <div id="error">

        </div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" class="form-control" placeholder="Email address" required autofocus name="user_email" id="user_email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" placeholder="Password" required name="password" id="password">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">Sign in</button>
      </form>

    </div> <!-- /contai
    </body>
</html>