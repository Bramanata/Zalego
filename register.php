<?php include('regcss.php');?>
<body style=" background:url(img/warer-flow-pipe45.gif); background-size:cover;">

  <div class="container">
      <div id="loginbox" style="margin-top:120px; margin-right:900px; width:450px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="panel panel-primary"  style=" background:url(img/warer-flow-pipe35.gif); background-size:cover;">
                  <div class="panel-heading">
                      <div class="panel-title">Register</div>

                  </div>

                  <div style="padding-top:30px;" class="panel-body" >

                      <div style="display:none;" id="login-alert" class="alert alert-danger col-sm-12"></div>

                      <form method="post" action="reg.php">
                          First Name:
                          <input type="text"  name="FNAME" class="form-control" required="required" />

                          Last Name:
                          <input type="text"  name="LNAME"  class="form-control" required="required" />

                         Username:
                           <input type="text" name="USER_NAME" class="form-control" required="required"/>
                          Password:
                             <input type="password" name="PASS" class="form-control" required="required"/>
                             <br />
                             <input type="submit" name="register" value="Register"  class="btn btn-success form-control"/>

                         </form>
                       </div>
        </div>

      </div>
    </div> <!-- /container -->
