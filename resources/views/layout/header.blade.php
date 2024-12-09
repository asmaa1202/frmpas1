<div class="header_absolute ds cover-background ">
    <!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
    <header class="page_header ds ms s-overlay">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3 col-11">
                    <a href="/" class="logo">
                        <img src="{{asset('assets/img/Logo_FRMPAS.png')}}" alt="img">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-5 col-1">
                    <!-- main nav start -->
                    <nav class="top-nav">
                        <ul class="nav sf-menu">
                            <li class="active">
                                <a href="{{route('frmpas.about')}}">Frmpas Family</a>
                                <ul>
                                    <li>
                                        <a href="{{route('frmpas.about')}}">Frmpas</a>
                                    </li>
                                    <li>
                                        <a href="{{route('frmpas.family')}}">Frmpas Family</a>
                                    </li>
                                    <li>
                                        <a href="{{route('commissions')}}">Commissions</a>
                                    </li>
                                    <li>
                                        <a href="{{route('activites.subaquatiques')}}">Découvrir les activités subaquatiques</a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{route('accueil')}}#clubs">Clubs affiliés et adhésion</a>
                                    </li>
                                    <li>
                                        <a href="{{route('accueil')}}#membre">Espace membre</a>
                                    </li> --}}
                                    <li>
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Sport -->
                            <li>
                                <a href="#">Plongée sportive en piscine</a>
                                <ul>

                                    <li>
                                        <a href="{{route('sport.club')}}">Club Sportif</a>
                                    </li>
                                    <li>
                                        <a href="{{route('sport.competition')}}">Competition FRMPAS</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- eof blog -->

                            <!-- Diving -->
                            <li>
                                <a href="#">Plongée sous marine</a>
                                <ul>
                                    <li>
                                        <a href="{{route('plongee.club')}}">Club Diving</a>
                                    </li>
                        
                                    <li>
                                        <a href="{{route('plongee.formation')}}">Formation FRMPAS</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- eof features -->


                            {{-- <li>
                                <a href="{{route('actualites')}}">Actualités</a>
                            </li>
                            <!-- eof pages -->

                           <!-- Event -->
                            <li>
                                <a href="{{route('evenements.index')}}">Événements</a>
                            </li>
                            <!-- eof Event -->

                            <!-- gallery -->
                            <li>
                                <a href="{{route('galerie')}}">Galerie </a>
                            </li>
                            <!-- eof Gallery --> --}}

                             <!-- Événements -->
                            <li>
                                <a href="#">Événements</a>

                                <ul>
                                    <li>
                                        <a href="{{route('evenements.index')}}">Calendrier</a>
                                    </li>
                                    <li>
                                        <a href="{{route('actualites')}}">Actualités</a>
                                    </li>
                                    <li>
                                        <a href="{{route('galerie')}}">Galerie</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- eof Événements -->
                            
                        </ul>


                    </nav>
                    <!-- eof main nav -->
                </div>
                <div style="width: 200px"></div>
                <a href="http://127.0.0.1:8000/login" class="login-icon">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                </a>
        </div>
        <!-- header toggler -->
        <span class="toggle_menu"><span></span></span>
    </header>

</div>

