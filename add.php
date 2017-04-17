<?php
session_start();
if(!$_SESSION['loggedInUser']) {
	//send them to the login page
	header("Location: index.php");
}
//connecct to the database
include('includes/connection.php');

include('includes/functions.php');

if( isset( $_POST['add'] ) ) {
  $clientName=$clientEmail=$clientPhone=$clientAddress=
  $clientCompany=$clientNotes="";

  if( !$_POST['clientName'] || !$_POST['clientEmail']){
		$typeError="Please enter all the required fields<br>";
	}
  else {
		//create variables
		//wrap the data with our function
		$clientName = validateFormData( $_POST['clientName'] );
		$clientEmail = validateFormData( $_POST['clientEmail'] );
  }
  $clientPhone = validateFormData( $_POST['clientPhone'] );
  $clientAddress = validateFormData( $_POST['clientAddress'] );
  $clientCompany = validateFormData( $_POST['clientCompany'] );
  $clientNotes = validateFormData( $_POST['clientNotes'] );

  if($clientName && $clientEmail) {
    $query="INSERT INTO clients(id, name, email, phone, address, company, notes,
    date_added) VALUES (NULL, '$clientName', '$clientEmail', '$clientPhone',
    '$clientAddress','$clientCompany','$clientNotes', CURRENT_TIMESTAMP)";
    $result=mysqli_query($conn, $query);
    if ($result) {
      header("Location: clients.php?alert=success");
    }
    else {
      echo "Error".$query."<br>".mysqli_error($conn);
    }

  }
}
mysqli_close($conn);

include('includes/header.php');
?>

<div class="container">

<h1>Add Clients</h1>
<p class="text-danger">* Required fields</p>
<small class="text-danger"><?php echo $typeError;?></small>
<form class="row" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
  method="post">
  <div class="form-group col-sm-6">
    <label for="client-name">Name *</label>
    <input type="text" class="form-control input-lg" id="client-name"
    name="clientName" value="">
  </div>
  <div class="form-group col-sm-6">
    <label for="client-email">Email *</label>
    <input type="text" class="form-control input-lg" id="client-email"
    name="clientEmail" value="">
  </div>
  <div class="form-group col-sm-6">
    <label for="client-phone">Phone</label>
    <input type="text" class="form-control input-lg" id="client-phone"
    name="clientPhone" value="">
  </div>
  <div class="form-group col-sm-6">
    <label for="client-address">Address</label>
    <input type="text" class="form-control input-lg" id="client-address"
    name="clientAddress" value="">
  </div>
  <div class="form-group col-sm-6">
    <label for="client-company">Company</label>
    <input type="text" class="form-control input-lg" id="client-company"
    name="clientCompany" value="">
  </div>
	<div class="form-group col-sm-6">
		<label for="client-notes">Notes</label>
		<textarea name="clientNotes" class="form control input-lg" id="client-notes"></textarea>
	</div>
  <div class="col-sm-12">
    <a href="clients.php" type="button" class="btn btn-lg btn-danger">Cancel</a>
    <button type="submit" class="btn btn-lg btn-success pull-right"
    name="add">Add Client</button>
  </div>
</form>
</div>
<?php include('includes/footer.php'); ?>
