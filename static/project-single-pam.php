<?php 
$page_title = "Pam's Writing Challenge - Serena Liao";
include_once 'parts/header.php'; 
?>

<?php include_once 'parts/header-page.php'; ?>

<div class="project-single page">
	<h1>Pam's Writing Challenge</h1>
	<p class="page-intro">Pam’s Writing Challenge is a website that users can share their own writings. They can set up different challenges, assignments or prompts for people to study together.</p>

	<div class="project-show">
		<div id="project-carousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#project-carousel" data-slide-to="0" class="active"></li>
		    <li data-target="#project-carousel" data-slide-to="1"></li>
		    <li data-target="#project-carousel" data-slide-to="2"></li>
		    <li data-target="#project-carousel" data-slide-to="3"></li>
		    <li data-target="#project-carousel" data-slide-to="4"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="img/works/pamschallenge/pamschallenge1.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/works/pamschallenge/pamschallenge2.png" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/works/pamschallenge/pamschallenge3.png" alt="Third slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/works/pamschallenge/pamschallenge4.png" alt="Third slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/works/pamschallenge/pamschallenge5.png" alt="Third slide">
		    </div>
		  </div>
		</div>

		<button><a href="http://www.uffabutt.ca/website/">View Live Site</a></button>
	</div>

	<div class="project-tech">
		<h2>Technologies.</h2>
		<div class="row align-items-center">
			<div class="col-2"><img src="img/techlogos/php-1.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/mysql.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/jquery-1.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/bootstrap-4.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/html-5.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/css-3.svg" alt=""></div>		
		</div>
	</div>

	<div class="project-details">
		<h2>Details.</h2>
		<p>Here is the final group project for my PHP course. Pam’s Writing Challenge is a website that users can share their own writings. </p>
		<p>I built two features for this website. One is the main feature challenge, the other is the news. I am also responsible for designing the database schema and its maintenance. </p>
		<p>The challenge feature allows the site users to create different challenges and share them with the others. The users can browse and find the challenges they like and accept it, then submit their own writing to complete the challenge.</p>
		<p>The news feature acts as the news broad for this website. The visitors can read and search the news published by the site admins. </p>
	</div>

</div>
<?php include_once 'parts/footer.php'; ?>