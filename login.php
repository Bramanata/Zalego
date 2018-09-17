<?php include("header.php");  ?>
<?php include("mainlog.php");  ?>
  <body>
<br><br>

        <div class="container">
        <div id="loginbox" style="margin-top:200px; margin-right:800px; width:450px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-primary"  style=" background:url(img/warer-flow-pipe35.gif); background-size:cover;">
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>

                    </div>

                    <div style="padding-top:30px;" class="panel-body" >

                        <div style="display:none;" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form action="process.php" method="post">

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;" name="username" value="" placeholder="username">
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="pass" placeholder="password" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;">
                            </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-check"></span> Login</button>

                                    <a href="register.php" class="btn btn-primary">Register</a>
                            				</div>
                                </div>
							</form>
                         </div>
					</div>

				</div>
			</div> <!-- /container -->
</label>
								<!--div class="copy-right">
            <p> &copy; 2018 . All Rights Reserved | Design by Sarah</a> </p>	    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
<?php ?>
