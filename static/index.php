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
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam voluptatibus ea, reiciendis aut nisi voluptates deleniti pariatur, quas qui tempore perspiciatis odio assumenda, possimus a maiores magnam necessitatibus ipsa praesentium tenetur. Recusandae provident sunt in quidem, explicabo veniam, quibusdam amet rerum. Nemo atque sit nobis recusandae architecto iure, voluptas iusto.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo vitae quod enim alias optio sequi quae nihil sunt dolores in?</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis est magnam, incidunt excepturi ipsam culpa reiciendis aperiam dicta cumque soluta.</p>
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
							<img src="img/works/readgithub/readgithub-mini.png" alt="" class="card-img">
							<div class="card-body">
								<h3 class="card-title"><a href="project-single-readgit.php">Read Your GitHub</a></h3>
								<p class="card-text">a simple web page to display your Github status with charts.</p>
							</div>
						</div>
					</div>
					<div class="row justify-center">
						<button><a href="">View More</a></button>
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