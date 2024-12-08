<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center" style="height: 92px">
        <div>
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Menu"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div>

    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <div class="row navbar-vertical-label-wrapper mb-2">
                        <div class="col-auto navbar-vertical-label">Administration</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider">
                        </div>
                    </div>
                    <a class="nav-link" href="{{ route('admin.index') }}" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="fas fa-chart-bar"></i>
                            </span>
                            <span class="nav-link-text ps-2">Tableau de bord</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{ route('utilisateurs.index') }}" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="fas fa-user-tie"></i>
                            </span>
                            <span class="nav-link-text ps-2">Utilisateurs</span>
                        </div>
                    </a>
                    {{-- <a class="nav-link" href="{{ route('clubs.index') }}" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="fas fa-store"></i>
                            </span>
                            <span class="nav-link-text ps-2">Clubs</span>
                        </div>
                    </a> --}}
                    <a class="nav-link dropdown-indicator" href="#club" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="club">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                            <i class="fas fa-store"></i>
                        </span>
                        <span class="nav-link-text ps-2">Clubs</span></div>
                    </a>
                    <ul class="nav collapse show" id="club" style="">
                        <li class="nav-item"><a class="nav-link" href="{{ route('clubs.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Liste Clubs</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('clubs.inactifs') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Clubs Inactifs</span></div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>

                    <a class="nav-link dropdown-indicator" href="#plongeur" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="plongeur">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                            <i class="fas fa-user-graduate"></i>
                        </span>
                        <span class="nav-link-text ps-2">Plongeurs</span></div>
                    </a>
                    <ul class="nav collapse show" id="plongeur" style="">
                        <li class="nav-item"><a class="nav-link" href="{{ route('plongeurs.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Liste Plongeurs</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('plongeurs.inactifs') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Plongeurs Inactifs</span></div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>

                    <a class="nav-link dropdown-indicator" href="#athlète" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="athlète">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                            <i class="fas fa-user-graduate"></i>
                        </span>
                        <span class="nav-link-text ps-2">Athlètes</span></div>
                    </a>
                    <ul class="nav collapse show" id="athlète" style="">
                        <li class="nav-item"><a class="nav-link" href="{{ route('athletes.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Liste Athlètes</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('athletes.inactifs') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Athlètes Inactifs</span></div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>


                    <a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="email">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-envelope-open fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="envelope-open" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M512 464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V200.724a48 48 0 0 1 18.387-37.776c24.913-19.529 45.501-35.365 164.2-121.511C199.412 29.17 232.797-.347 256 .003c23.198-.354 56.596 29.172 73.413 41.433 118.687 86.137 139.303 101.995 164.2 121.512A48 48 0 0 1 512 200.724V464zm-65.666-196.605c-2.563-3.728-7.7-4.595-11.339-1.907-22.845 16.873-55.462 40.705-105.582 77.079-16.825 12.266-50.21 41.781-73.413 41.43-23.211.344-56.559-29.143-73.413-41.43-50.114-36.37-82.734-60.204-105.582-77.079-3.639-2.688-8.776-1.821-11.339 1.907l-9.072 13.196a7.998 7.998 0 0 0 1.839 10.967c22.887 16.899 55.454 40.69 105.303 76.868 20.274 14.781 56.524 47.813 92.264 47.573 35.724.242 71.961-32.771 92.263-47.573 49.85-36.179 82.418-59.97 105.303-76.868a7.998 7.998 0 0 0 1.839-10.967l-9.071-13.196z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-envelope-open"></span> Font Awesome fontawesome.com --></span><span
                                class="nav-link-text ps-2">Demandes</span></div>
                    </a>
                    <ul class="nav collapse show" id="email" style="">
                        <li class="nav-item"><a class="nav-link" href="{{ route('demandes.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Activation
                                        d'adhésion</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('demandes_licence.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Licence
                                        detail</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pick') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Pick</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                    <a class="nav-link dropdown-indicator" href="#e-learning" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <span class="fas fa-book"></span></span><span
                                class="nav-link-text ps-2">E-learning</span></div>
                    </a>
                    <ul class="nav collapse show" id="e-learning" style="">
                        <li class="nav-item"><a class="nav-link" href="{{ route('formations.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Formation</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('exercices.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Licence
                                        Exercice</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('cours.index') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Cours</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('calendriers.index') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-2">Calendrier</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                    <a class="nav-link" href="{{ route('blogs.index') }}" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="far fa-check-circle"></i>
                            </span>
                            <span class="nav-link-text ps-2">Vérification de carnet de plongé</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{ route('blogs.index') }}" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="far fa-list-alt"></i>
                            </span>
                            <span class="nav-link-text ps-2">Blogs</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{ route('contacts.index') }}" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="far fa-comment-alt"></i>
                            </span>
                            <span class="nav-link-text ps-2">contact</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{ route('compte.index') }}" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="far fa-user"></i>
                            </span>
                            <span class="nav-link-text ps-2">Mon compte</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>