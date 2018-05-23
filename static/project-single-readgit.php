<?php 
$page_title = 'Read Your GitHub - Serena Liao';
include_once 'parts/header.php'; 
?>

<?php include_once 'parts/header-page.php'; ?>

<div class="project-single page">
	<h1>Read Your GitHub</h1>
	<p class="page-intro">a simple web page to display your Github status with interactive charts.</p>

	<div class="project-show">
		<div id="project-carousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#project-carousel" data-slide-to="0" class="active"></li>
		    <li data-target="#project-carousel" data-slide-to="1"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="img/works/readgithub/readgithub1.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/works/readgithub/readgithub2.png" alt="Second slide">
		    </div>
		  </div>
		</div>

		<button><a href="http://serenaliaojc.com/final/githubread.php">View Live Site</a></button>
	</div>

	<div class="project-tech">
		<h2>Technologies.</h2>
		<div class="row align-items-center">
			<div class="col-2"><img src="img/techlogos/javascript.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/github.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/html-5.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/css-3.svg" alt=""></div>
		</div>
	</div>

	<div class="project-details">
		<h2>Details.</h2>
		<p>This is the final project for my web API class. I use GitHub login API to grab the information about a user, then display the data with Echarts (a JavaScript library for visualization). The final result is a simple web page to display your Github status with interactive charts.</p>
	</div>

</div>
<?php include_once 'parts/footer.php'; ?>