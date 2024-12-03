<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="card-header position-relative">
        <div class="row">
            <div class="col-6">
                <h5 class="mb-0 mt-1">Tous les cours</h5>
                
                <!--/.bg-holder-->
            </div>
            <div class="col-6">

                <div class="col-6 d-xl-none">
                    <button class="btn btn-sm p-0 btn-link position-relative" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#filterOffcanvas" aria-controls="filterOffcanvas">
                        <svg class="svg-inline--fa fa-filter fa-w-16 fs-0 text-700" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z">
                            </path>
                        </svg>
                        <!-- <span class="fas fa-filter fs-0 text-700"></span> Font Awesome fontawesome.com -->
                    </button>
                </div>
                
                <div class="col position-sm-relative position-absolute top-0 end-0 me-3 me-sm-0 p-0">
                    <div class="row g-0 g-md-3 justify-content-end">
                        <div class="col-auto">
                            <form class="row gx-2">
                                <div class="col-auto d-none d-lg-block"><small class="fw-semi-bold">Filtrer par:</small>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select form-select-sm" aria-label="Bulk actions">
                                        <?php $__currentLoopData = $niveaux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niveau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value=<?php echo e($niveau->id); ?>><?php echo e($niveau->label); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-3 g-3">
    <?php $__currentLoopData = $cours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="col-md-6 col-xxl-4">
        <div class="card h-100 overflow-hidden">
            <div class="card-body p-0 d-flex flex-column justify-content-between">
                <div>
                    <div class="hoverbox text-center"><a class="text-decoration-none" target="__balnk__"
                            href="<?php echo e($item->lien); ?>" data-gallery="attachment-bg">
                            <img src="<?php echo e($item->icon); ?>" height="230px" style="padding: 35px;" />
                        </a>
                        <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2">
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="fs-0 mb-2">
                            <a class="text-dark" target="_blank" href="<?php echo e($item->lien); ?>"><?php echo e($item->nom); ?></a>
                        </h5>
                        <h5 class=" fs-0"><?php echo e($item->created_at); ?>

                        </h5>
                    </div>
                </div>
                <div class="row g-0 mb-3 align-items-end">
                    <div class="col ps-3">
                        <h4 class="fs-1 text-warning d-flex align-items-center">
                            <span><?php echo e($item->niveau->label); ?></span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plongeurDash.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/plongeurDash/pages/cours/index.blade.php ENDPATH**/ ?>