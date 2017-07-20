<?php
    define('TITLE', 'Login - Rainbow Entertainment');
    include'header.php';
?>
<html>
<head>
        <style>
            .login{
                margin-top: 80px;
                margin-bottom: 80px;
            }
        </style>
    </head>
      <!--Login Content-->
      <div class="container login">
          <form action="function/signin-inc.php" class="form-signin" name="loginForm" method="post">
          <h2 class="page-header text-center">Rainbow Entertainment Welcome You!</h2>

              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username"/>
                  </div>
              </div>

              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input type="password" class="form-control" id="inputPwd" name="inputPwd" placeholder="Password"/>
                  </div>
              </div>

              <button type="submit" class="btn btn-success round pull-left" name="loginButton">Login</button>
          </form>
      </div>

  </body>
</html>
