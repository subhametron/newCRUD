<?php

//clear all session variables

if(isset($_COOKIE[ session_name() ] ) ) {

	//empty the cookie
	setcookie(session_name(), '', time()-86400, '/');

}


session_unset();

session_destroy();

include ('includes/header.php');
?>
<div class="container">
<h1>Logged out</h1><br>
<p class="lead">See you next time!</p><br><br>

<div class="row">
	<div class="chatblur col-xs-4">
		<div class="bubble me col-xs-12">What is your favorite word in German?</div>
		<div class="bubble you col-xs-12">Are you asking me to translate the question or do you WANT to know my favorite?</div>
		<div class="bubble me col-xs-12col-xs-12">The later. My favorite is <blockquote>Fahrvergnügen</blockquote>
		And you are probably stupid.</div>
	</div>

		<div class="nytimes-container col-xs-12 col-md-8">
			<article class="story">
				<header id="story-header">
					<div class="story-meta">

						<h3 class="story-section">
							<span class="section-label"><a href="#">SundayReview</a></span>
							<span class="label-pipe">|</span>
							CONTRIBUTING OP-ED WRITER
						</h3><!--section-->

						<h1 class="headline">The World’s Most Beautiful Mathematical Equation</h1>//headline
						<hr>

						<div class="story-meta-footer">

							<div class="byline-dateline">

								<span class="byline">

									<div class="thumb">
										<a href="#"><img src="" alt=""></a>
									</div><!--thumb images of author(s)-->

									<p class="single-author">
										<a href="#"></a>
									</p><!--name of author(s)-->

								</span><!--BYLINE: information about authors(s)-->

								<time class="dateline" datetime="2017-04-17T01:08:47-04:00"
								content="2017-04-17T01:08:47-04:00">APRIL 16, 2017
								</time><!--date and time of publishing-->

							</div><!--author(s) and time-->

							<div class="sharetools">
								<ul>
									<li><a href="javascript:;"><i class="sprite-icon"></i><span>Tweet</span></a></li>
								</ul>
								<button type="button" name="button" class="speech-bubble"><span class="count"></span></button>
							</div><!--sharing and commenting-->

						</div><!--meta information about the article-->
						<hr>

					</div><!--the header of the article-->
				</header>

				<div class="story-body">
					<div class="story-content">
					</div>

					<div class="story-meta">
						 <div class="story-notes">
						 </div>
					</div>
				</div>

			</article>


		</div><!--nytimes inspriration-->

</div>


</div>
<?php
include('includes/footer.php');?>
