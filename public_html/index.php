<!DOCTYPE>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>my PWP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

		<!-- Bootstrap JS Carousel-->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<!--Font Awesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/style.css">

			<!-- jQuery Form, Additional Methods, Validate -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<title>Escobar505</title>

		</head>

		<body>
<!--		<ul class="nav">-->
<!--			<li>NAVBAR-</li>-->
<!--			<li><a href="milestone-2b.php">HOME</a></li>-->
<!--			<li><a href="about.html">ABOUT ME</a></li>-->
<!--			<li><a href="Link Needed.html">TWITTER<i class="fab fa-twitter-square"></i></a></li>-->
<!--			<li><a href="https://github.com/manuel-kraken-code?tab=repositories" target="_blank">GitHub<i class="fab fa-github"></i></a></li>-->
<!--<!--			<li><a href="mailto:manuel.esco.20@gmail.com">CONTACT<i class="fas fa-envelope"></i></a></li>-->
<!--			<li><a href="contact.html">CONTACT<i class="fas fa-envelope"></i></a></li>-->
<!--		</ul>-->



		<!---------------------------todo New Nav Bar!!!-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="https://github.com/manuel-kraken-code?tab=repositories"  target="_blank"><i class="fab fa-github"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://www.linkedin.com/in/m-escobar" target="_blank"> <i class="fab fa-linkedin-in"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact-me"><i class="fas fa-envelope"></i></a>
					</li>
			</div>
			<div class="mr-2">
				<a href="https://www.supremenewyork.com/" class="sup" target="_blank">Escobar505</a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</nav>
<!-----------------------------DROP DOWN----------------------------->
<!--					<li class="nav-item dropdown">-->
<!--						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--							Dropdown-->
<!--						</a>-->
<!--						<div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--							<a class="dropdown-item" href="#">Action</a>-->
<!--							<a class="dropdown-item" href="#">Another action</a>-->
<!--							<div class="dropdown-divider"></div>-->
<!--							<a class="dropdown-item" href="#">Something else here</a>-->
<!--						</div>-->
<!--					</li>-->

		<div class="b-container">
			<img src="images/abq.jpg" alt="ABQ" style="width:100%;">
			<div class="centered container-fluid"><span class="something">Professional Freelance Portfolios</span></div>
		</div>




<!--------------------------------Bootstrap Carousel-------------------------------->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100 img-fluid" src="images/GOWtest.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 img-fluid" src="images/GOWtest.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 img-fluid" src="images/GOWtest.jpg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

			<div class="b-container">
			<img src="images/why_albuquerque_downtown.jpg" alt="down town" style="width: 100%">
				<div class="centered"><span class="something">ABOUT ME!</span></div>
		</div>

		<div class="center">
			<p class="text">Hi my name is Manuel, I really love Comics and video games. </p>
			<p class="text">I have recently gotten into web design, And I really enjoy it! </p>
			<p class="text">I plan to continue doing coding and improving on it. </p>
		</div>



		<!--		<div id="container">-->
<!--			<h1 class="text">Freelance Professional Portfolio</h1>-->
<!--			<h2><span class="text subject">Purpose, Audience, Goal:</span></h2>-->
<!--			<h2 class="text">Purpose:</h2>-->
<!--			<p class="text">To build professional portfolio's. Adding to clients users experience Fast and efficient</p>-->
<!--			<h2 class="text">Audience:</h2>-->
<!--			<p class="text">People who are seeking Personal portfolio to add to there book. And are wanting a professional look to there-->
<!--				image online</p>-->
<!--			<h2 class="text">Goal:</h2>-->
<!--		</div>-->








			<!-- BEGIN CONTACT FORM -->
			<section class="contact-me" id="contact-me">
				<div class="sfooter-content">
				<header class="py-5">
					<div class="container sup2">
						<span class="something2">
							Contact Form
						</span>
					</div>
				</header>

				<main class="container pb-5">
					<div class="row">
						<div class="col-sm-12">
							<form id="esco-form" method="post" action="php/mailer.php">
								<div class="form-group">
									<label for="escoName">Name</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-user"></i></span>
										</div>
										<input class="form-control" type="text" name="escoName" id="escoName" placeholder="Your Name">
									</div>
								</div>
								<div class="form-group">
									<label for="escoEmail">Email</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-envelope"></i></span>
										</div>
										<input class="form-control" type="email" name="escoEmail" id="escoEmail" placeholder="Your Email">
									</div>
								</div>
								<div class="form-group">
									<label for="escoSubject">Subject</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-pencil"></i></span>
										</div>
										<input class="form-control" type="text" name="escoSubject" id="escoSubject" placeholder="Subject">
									</div>
								</div>
								<div class="form-group">
									<label for="escoMessage">Message</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-comment"></i></span>
										</div>
										<textarea name="escoMessage" rows="5" id="escoMessage" class="form-control" placeholder="Your Message (2000 characters max)"></textarea>
									</div>
								</div>
								<div class="g-recaptcha" data-sitekey="6LdFaVwUAAAAANZHYzLZH-aMtWyVB2VNcjZDByOB"></div>

								<button class="btn btn-info" type="submit">Submit</button>
								<button class="btn btn-default" type="reset">Reset</button>
							</form>
							<!-- END CONTACT FORM-->

							<div id="output-area"></div>

						</div><!-- /.col-sm-6 -->
					</div><!-- /.row -->
				</main>
			</div>

			<footer class="py-4 text-white">
				<div class="container">
					<a class="text-white" href="https://www.linkedin.com/in/m-escobar" target="_blank">LinkedIn</a> | <a class="text-white" href="https://github.com/manuel-kraken-code?tab=repositories" target="_blank">GitHub</a>
				</div>
			</footer>
			</section>
		</body>


</html>
