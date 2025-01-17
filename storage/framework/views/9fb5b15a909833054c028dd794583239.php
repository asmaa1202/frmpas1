<style>
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
</style>
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

                <div style="width: 150px"></div>
                <a href="http://127.0.0.1:8000/login" class="login-icon">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                </a>
        </div>
        <!-- header toggler -->
        <span class="toggle_menu"><span></span></span>
    </header>

</div>
<?php /**PATH C:\xampp\htdocs\frmpas\resources\views/layout/header.blade.php ENDPATH**/ ?>