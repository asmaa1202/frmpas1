<!DOCTYPE html>
<html class="no-js">


<head>
	<title>FRMPAS</title>
    <!-- Fav Icon -->
    <link rel="icon" href="<?php echo e(asset('assets/img/Logo_FRMPAS.png')); ?>" type="image/x-icon">

	<meta charset="utf-8">

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/animations.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/icomoon.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>" class="color-switcher-link">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/shop.css')); ?>" class="color-switcher-link">
	<script src="<?php echo e(asset('assets/js/vendor/modernizr-2.6.2.min.js')); ?>"></script>

</head>

<style>
	.cover-image img {
		width: 100%;
		height: 100vh; /* Hauteur de l'écran */
		object-fit: cover; /* Ajuste l'image pour couvrir l'espace sans déformation */
	}
	.page_slider .slides li::before {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(61, 61, 61, 0.3); 
		z-index: 1;
	}

	/* .page_slider .container {
		position: relative;
		z-index: 2;
	} */
	.truncate-text {
		overflow: hidden;
		display: -webkit-box;
		-webkit-line-clamp: 2; /* Nombre de lignes à afficher, ici 1.5 sera approximé par 2 lignes */
		-webkit-box-orient: vertical;
		max-height: 3em; /* Ajustez en fonction de la taille de la police et de l'espacement pour 1.5 ligne */
		line-height: 1.5;
		text-overflow: ellipsis;
	}

	.page_slider .slide-link {
		position: relative;
		display: block;
		text-decoration: none;
		color: inherit;
	}
	.login-icon {
    color: #007bff;
    font-size: 20px;
    text-decoration: none;
    padding: 5px;
	padding-left: 20px;
    transition: color 0.3s ease;
}

.login-icon:hover {
    color: #0056b3;
}


	.page_slider .slide-link img {
		width: 100%;
		height: 100vh;
		object-fit: cover;
	}

	.page_slider .overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(61, 61, 61, 0.3);
		z-index: 1;
	}

</style>
<body>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">

		</div>
	</div><!-- eof .modal -->

	<div class="modal fade popupLogin" id="popupLogin" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content ds ms overflow-visible s-overlay s-mobile-overlay">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h4 class="color-main mb-3">Log in</h4>
								<form class="form-registration c-mb-20 c-gutter-20" action="/">
									<div class="row mb-4">
										<div class="col-sm-12">
											<div class="form-group">
												<input type="text" name="name" class="form-control" required placeholder="login" aria-required="true">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="password" aria-required="true" required>
											</div>
										</div>
									</div>
									<a class="registerRedirect " data-dismiss="modal" data-target="#popupRegistr" data-toggle="modal" href="#">Not a member? Register!</a>
									<button type="submit" class="btn btn-maincolor mt-30 d-block">Sign In</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade popupRegistr" id="popupRegistr" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content ds ms overflow-visible s-overlay s-mobile-overlay">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h4 class="color-main mb-4">Registration</h4>
								<form class="form-registration c-mb-20 c-gutter-20" method="post" action="/">
									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<input type="text" name="name" class="form-control" required placeholder="login" aria-required="true">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="password" aria-required="true" required>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="email" required aria-required="true">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="password" name="confirmPassword" class="form-control" placeholder="password" required aria-required="true">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="checkbox" id="agreed" name="agreed" value="agreed" required aria-required="true"><label for="agreed">I agree to the rules</label>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-maincolor mt-30 d-block">Registration</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<div class="header_absolute ds cover-background ">
				<!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
				<header class="page_header ds ms s-overlay">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-2 col-lg-3 col-11">
								<a href="/" class="logo">
									<img src="<?php echo e(asset('assets/img/Logo_FRMPAS.png')); ?>" alt="img">
								</a>
							</div>
							<div class="col-xl-8 col-lg-5 col-1">
								<!-- main nav start -->
								<nav class="top-nav">
									<ul class="nav sf-menu">
										<!-- Frmpas Organisation -->
										<li class="active">
											<a href="<?php echo e(route('frmpas.about')); ?>">Frmpas Organisation</a>
											<ul>
												<li>
													<a href="<?php echo e(route('frmpas.about')); ?>">Historique</a>
												</li>
												<li>
													<a href="<?php echo e(route('frmpas.family')); ?>">Frmpas Family</a>
												</li>
												<li>
													<a href="<?php echo e(route('commissions')); ?>">Commissions</a>
												</li>
												<li>
													<a href="<?php echo e(route('contact')); ?>">Contact</a>
												</li>
											</ul>
										</li>
							
										<!-- Frmpas -->
										<li>
											<a href="#">Frmpas</a>
											<ul>
												<li>
													<a href="<?php echo e(route('sport.club')); ?>">Équipe Nationale</a>
												</li>
												<li>
													<a href="<?php echo e(route('sport.competition')); ?>">Club Sportif</a>
												</li>
												<li>
													<a href="<?php echo e(route('sport.competition')); ?>">Club Plongée</a>
												</li>
												<li>
													<a href="<?php echo e(route('sport.competition')); ?>">Entraîneur</a>
												</li>
												<li>
													<a href="<?php echo e(route('arbitre')); ?>">Juge</a>
												</li>
												<li>
													<a href="<?php echo e(route('sport.competition')); ?>">Compétition</a>
												</li>
												<li>
													<a href="<?php echo e(route('sport.competition')); ?>">Communiqué</a>
												</li>
											</ul>
										</li>
							
										<!-- Activité -->
										<li>
											<a href="#">Activité</a>
											<ul>
												<!-- Sport -->
												<li>
													<a href="#">Sport</a>
													<ul>
														<li>
															<a href="<?php echo e(route('sport.diving')); ?>">Nage avec palmes</a>
														</li>
														<li>
															<a href="<?php echo e(route('sport.finswimming')); ?>">Plongée sportive</a>
														</li>
														<li>
															<a href="<?php echo e(route('sport.visual')); ?>">Visuelle</a>
														</li>
														<li>
															<a href="<?php echo e(route('sport.freediving')); ?>">Plongée en apnée</a>
														</li>
													</ul>
												</li>
							
												<!-- Plongée sous-marine -->
												<li>
													<a href="#">Plongée sous-marine</a>
													<ul>
														<li>
															<a href="<?php echo e(route('plongee.club')); ?>">Club Diving</a>
														</li>
														<li>
															<a href="<?php echo e(route('plongee.formation')); ?>">Formation FRMPAS</a>
														</li>
													</ul>
												</li>
							
												<!-- Environnement et Science -->
												<li>
													<a href="#">Environnement et Science</a>
													<ul>
														<li>
															<a href="<?php echo e(route('evenements.index')); ?>">Événements</a>
														</li>
														<li>
															<a href="<?php echo e(route('actualites')); ?>">Actualités</a>
														</li>
														<li>
															<a href="<?php echo e(route('galerie')); ?>">Galerie</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="<?php echo e(route('calendar2.federale')); ?>">Calendrier Fédéral</a>
										</li>
										<!-- Événements -->
										<li>
											<a href="#">Événements</a>
											<ul>
												<li>
													<a href="<?php echo e(route('evenements.index')); ?>">Calendrier</a>
												</li>
												<li>
													<a href="<?php echo e(route('actualites')); ?>">Actualités</a>
												</li>
												<li>
													<a href="<?php echo e(route('galerie')); ?>">Galerie</a>
												</li>
											</ul>
										</li>
									</ul>
								</nav>
								<!-- eof main nav -->
							</div>
							
						
								<!--<a class="fs-20 links-maincolor-hover" href="tel:+212661140912"><mark>+212</mark> 6 61 14 09 12</a>-->
							<div style="width: 150px"></div>
						<?php
							$isGuest = !Auth::check() && !Auth::guard('plongeurs')->check();

							$dashboardRoute = null;

							if (Auth::check()) {
								$dashboardRoute = match (auth()->user()->role_id) {
									1 => route('admin.index'),
									2 => route('club.index'),
									default => route('welcome'),
								};
							} elseif (Auth::guard('plongeurs')->check()) {
								$dashboardRoute = route('plongeur.dashboard');
							}
						?>

						<?php if($isGuest): ?>
							<a href="<?php echo e(route('login')); ?>" class="login-icon">
								<i class="fa fa-sign-in" aria-hidden="true"></i>
							</a>
						<?php else: ?>
							<a href="<?php echo e($dashboardRoute); ?>" class="login-icon">
								<i class="fa fa-sign-in" aria-hidden="true"></i>
							</a>
						<?php endif; ?>

						</div>
					</div>
					<!-- header toggler -->
					<span class="toggle_menu"><span></span></span>
				</header>

			</div>

			<section class="page_slider slider-1">
				<div class="flexslider">
					<ul class="slides">
						<li class="ds cover-image text-center text-lg-left">
							<img  src="<?php echo e(asset('assets/images/slide01.jpg')); ?>" alt="img">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<div class="divider-90"></div>
													<div class="d-inline-block">
														<h3 class="intro_before_featured_word text-center">
															Découvrez le monde sous-marin avec la
														</h3>
														<h2 class="intro_featured_word text-center">
															FRMPAS
														</h2>
														<h6 class="intro_after_featured_word text-white text-center"  style="line-height: 1.5;">
															et faites partie d'une communauté passionnée dédiée à l'exploration et à la préservation des merveilles marines du Maroc.
														</h6>
													</div>
												</div>
												
												<div class="intro_layer text-center" data-animation="fadeInUp">
													<a href="/" class="btn btn-maincolor btn-slider btn-medium">Plateforme e-learning</a>
												</div>
											</div> 
										</div> 
									</div> 
								</div>
							</div>
						</li>
						<?php $__currentLoopData = $evenements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evenement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="ls cover-image text-center text-lg-left">
							<a href="<?php echo e(route('evenements.show' , $evenement->evenement_hash )); ?>" class="slide-link">
								<img src="<?php echo e(asset($evenement->path_cover)); ?>" alt="img">
							
								<div class="container">
									<div class="row">
										<div class="col-12">
											<div class="intro_layers_wrapper">
												<div class="intro_layers">
													<div class="intro_layer" data-animation="fadeInRight">
														<div class="divider-90"></div>
														<div class="d-inline-block">
															<h3 class="intro_before_featured_word text-center text-white" style="line-height: 1.5;">
																<?php echo e($evenement->title); ?>

															</h3>
															<h2 class="intro_featured_word text-center text-white">
																FRMPAS
															</h2>
															<h6 class="intro_after_featured_word text-white text-center truncate-text">
																<?php echo e($evenement->subject_preview); ?>

															</h6>
															
														</div>
													</div>
													<div class="intro_layer text-center my-5" data-animation="fadeInUp">
														<a href="<?php echo e(route('evenements.show' , $evenement->evenement_hash )); ?>" class="btn btn-maincolor btn-slider btn-medium">Voir plus ...</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div> 
			</section>


			<section class="page_copyright ls s-py-25">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-12 text-center">
							<p>&copy; Copyright <span class="copyright_year">2024</span> All Rights Reserved</p>
						</div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->



	<script src="<?php echo e(asset('assets/js/compressed.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/switcher.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\frmpas\resources\views/welcome.blade.php ENDPATH**/ ?>