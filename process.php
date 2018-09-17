<?php
session_start();
 include 'db.php';
    $sql =  mysqli_query($conn,"SELECT * FROM tblaccounts WHERE Username='".$_POST['username']."' AND Password = '".$_POST['pass']."'");
	 $row=mysqli_fetch_array($sql);

	 if($row){
		$_SESSION['ID'] = $row['id'];
        $_SESSION['U_NAME'] = $row['Fname'];
        $_SESSION['LNAME'] = $row['Fname'];
			 echo '<script>windows: location="home.php"</script>';
		 }
    else {
     echo "<script type=\"text/javascript\">
                alert(\"Incorrect Password and Username.\");
                window.location = \"login.php\"
            </script>";
  return false;
    }

?>
