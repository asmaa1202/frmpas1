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
                    <a class="nav-link" href="<?php echo e(route('plongeur.index')); ?>" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <i class="fas fa-chart-bar" style="color: rgba(0, 0, 0, 0.744)"></i>
                            </span>
                            <span class="nav-link-text ps-2">Tableau de bord</span>
                        </div>
                    </a>
                    <a class="nav-link" href="<?php echo e(route('plongeur.mon-compte')); ?>" role="button"
                        data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="far fa-user" style="color: rgba(0, 0, 0, 0.744)"></i>
                            </span>
                            <span class="nav-link-text ps-2">Mon compte</span>
                        </div>
                    </a>
                    <a class="nav-link" href="<?php echo e(route('plongeur.carnet_plongee.index')); ?>" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="far fa-address-card" style="color: rgba(0, 0, 0, 0.744)"></i>
                            </span>
                            <span class="nav-link-text ps-2">Carnet de plongée</span>
                        </div>
                    </a>
                    <a class="nav-link" href="<?php echo e(route('plongeur.blogs.index')); ?>" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="far fa-list-alt" style="color: rgba(0, 0, 0, 0.744)"></i>
                            </span>
                            <span class="nav-link-text ps-2">Blogs</span>
                        </div>
                    </a>
                    <a class="nav-link" href="<?php echo e(route('plongeur.formations.index')); ?>" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="fab fa-font-awesome-alt"></i>
                            </span>
                            <span class="nav-link-text ps-2">Formations</span>
                        </div>
                    </a>
                    <a class="nav-link" href="<?php echo e(route('plongeur.cours.index')); ?>" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <i class="fas fa-book-open" style="color: rgba(0, 0, 0, 0.744)"></i>
                            </span>
                            <span class="nav-link-text ps-2">Cours</span>
                        </div>
                    </a>
                    
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /home/cdmasoluma/public_html/diver/resources/views/plongeurDash/layout/slidebar.blade.php ENDPATH**/ ?>