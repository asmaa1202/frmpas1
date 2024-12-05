<?php $__env->startSection('custom-css'); ?>
<style>
    .team-layout {
        background-color: #f9f9f9;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .team-layout .item-media img {
        border-radius: 50%;
        max-width: 100%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin: 0 auto;
    }

    .team-layout h5 a {
        color: #333;
        font-size: 20px;
        text-decoration: none;
    }

    .special-heading span {
        font-size: 30px;
        color: #0651b1;
        font-family: 'ui-serif';
    }
</style>
<?php $__env->stopSection(); ?>


   

<?php $__env->startSection('custom-js'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="page_title ds s-parallax s-overlay s-pt-160 s-pb-80">
    <div class="container">
       

            <div class="col-md-12">
                <h1>FRMPAS Family</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        FRMPAS Family
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>


<div class="divider-40"></div>

<section class="ls s-pb-90 s-pb-xl-160">
    <div class="container">
        <div class="row">
            <!-- Commission Sportive -->
            <div class="col-md-6 mb-4">
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Commission Sportive</span>
                </h3>
                <div class="vertical-item text-center team-layout">
                    <div class="item-media">
                        <img src="<?php echo e(asset('equipe/e1.jpg')); ?>" alt="img" class="img-fluid">
                    </div>
                    <div class="item-content">
                        <h5 class="mb-0"><a href="team-single.html">Mohammed Atouani</a></h5>
                        <p class="team-position pb-xl-3">Membre</p>
                    </div>
                </div>
            </div>

            <!-- Commission Technique -->
            <div class="col-md-6 mb-4">
                <h3 class="text-center mt-0 mb-2 special-heading text-blue">
                    <span>Commission Technique</span>
                </h3>
                <div class="vertical-item text-center team-layout">
                    <div class="item-media">
                        <img src="<?php echo e(asset('equipe/TIMOUYASSE Hamza.jpg')); ?>" alt="img" class="img-fluid">
                    </div>
                    <div class="item-content">
                        <h5 class="mb-0"><a href="team-single.html">TIMOUYASSE Hamza</a></h5>
                        <p class="team-position pb-xl-3">Trésorier</p>
                    </div>
                </div>
            </div>

            <!-- Commission Scientifique -->
            <div class="col-md-6 mb-4">
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Commission Scientifique</span>
                </h3>
                <div class="vertical-item text-center team-layout">
                    <div class="item-media">
                        <img src="<?php echo e(asset('equipe/e2.jpg')); ?>" alt="img" class="img-fluid">
                    </div>
                    <div class="item-content">
                        <h5 class="mb-0"><a href="team-single.html">MANHI Hamza</a></h5>
                        <p class="team-position pb-xl-3">Vice-président</p>
                    </div>
                </div>
            </div>

            <!-- Commission Féminine -->
            <div class="col-md-6 mb-4">
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Commission Féminine</span>
                </h3>
                <div class="vertical-item text-center team-layout">
                    <div class="item-media">
                        <img src="<?php echo e(asset('equipe/AHAKKAM Ghizlane.jpg')); ?>" alt="img" class="img-fluid">
                    </div>
                    <div class="item-content">
                        <h5 class="mb-0"><a href="team-single.html">AHAKKAM Ghizlane</a></h5>
                        <p class="team-position pb-xl-3">Membre</p>
                    </div>
                </div>
            </div>

            <!-- Commission de Juge -->
            <div class="col-md-6 mb-4">
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Commission de Juge</span>
                </h3>
                <div class="vertical-item text-center team-layout">
                    <div class="item-media">
                        <img src="<?php echo e(asset('equipe/Omar Behari.jpg')); ?>" alt="img" class="img-fluid">
                    </div>
                    <div class="item-content">
                        <h5 class="mb-0"><a href="team-single.html">BEHARI Moulay Omar</a></h5>
                        <p class="team-position pb-xl-3">secrétaire général</p>
                    </div>
                </div>
            </div>

            <!-- Commission Discipline -->
            <div class="col-md-6 mb-4">
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Commission Discipline</span>
                </h3>
                <div class="vertical-item text-center team-layout">
                    <div class="item-media">
                        <img src="<?php echo e(asset('equipe/TIMOUYASSE Hamza.jpg')); ?>" alt="img" class="img-fluid">
                    </div>
                    <div class="item-content">
                        <h5 class="mb-0"><a href="team-single.html">TIMOUYASSE Hamza</a></h5>
                        <p class="team-position pb-xl-3">Trésorier</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="divider-40 divider-xl-50"></div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/accueil/frmpas_family/commissions.blade.php ENDPATH**/ ?>