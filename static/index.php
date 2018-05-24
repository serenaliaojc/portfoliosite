<?php 
$page_title = 'Serena Liao';
include_once 'parts/header.php'; 
?>

		<div class="index">
			
			<header class="block">

				<h1 hidden="hidden">Serena Liao's Portfolio</h1>

				<img src="img/logo-blue.png" alt="logo">

				<div class="intro">
					<p>hi, I am <span>Serena</span>.</p>
					<p>I am a full-stack web developer.</p>
				</div>

				<nav class="main-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="project.php">Works</a></li>
						<!-- <li><a href="#">Blog</a></li> -->
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>

			</header>

			<main>
				<section class="about block" id="about">
					<h2>About.</h2>
					<div class="row">
						<figure class="col-md-4">
							<img src="img/photo.jpg" alt="serena's photo">
							<figcaption><span>Serena</span> Liao</figcaption>
						</figure>
						<div class="col-md-8">
							<p>A learner who likes solving puzzles but also strict to the rules, ending up being a web developer, now armed herself with all kinds of tools and enjoying figuring out how to build an application. </p>
							<p>She likes to try new things and is proud of her ability to think fast and learn fast. With a touch for the codes, she considers web development as Lego building: know what to build and how to build, then start collecting pieces and assembling them. It is both challenging and entertaining.</p>
							<p>Yep, that is me, Serena. And I do full-stack.</p>
						</div>
					</div>					
				</section>

				<section class="works block">
					<h2>Latest Works.</h2>
					<div class="card-deck">
						<div class="card">
							<img src="img/works/pamschallenge/logo_mini.png" alt="" class="card-img">
							<div class="card-body">
								<h3 class="card-title"><a href="project-single-pam.php">Pam's Writing Challenge</a></h3>
								<p class="card-text">a website that users can share their own writings.</p>
							</div>
						</div>
						<div class="card">
							<img src="img/works/sjgh/sjghel_logo.png" alt="" class="card-img">
							<div class="card-body">
								<h3 class="card-title"><a href="project-single-sjgh.php">St. Joseph's General Hospital</a></h3>
								<p class="card-text">the redesign of the original St. Joseph's General Hospital website.</p>
							</div>
						</div>
						<div class="card">
							<img src="img/works/artsys/artsys-logo.png" alt="" class="card-img">
							<div class="card-body">
								<h3 class="card-title"><a href="project-single-artsys.php">Chinese Artist Evaluation System</a></h3>
								<p class="card-text">the visualized platform for Chinese Artist Evaluation System.</p>
							</div>
						</div>
					</div>
					<div class="row justify-center">
						<button><a href="project.php">View More</a></button>
					</div>
				</section>

				<!-- <section class="blog block">
					<h2>Blog.</h2>
					<div class="card-deck">
						<div class="card">
							<img src="img/works/pamschallenge.png" alt="" class="card-img">
							<div class="card-body">
								<h3 class="card-title"><a href="">Lorem ipsum dolor sit.</a></h3>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt qui quam minus eum, quis veritatis voluptatibus suscipit eos, consequatur aut enim ut cupiditate obcaecati in!</p>
							</div>
						</div>
						<div class="card">
							<img src="img/works/pamschallenge.png" alt="" class="card-img">
							<div class="card-body">
								<h3 class="card-title"><a href="">Lorem ipsum dolor sit.</a></h3>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam nulla soluta, qui accusantium quis in cumque hic consectetur error numquam molestiae perferendis iste impedit quaerat molestias commodi?</p>
							</div>
						</div>
					</div>
					<div class="row justify-center">
						<button>See All</button>
					</div>
				</section> -->

				<section class="contact" id="contact">
					<h2>Contact Me.</h2>
					<p>Nice to meet you.</p>
					<ul>
						<li><a href="https://www.linkedin.com/in/serena-liao-a42660160/"><i class="fab fa-linkedin"></i></a></li>
						<li><a href="https://github.com/serenaliaojc"><i class="fab fa-github"></i></a></li>
						<!-- <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li> -->
						<li><a href="https://www.instagram.com/serenaliaojc/"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://www.facebook.com/serena.liao.942"><i class="fab fa-facebook-square"></i></a></li>
					</ul>
				</section>
			</main>

		</div>

<?php include_once 'parts/footer.php'; ?>