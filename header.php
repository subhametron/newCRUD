<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Athena ♥ Digital</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.8.13/themes/base/minified/jquery-ui.min.css">
    <link rel='shortcut icon' href='favicon.ico'>
    <link rel="stylesheet" href="styles.css">
		<script
		  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
		</script>
		<script src="script.js"></script>

	</head>
	<body>
		<div class="sidenav">
		  <a  id="closebtn">&times;</a>
		  <a href="#">About</a>
		  <a href="#">Services</a>
		  <a href="#">Clients</a>
		  <a href="#">Contact</a>
		</div>
		<div id="menu">
			<span class="glyphicon glyphicon-align-left"></span>
		</div>
		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top header">
      <div class="container-fluid">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

					<a class="navbar-brand" href="clients.php">
						<span class='glyphicon glyphicon-home'></span>
						 CLIENT<strong>LETTER</strong>
					</a>

					<br>
			 </div>

			 <div class="collapse navbar-collapse" id="navbar-collapse">

        <?php if( $_SESSION['loggedInUser']) {   ?>
        <ul class="nav navbar-nav">
          <li><a href="clients.php"><span class='glyphicon glyphicon-list'></span> Clients</a></li>
          <li><a href="add.php"><span class='glyphicon glyphicon-plus'></span> Add</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <p class="navbar-text"><span class='glyphicon glyphicon-cog'></span>  <span class='glyphicon glyphicon-envelope'></span>  <span class='glyphicon glyphicon-sunglasses'></span>  Nomoshkar, Subhom!</p>
          <li><a href="logout.php"><span class='glyphicon glyphicon-off'></span> Log Out</a></li>
        </ul>
        <?php } else { ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php" data-target="#myModal"><span class='glyphicon glyphicon-lock'></span> Log In</a></li>
        </ul>
        <?php } ?>

      </div>
    </div>

  </nav>
