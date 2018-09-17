<?php
Session_start();
include('db.php');
$accno= $_POST['FNAME'] ;
$Lname= $_POST['LNAME'];
$user= $_POST['USER_NAME'];
$pass= $_POST['PASS'];
//$check=mysqli_query($conn,"Select * from tblaccounts");
//$rests=$check;
//while ($rows = mysqli_fetch_array($rests)) {
# code...
//$users = $rows['Username'];
//}
//if($users==$user)
//{
  //echo '<script>alert("Username is already taken")</script>';
  //echo '<script>windows: location="register.php"</script>';
//}
//else
//{

  $sql =mysqli_query($conn,"INSERT INTO tblaccounts (`Fname`, `Lname`, `Username`, `Password`) VALUE  ('".$accno ."','".$Lname."','".$user ."','".$pass."')");
  $res =$sql;
  if($res>0){
  $sql =mysqli_query($conn, "SELECT * FROM tblaccounts WHERE Username='".$_POST['USER_NAME']."' AND Password = '".$_POST['PASS']."'");
     $result =$sql;
  $count=mysqli_num_rows($result);

  // If result matched $myusername and $mypassword, table row must be 1 row
  if($count==1){

  // Register $myusername, $mypassword and redirect to file "login_success.php"
  while ($row = mysqli_fetch_array($result)) {
  # code...
  $_SESSION['ID'] = $row['id'];
  $_SESSION['FNAME'] = $row['Fname'];
  $_SESSION['LNAME'] = $row['Lname'];
  }
  #Begin

  #End
  ?>
  <script type="text/javascript">
  window.location = "home.php?";
  </script>
  <?php
  }else{
  $loginmsg = "Error to save! " ;
  die(mysqli_error());
  }
  }



?>
