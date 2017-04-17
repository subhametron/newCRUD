<?php
session_start();
//if the user is not logged in

if(!$_SESSION['loggedInUser']) {
	//send them to the login page
	header("Location: index.php");
}

//connecct to the database
include('includes/connection.php');

//query & result
$query = "SELECT * FROM clients ORDER BY name";
$result = mysqli_query($conn, $query);

if (isset($_GET['alert'])) {

	if($_GET['alert']=='success') {
		$alertMessage="<div class='alert alert-success'>New Client Added!
		<a class='close' data-dismiss='alert'>&times;</a></div>";
	}

	elseif ($_GET['alert'] == 'updatesuccess') {
		$alertMessage = "<div class='alert alert-success'>
		Client Update Successful.<a class='close' data-dismiss=
		'alert'>&times;</a></div>";
	}
	# code...
}

mysqli_close($conn);

include('includes/header.php');
?>
<div class="container">
<h1>Client Address Book <span class='glyphicon glyphicon-ok'></span></h1>
<?php  echo $alertMessage;?>
<table class="table table-striped table-bordered">
	<?php
	if(mysqli_num_rows($result)>0) {
		echo "<tr><th>NAME</th><th>EMAIL</th><th>PHONE</th><th>ADDRESS</th><th>COMPANY</th>
		<th>NOTES</th></tr>";
		while($row=mysqli_fetch_assoc($result)) {
			echo "<tr>";

			echo"<td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>"
			.$row['address']."</td><td>".$row['company']."</td><td>".$row['notes']."</td>";
			echo '<td> <a href="edit.php?id='.$row['id'].'"type="button" class="btn btn-primary btn-sm">
			<span class="glyphicon glyphicon-edit"></span></a></td>';
			echo "</tr>";
		}
	}
	else {
		echo "<div class='alert alert-warning'>Ain't Got no Clients bae!</div>";
	}
	mysqli_close($conn);
	?>
	<tr>
		<td colspan="7"><div class="text-center"><a href="add.php" type="button" class="btn btn-default btn-success">
			<span class="glypicon glyphicon-plus"> Add Client</a></div></td>
	</tr>
</table>

<div class="row text-center clientlist" style="float:right">
		<div class="col-xs-4 col-sm-3 col-md-2" data-toggle="modal" data-target="#imageModal">
			<img class="col-xs-12" role="presentation" src="images/clients/eliza.png" id="img1"></img>
			<h4 class="mb-2 mt-0">Eliza McCartney</h4>
		</div>
		<div class="col-xs-4 col-sm-3 col-md-2" data-toggle="modal" data-target="#imageModal">
			<img class="col-xs-12" role="presentation" src="images/clients/gemma.png"id="img2"></img>
			<h4 class="mb-2 mt-0">Gemma Atkinson</h4>
		</div>
		<div class="col-xs-4 col-sm-3 col-md-2" data-toggle="modal" data-target="#imageModal">
			<img class="col-xs-12" role="presentation" src="images/clients/anna.png" id="img3"></img>
			<h4 class="mb-2 mt-0">Anna Korakaki</h4>
		</div>
</div>
<div class="row text-center clientlist">
		<div class="col-xs-4 col-sm-3 col-md-2"  data-toggle="modal" data-target="#imageModal">
			<img class="col-xs-12" role="presentation" src="images/clients/amanda.png" id="img4"></img>
			<h4 class="mb-2 mt-0">Amanda Cerny</h4>
		</div>
		<div class="col-xs-4 col-sm-3 col-md-2" data-toggle="modal" data-target="#imageModal">
			<img class="col-xs-12" role="presentation" src="images/clients/genie.png"id="img5"></img>
			<h4 class="mb-2 mt-0">Eugenie Bouchard</h4>
		</div>
		<div class="col-xs-4 col-sm-3 col-md-2" data-toggle="modal" data-target="#imageModal">
			<img class="col-xs-12" role="presentation" src="images/clients/steph.png" id="img6"></img>
			<h4 class="mb-2 mt-0">Stephanie </h4>
		</div>
</div>
<?php
include('includes/footer.php');?>
