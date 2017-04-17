<?php
session_start();

include('includes/functions.php');

if( isset( $_POST['login'] ) ) {

	//fuction that validates
	if( !$_POST['email'] || !$_POST['password']){
		$typeError="Please enter all the required fields<br>";
	}
	else {
		//create variables
		//wrap the data with our function
		$formEmail = validateFormData( $_POST['email'] );
		$formPass = validateFormData( $_POST['password'] );
		//connect to database
		include ( 'includes/connection.php' );

		//create SQL query
		$query 	= "SELECT name, password FROM users WHERE email='$formEmail'";
		//store the result
		$result = mysqli_query( $conn, $query );

		//verify if the result is returned
		//verify if the result is returned
		if( mysqli_num_rows( $result ) > 0) {

			//store basic user data in variables
			while ( $row = mysqli_fetch_assoc( $result ) ) {
				$name 		= $row['name'];
				$hashedPass = $row['password'];
			}
			//verify hashed password with the typed password
			if( password_verify( $formPass, $hashedPass ) ) {
				//correct login details
				//start the session
				session_start();
				//store data in SESSION variable
				$_SESSION['loggedInUser'] = $name;

				header("Location: clients.php");
			}
			else {
				$loginError="<div class='alert alert-danger'> <span class='glyphicon glyphicon-warning-sign'>
				</span> Wrong username / password combination. Try again.</div>";
			}//end of authentication
		}
		else {
			//if there are no results
			$loginError="<div class='alert alert-danger'><span class='glyphicon glyphicon-ban-circle'>
			</span> NO such user in database. Signup! <a class='close' data-dismiss='alert'>&times;</a></div>";
		}//end of searching for data
	mysqli_close( $conn );
	}
}
include('includes/header.php');
?>
		<div class="container">
			<h1 data-toggle="tooltip" title="Hooray!" data-placement="top">Login</h1>
			<p class="lead">Welcome to ClientBook</p>
			<?php echo $loginError;?>
			<p class="text_danger">* Required fields</p>
			<small class="text-danger"><?php echo $typeError;?></small>
			<form class="form-inline" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="form-group">
					<label for="login-email" class="sr-only">email</label>
					<span class="glyphicon glyphicon-user"></span>
					<input type="text" class="form-control" id="login-email" placeholder="*email" name="email"
						value="<?php echo $formEmail?>">

					<label class="control-label" for="login-password"></label>
					<span class="glyphicon glyphicon-eye-open"></span>
					<input type="password" class="form-control" id="login-password" placeholder="*password" name="password">
				</div>
				<button id="text" type="submit" class="btn btn-primary login-btn" name="login">
					<span class="glyphicon glyphicon-lock"></span> Login
				</button>
			</form>
			<br><br>
		</div>

		<br><br><br>
			<div class="parallax-window col-xs-12 col-md-6" data-parallax="scroll" data-image-src="images/parallaxx.jpg">
				<p class="parallax-text col-xs-12" id="text1">
					Medium
				</p>
			 </div>
			 <div class="parallax-window col-xs-12 col-md-6" data-parallax="scroll" data-image-src="images/parallax_2.jpg">
 				<p class="parallax-text col-xs-12" id="text2">
 					Nytimes
 				</p>
 			 </div>
			<br><br>

<div class="container">

		<!-- inspired from eletron.atom.io -->
		<div class="row text-center">
				<div class="home-illu col-xs-6 col-sm-4 col-md-3">
          <img role="presentation" src="images/laptop-3.svg">
          <h3 class="mb-2 mt-0">Entrepreneurship</h3>
          <p>Keep in mind about <strong>SEO</strong>, <strong>Digital Marketing</strong>,
						and also finding the right <strong>Niche</strong> Markets</p>
        </div>
				<div class="home-illu col-xs-6 col-sm-4 col-md-3">
					<img role="presentation" src="images/coding.svg">
					<h3 class="mb-2 mt-0">Web Dev</h3>
					<p>Using technologies like <strong>JavaScript, Jquery </strong>and also
						<strong>Angular2</strong> and <strong>Node.js</strong> <strong>PHP</strong>
						and <strong>MySQL</strong> </p>
				</div>
				<div class="home-illu col-xs-6 col-sm-4 col-md-3">
					<img role="presentation" src="images/quill.svg">
					<h3 class="mb-2 mt-0">Freelance Writing</h3>
					<p>Joel Spolsky has emphasized the fact that the power of writing
						is an attractive trait.</p>
				</div>
        <div class="home-illu col-xs-6 col-sm-4 col-md-3">
          <img role="presentation" src="images/analytics-71.svg">
          <h3 class="mb-2 mt-0">Investing</h3>
          <p>The youger we start the richer we become, if we use the right
						strategies and not lose our patience</p>
        </div>
      </div><hr>


			<div>
			</div>
			<div class="svg-wrapper">
				<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
					<rect class="shape" height="60" width="320" />
				</svg>
				 <div class="text">HOVER</div>
			</div>
		<div>
			<p></p>
		</div>

			<!-- inspired from eletron.atom.io -->
			<div class="row text-center" id="features">
	        <div class="home-illu col-xs-12 col-sm-6 col-md-3">
	          <img role="presentation" src="images/sust1.png">
	          <h3 class="mb-2 mt-0">Sustainable Living</h3>
	          <p>"Rich living" doesn't have to be big. <strong>Environmental Impact</strong>
							needs to be considered.</p>
	        </div>
	        <div class="home-illu col-xs-12 col-sm-6 col-md-3">
	          <img role="presentation" src="images/inter.png">
	          <h3 class="mb-2 mt-0">Interiors</h3>
	          <p><strong>Decoration</strong> and <strong>Organizing</strong> a home to
							add value Include Minimalism and Scandanavian design ideas.</p>
	        </div>
	        <div class="home-illu col-xs-12 col-sm-6 col-md-3">
	          <img role="presentation" src="images/school.png">
	          <h3 class="mb-2 mt-0">Physical Stores</h3>
	          <p>Be where the money is. <strong>Amazon Selling</strong> ,<strong>Internet Cafe</strong>
							<strong>Tutoring</strong> &amp; <strong>Bookstore</strong>.
							<strong>Coffee Store too</strong></p>
	        </div>
	        <div class="home-illu col-xs-12 col-sm-6 col-md-3">
	          <img role="presentation" src="images/dev.png">
	          <h3 class="mb-2 mt-0">More Computer Stuff</h3>
	          <p>Creating stupid <strong>Games</strong>, <strong>IOT</strong>,
							<strong>Machine Learning</strong> and doing <strong>Penetration Testing</strong>.</p>
	        </div>
			</div>
			<br><br>
			<div class="skewed">
				<br>
				<hr class="hr1">

	      <!-- inspired from electron.atom.io-->
	       <div class="row text-center mt-6 mb-4">
	        <h2>Read like you are Will Hunting</h2>
	      </div>
	      <div class="row text-center text-small mt-3">
	        <div class='col-xs-12 col-sm-4 col-md-2 offset-md-1 mb-xs-4 mb-md-0 hero-feature'>
	          <a class="hero-link" href="$">
	            <span class="octicon hero-octicon octicon-squirrel" aria-hidden="true"></span>
	            Psychology
	          </a>
	        </div>
	        <div class='col-xs-12 col-sm-4 col-md-2 mb-xs-4 mb-md-0 hero-feature'>
	          <a class="hero-link" href="#">
	            <span class="octicon hero-octicon octicon-device-desktop" aria-hidden="true"></span>
	            Real World &amp; fiction
	          </a>
	        </div>
	        <div class='col-xs-12 col-sm-4 col-md-2'>
	          <a class="hero-link" href="#">
	            <span class="octicon hero-octicon octicon-bug" style="padding-left:2px" aria-hidden="true"></span>
	            Entrepreneurship &amp; Investment
	          </a>
	        </div>
	        <div class='col-xs-12 col-sm-4 offset-sm-2 col-md-2 offset-md-0'>
	          <a class="hero-link" href="#">
	            <span class="octicon hero-octicon octicon-tools" aria-hidden="true"></span>
	            Littrachaw &amp; Literature
	          </a>
	        </div>
	        <div class='col-xs-12 col-sm-4 col-md-2 '>
	          <a class="hero-link" href="#">
	            <span class="octicon hero-octicon octicon-gift" style="padding-right:2px" aria-hidden="true"></span>
							Self Improvment &amp; Tutorials
	          </a>
	        </div>
	        <div class='col-xs-12 col-sm-4 col-md-2'>
	          <a class="hero-link" href="#">
	            <span class="octicon hero-octicon octicon-gift" style="padding-right:2px" aria-hidden="true"></span>
	            Science
	          </a>
	        </div>
	      </div>
				<br><hr class="hr1"><br><br>
			</div>
			<br>
      <span class="footer">
      <a href='#'><span class='glyphicon glyphicon-pencil'></span> with <span class='glyphicon glyphicon-heart'></span> by Subham</a>
    </span>


<?php
include('includes/footer.php');?>
