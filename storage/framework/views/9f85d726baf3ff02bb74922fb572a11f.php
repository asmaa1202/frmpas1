<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-4.png')); ?>);">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3><?php echo e(Auth::user()->club->nom); ?></h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les
                    analyses sur cette page.</p>
            </div>

            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <button class="btn btn-outline-primary" onclick="demandeAdhesion(<?php echo e(Auth::user()->club->id); ?>)">Demande d'adhésion</button>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="row g-3 mb-3">
                    <div class="col-sm-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-1.png')); ?>);">
                            </div>
                            <!--/.bg-holder-->

                            <div class="card-body position-relative">
                                <h6>Missions</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning"
                                    data-countup="{&quot;endValue&quot;:58.386,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">
                                    58.39k</div><a class="fw-semi-bold fs--1 text-nowrap"
                                    href="../app/e-commerce/customers.html">Voir tout<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-2.png')); ?>);">
                            </div>
                            <!--/.bg-holder-->

                            <div class="card-body position-relative">
                                <h6>Missions Express</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"
                                    data-countup="{&quot;endValue&quot;:23.434,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">
                                    23.43k</div><a class="fw-semi-bold fs--1 text-nowrap" href="#">Voir tout
                                    <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-5.png')); ?>);">
                            </div>
                            <!--/.bg-holder-->

                            <div class="card-body position-relative">
                                <h6>Missions Normales</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"
                                    data-countup="{&quot;endValue&quot;:23.434,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">
                                    23.43k</div><a class="fw-semi-bold fs--1 text-nowrap" href="#">Voir tout
                                    <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-7.png')); ?>);">
                            </div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Missions Garantie Réparation</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"
                                    data-countup="{&quot;endValue&quot;:23.434,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">
                                    23.43k</div><a class="fw-semi-bold fs--1 text-nowrap" href="#">Voir tout
                                    <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row flex-between-center g-card">
                            <div class="col-auto">
                                <h6 class="mb-0">Report for this week</h6>
                            </div>
                            <div class="col-auto d-flex">
                                <div class="btn btn-sm btn-text d-flex align-items-center p-0 me-3 shadow-none"
                                    id="echart-bar-report-for-this-week-option-1"> <span
                                        class="fas fa-circle text-primary fs--2 me-1"></span> <span class="text">This
                                        Week </span></div>
                                <div class="btn btn-sm btn-text d-flex align-items-center p-0 shadow-none"
                                    id="echart-bar-report-for-this-week-option-2"> <span
                                        class="fas fa-circle text-300 fs--2 me-1"></span> <span class="text">Last
                                        Week</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/report-for-this-week.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                        <div class="echart-bar-report-for-this-week" data-echart-responsive="true"
                            data-chart="{&quot;option1&quot;:&quot;echart-bar-report-for-this-week-option-1&quot;,&quot;option2&quot;:&quot;echart-bar-report-for-this-week-option-2&quot;}"
                            style="user-select: none; position: relative;" _echarts_instance_="ec_1667649206497">
                            <div
                                style="position: relative; width: 818px; height: 295px; padding: 0px; margin: 0px; border-width: 0px;">
                                <canvas
                                    style="position: absolute; left: 0px; top: 0px; width: 818px; height: 295px; user-select: none; padding: 0px; margin: 0px; border-width: 0px;"
                                    data-zr-dom-id="zr_0" width="1227" height="442"></canvas>
                            </div>
                            <div class=""></div>
                        </div>
                    </div>
                    <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2"
                            href="#!">Voir
                            tout projects
                            <span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="notification"></div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script src=<?php echo e(asset('dashboard/vendors/inputmask/inputmask.min.js')); ?>></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>

<script>
   
    async function demandeAdhesion(id) {
        try {
            let formData = new FormData();

            const res = await axios.post(`/club/demande-adhesion/${id}`, formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            });

            if (res.status === 200) {
                const notif = `
                    <div class="toast-container position-fixed bottom-0 end-0 p-3">
                        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                                <strong class="me-auto">FRMPAS</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                ${res.data.message}
                            </div>
                        </div>
                    </div>`;
                document.getElementById("notification").innerHTML = notif;

                const toastLiveExample = document.getElementById('liveToast');
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                toastBootstrap.show();
            }
        } catch (err) {
            const notif = `
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <div style="width: 15px;height: 15px;background: red;border-radius: 3px;margin-right: 5px;"></div>
                            <strong class="me-auto">FRMPAS</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Erreur survenue lors de l'envoi de la demande.
                        </div>
                    </div>
                </div>`;
            document.getElementById("notification").innerHTML = notif;

            const toastLiveExample = document.getElementById('liveToast');
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
            toastBootstrap.show();
        }
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('clubDash.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/clubDash/pages/home.blade.php ENDPATH**/ ?>