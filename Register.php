<?php
    define('TITLE', 'Register - Rainbow Entertainment');
    include'header.php';
?>
        <!--Register Content-->
        <div class="register">
            <form action="function/signup.php" class="form-signin" name="formRegister" method="post">
                <h2 class="page-header text-center">Sign up for Rainbow Entertainment!</h2>
				            <div class="form-inline">
                      <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                        </div>
                      </div>

                    <div class="form-group pull-right">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                        </div>
                    </div>
				          </div>

          				<div class="form-group">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input type="text" class="form-control" id="username" name="username" placeholder="UserName">
          					  </div>
                  </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" id="inputPwd" name="inputPwd" placeholder="Password"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" id="ReenterPassword" name="ReenterPassword" placeholder="Re-enter Password"/>
                    </div>
                </div>


                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email Address"/>
                    </div>
                </div>

                <button type="submit" class="btn btn-success round pull-right" name="registerBtn">Register</button>

            </form>
        </div>
    </body>
</html>
