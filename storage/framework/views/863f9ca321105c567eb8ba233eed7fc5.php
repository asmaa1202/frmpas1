<?php $__env->startSection('content'); ?>
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(<?php echo e(asset('img/icons/spot-illustrations/corner-4.png')); ?>);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Formations</h3>
                    <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
                </div>
                <div class="col-lg-4 d-flex justify-content-end align-items-center">
                    <a href="<?php echo e(route('formations.create')); ?>" role="button" class="btn btn-outline-primary">
                        <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>Ajouter
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="notification"></div>

    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(<?php echo e(asset('img/icons/spot-illustrations/corner-4.png')); ?>);">
        </div>
        <!--/.bg-holder-->
        <div class="card-body">
            <div class="accordion border rounded overflow-hidden" id="accordionFaq">
                <?php $__currentLoopData = $niveaux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niveau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card shadow-none rounded-bottom-0 border-bottom">
                        <div class="accordion-item border-0">
                            <div class="card-header p-0" id="faqAccordionHeading<?php echo e($niveau->id); ?>">
                                <button
                                    class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-start rounded-0 shadow-none collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFaqAccordion<?php echo e($niveau->id); ?>"
                                    aria-expanded="false" aria-controls="collapseFaqAccordion<?php echo e($niveau->id); ?>"><svg
                                        class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon me-3"
                                        data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;">
                                        <g transform="translate(96 256)">
                                            <g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)">
                                                <path fill="currentColor"
                                                    d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"
                                                    transform="translate(-96 -256)"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="fw-medium font-sans-serif text-900"><?php echo e($niveau->label); ?></span></button>
                            </div>
                            <div class="accordion-collapse collapse" id="collapseFaqAccordion<?php echo e($niveau->id); ?>"
                                aria-labelledby="faqAccordionHeading<?php echo e($niveau->id); ?>" data-parent="#accordionFaq">
                                <div class="accordion-body p-0">
                                    <div class="card-body bg-light tab-pane active show" id="timeline" role="tabpanel"
                                        aria-labelledby="contact-timeline-tab">
                                        <div class="timeline-vertical py-0">
                                            <?php $__currentLoopData = $niveau->formations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $formation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div
                                                    class="timeline-item <?php echo e($loop->index % 2 == 0 ? 'timeline-item-start' : 'timeline-item-end'); ?>

                                                  mb-3">
                                                    <div
                                                        class="timeline-icon icon-item icon-item-lg text-primary border-300">
                                                        <svg class="svg-inline--fa fa-envelope fa-w-16 fs-1"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="envelope" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                                            </path>
                                                        </svg>
                                                        <!-- <span class="fs-1 fas fa-envelope"></span> Font Awesome fontawesome.com -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 timeline-item-time">
                                                            <div>
                                                                <h6 class="mb-0 text-700">
                                                                    <?php echo e($formation->created_at->locale('fr-FR')->format('Y')); ?>

                                                                </h6>
                                                                <p class="fs--2 text-500 font-sans-serif">
                                                                    <?php echo e($formation->created_at->locale('fr-FR')->format('d')); ?>

                                                                    <?php echo e($formation->created_at->locale('fr-FR')->format('F')); ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="timeline-item-content arrow-bg-white">
                                                                <div class="timeline-item-card bg-white dark__bg-1100"><a
                                                                        href="../../app/support-desk/tickets-preview.html">
                                                                        <h5 class="mb-2 hover-primary">
                                                                            <?php echo e($formation->nom); ?>

                                                                        </h5>
                                                                    </a>
                                                                    <p class="fs--1 mb-0 text-600">
                                                                        Heure depart : <?php echo e($formation->heure_depart); ?>

                                                                    </p>

                                                                    <p class="fs--1 mb-0 text-600">
                                                                        Heure sortie : <?php echo e($formation->heure_sortie); ?>

                                                                    </p>
                                                                    <p class="fs--1 border-bottom mb-3 pb-4 text-600">
                                                                        Observation : <?php echo e($formation->observation); ?>

                                                                    </p>
                                                                    <div class="d-flex flex-wrap pt-2">
                                                                        <h6 class="mb-0 text-600 lh-base"><svg
                                                                                class="svg-inline--fa fa-clock fa-w-16 me-1"
                                                                                aria-hidden="true" focusable="false"
                                                                                data-prefix="far" data-icon="clock"
                                                                                role="img"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                <path fill="currentColor"
                                                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z">
                                                                                </path>
                                                                            </svg>
                                                                            <?php echo e($formation->created_at->toTimeString()); ?></h6>
                                                                        <div
                                                                            class="d-flex align-items-center ms-auto me-2 me-sm-x1 me-xl-2 me-xxl-x1">
                                                                            <div class="dot me-0 me-sm-2 me-xl-0 me-xxl-2 bg-success"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                data-bs-title="Success"></div>
                                                                            <h6
                                                                                class="mb-0 text-700 d-none d-sm-block d-xl-none d-xxl-block">
                                                                                <?php echo e($formation->formateur->nom . ' ' . $formation->formateur->prenom); ?>

                                                                            </h6>
                                                                        </div><small
                                                                            class="badge rounded badge-subtle-success false"><?php echo e($formation->prof_m . ' m'); ?></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
    </div>
    <div id="notification"></div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('javascript'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <script>
        async function deleteFormation(id) {
            try {
                const btnClose = document.getElementById(`colseModal${id}`);
                btnClose.click();
                const response = await axios.delete(`/dashboard/formations/${id}`);
                if (response.status === 200) {
                    const notif =
                        `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                                    <strong class="me-auto">ASAAM</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    ${response.data.message}
                                </div>
                            </div>
                        </div>`;

                    const notElement = document.getElementById("notification");
                    notElement.innerHTML = notif;
                    const toastTrigger = document.getElementById('liveToastBtn')
                    const toastLiveExample = document.getElementById('liveToast')
                    if (toastTrigger) {
                        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                        toastBootstrap.show();
                    }


                    const rowElement = document.getElementById(`row${id}`);
                    rowElement.remove();
                }
            } catch (err) {
                const notif =
                    `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <div style="width: 15px;height: 15px;background: red;border-radius: 3px;margin-right: 5px;"></div>
                            <strong class="me-auto">ASAAM</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Erreur servenu
                        </div>
                    </div>
                </div>`;
                const notElement = document.getElementById("notification");
                notElement.innerHTML = notif;
                const toastTrigger = document.getElementById('btn-confirmation-delete');
                const toastLiveExample = document.getElementById('liveToast');
                if (toastTrigger) {
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                    toastBootstrap.show();
                }
            }

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plongeurDash.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cdmasoluma/public_html/diver/resources/views/plongeurDash/pages/formations/index.blade.php ENDPATH**/ ?>