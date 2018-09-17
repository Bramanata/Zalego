<?php
session_start();
include('main.php');
?>
 <body>
 	<div class="container">
		<!-- <div class="panel panel-de"> -->
<div class="row">
			<div class="panel-body">
				<h1 class="page-header">My Data</h1>
			    <form action="editservices.php" Method="POST">
					<table id="example" class="table table-striped" cellspacing="0">

				  <thead>
				  	<tr >
              <th>Id</th>
				  		<th>Firstname</th>
				  		<th>Lastname</th>
				  		<th>Username</th>
				  		<th>Password</th>
				  		
				  	</tr>
				  </thead>
				  <tbody>
				  	<?php
            include('db.php');
              $session=$_SESSION['ID'];
				  		$sql = "SELECT * FROM `tblaccounts` WHERE id='".$session."'";
				  		 $cur = mysqli_query($conn,$sql) or die(mysqli_error());

						while ($result = mysqli_fetch_array($cur)) {

						 	# code...
					 	echo '<tr>';
				  		echo '<td> '.$result['id'].'</td>';
				  		echo '<td>'. $result['Fname'].'</td>';
				  		echo '<td>'. $result['Lname'].'</td>';
				  		echo '<td>'. $result['Username'].'</td>';
				  		echo '<td>'. $result['Password'].'</td>';
				  								echo '</tr>';
						 }
				  	?>
				  </tbody>

				</table>
			</form>
	  		</div><!--End of Panel Body-->
	  	<!-- </div> -->
	  	<!--End of Main Panel-->
</div>
</div><!--End of container-->

<div class="modal fade" id="myModal" tabindex="-1">
</div>
 </body>
</html>
