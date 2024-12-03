

<?php $__env->startSection('custom-css'); ?>

<style>
.text-limited {
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Limite à 3 lignes */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis; /* Ajoute des points de suspension */

}

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom-js'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="page_title ds s-parallax s-overlay s-pt-160 s-pb-80">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h1>Galerie</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Galerie
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>

<section class="ls s-pt-90 s-pb-60 s-pt-xl-155 s-pb-xl-130">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                


                

                    
                        
                        
                    

                    

                
                <!-- .isotope-wrapper-->
                <div class="row isotope-wrapper masonry-layout c-mb-60" data-filters=".gallery-filters">
                    <?php $__currentLoopData = $galeries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galerie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-md-6 kiteboarding kiteschool">

                        <div class="vertical-item text-center ">
                            <div class="item-media">
                                <img src="<?php echo e(asset('assets/images/gallery/10.jpg')); ?>" alt="img">
                            </div>
                            <div class="item-content pt-4">
                                <h6 class="mb-1 text-limited">
                                    <a href="<?php echo e(route('detail.galerie')); ?>">Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit</a>
                                </h6>
                                <p class="item-meta text-right">
                                    <a href="<?php echo e(route('detail.galerie')); ?>">12/11/2024</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-md-6 kiteboarding kiteschool">

                        <div class="vertical-item text-center ">
                            <div class="item-media">
                                <img src="<?php echo e(asset('assets/images/gallery/10.jpg')); ?>" alt="img">
                            </div>
                            <div class="item-content pt-4">
                                <h6 class="mb-1 text-limited">
                                    <a href="<?php echo e(route('detail.galerie')); ?>">Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit</a>
                                </h6>
                                <p class="item-meta text-right">
                                    <a href="<?php echo e(route('detail.galerie')); ?>">12/11/2024</a>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-4 col-md-6 kiteboarding kiteschool">

                        <div class="vertical-item text-center ">
                            <div class="item-media">
                                <img src="<?php echo e(asset('assets/images/gallery/10.jpg')); ?>" alt="img">
                            </div>
                            <div class="item-content pt-4">
                                <h6 class="mb-1 text-limited">
                                    <a href="<?php echo e(route('detail.galerie')); ?>">Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit</a>
                                </h6>
                                <p class="item-meta text-right">
                                    <a href="<?php echo e(route('detail.galerie')); ?>">12/11/2024</a>
                                </p>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>

    </div>
</section>




<div class="divider-40 divider-xl-50"></div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/accueil/galerie/galerie.blade.php ENDPATH**/ ?>