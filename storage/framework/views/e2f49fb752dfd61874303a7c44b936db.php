<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="card overflow-hidden mb-3" data-bs-theme="light">
            <div class="card-body bg-black">
                <div class="bg-holder rounded-3"
                    style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/course-details-bg.png')); ?>)">
                </div>
                <!--/.bg-holder-->

                <div class="row">
                    <div class="col-xl-10 position-relative">
                        <div class="row g-3 align-items-center">
                            <div class="col-lg-5">
                                <div class="position-relative">
                                    <div class="bg-holder rounded-1 overlay"
                                        style="background-image:url(<?php echo e($blog->image); ?>)">
                                    </div>
                                    <!--/.bg-holder-->
                                    <a class="text-decoration-none position-relative d-block py-7 text-center"
                                        href="<?php echo e($blog->image); ?>" data-gallery="attachment-bg"><img class="rounded-1"
                                            src="<?php echo e(asset('dashboard/img/icons/play.svg')); ?>)" width="60"
                                            alt="" /></a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <h6 class="fw-semi-bold text-400">Blog by <a class="text-info"
                                        href="../../../app/e-learning/trainer-profile.html"><?php echo e($blog->createur->nom . '' . $blog->createur->prenom); ?></a>
                                </h6>
                                <h2 class="fw-bold text-white"> <?php echo e($blog->title); ?></h2>
                                <?php $__currentLoopData = explode(',', $blog->tag); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="badge bg-info" style="font-size: 12;"><?php echo e($tag); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <p class="mb-0 fw-medium text-400">
                                    <?php echo e($blog->description); ?>


                            </div>
                        </div>
                        <hr class="text-secondary text-opacity-50" />
                        <ul class="list-unstyled d-flex flex-wrap gap-3 fs--1 fw-semi-bold text-300 mt-3 mb-0">
                            <li><span><i class="fas fa-calendar-alt"></i> </span><?php echo e($blog->created_at); ?> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
           <div class="card-header">
            <h5 class="card-title">Contenu</h5>
            <div class="card-body"><?php echo $blog->content; ?></div>
           </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plongeurDash.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/plongeurDash/pages/blogs/details.blade.php ENDPATH**/ ?>