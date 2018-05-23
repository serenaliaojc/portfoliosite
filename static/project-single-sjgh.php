<?php 
$page_title = "St. Joseph's General Hospital - Serena Liao";
include_once 'parts/header.php'; 
?>

<?php include_once 'parts/header-page.php'; ?>

<div class="project-single page">
	<h1>St. Joseph's General Hospital</h1>
	<p class="page-intro">the redesign of the original St. Joseph's General Hospital website.</p>

	<div class="project-show">
		<div id="project-carousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#project-carousel" data-slide-to="0" class="active"></li>
		    <li data-target="#project-carousel" data-slide-to="1"></li>
		    <li data-target="#project-carousel" data-slide-to="2"></li>
		    <li data-target="#project-carousel" data-slide-to="3"></li>
		    <li data-target="#project-carousel" data-slide-to="4"></li>
		    <li data-target="#project-carousel" data-slide-to="5"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="img/works/sjgh/sjgh1.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/works/sjgh/sjgh2.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/works/sjgh/sjgh3.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/works/sjgh/sjgh4.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/works/sjgh/sjgh5.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/works/sjgh/sjgh6.png" alt="First slide">
		    </div>
		  </div>
		</div>

		<button><a href="">View Live Site</a></button>
	</div>

	<div class="project-tech">
		<h2>Technologies.</h2>
		<div class="row align-items-center">
			<div class="col-2"><img src="img/techlogos/microsoft-net.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/csharp_logo.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/microsoft-sql-server.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/jquery-1.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/bootstrap-4.svg" alt=""></div>
			<div class="col-2"><img src="img/techlogos/microsoft-azure-2.svg" alt=""></div>
		</div>
	</div>

	<div class="project-details">
		<h2>Details.</h2>
		<p>This is the final group project for .NET MVC course and Information Architecture course. The main goal of this project is to make the existing website more user-friendly and interactive, AODA compliant, and responsiveness. </p>
		<p>I am responsible for the design and development of the doctor appointments and the news feature.</p>
		<p>The appointment feature allows the patients to book an appointment online. When the patients make an appointment, they will see a list of doctors with their specialty. They can choose any doctor available and their preferred date and time. When they submit the appointment, the appointment will send to the system waiting for admins to approve it.</p>
		<p>The news is for the visitors to browse through the news of the website. They can also use the search bar to search the articles with the keywords in their title.</p>
	</div>

</div>
<?php include_once 'parts/footer.php'; ?>