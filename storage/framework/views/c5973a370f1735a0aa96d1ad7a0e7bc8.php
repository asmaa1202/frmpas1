<?php $__env->startSection('custom-css'); ?>

<style>

    .title-multiline {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        max-height: 3em; 
        line-height: 1.5em; 
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
                <h1>Competition</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Sport</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Competition
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>


<section class="text-center" style="margin-top: 155px;">
    <div class="container">
     
            <form action="<?php echo e(route('sport.competition')); ?>" method="GET">
                <?php echo csrf_field(); ?>
               <div class="row">
                    <p class="form-row form-row-last col-md-3 col-sm-6">
                        <select name="type_document" id="billing_country" class="country_to_state country_select  select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                            <option value="">Selectionnez type document</option>
                        
                            
                            <option value="competition">Compétition Nationale</option>
                            <option value="coupe_du_trone">Coupe du Trône</option>
                            <option value="resultat">Résultat</option>
                        
                        </select>
                    </p>

                    <p class="form-row form-row-last col-md-3 col-sm-6">
                        <select name="type" id="billing_country" class="country_to_state country_select  select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                            <option value="">Selectionnez type</option>
                            
                            <option value="psp">Plongée Sportive en Piscine</option>
                            <option value="nap">Nage Avec Palmes</option>
                        
                        </select>
                    </p>

                    <p class="form-row form-row-last col-md-3 col-sm-6">
                        <select name="saison" id="billing_country" class="country_to_state country_select  select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                            <option value="">Selectionnez saison</option>
                            
                            <option value="2024-2025">2024-2025</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2022-2023">2022-2023</option>
                            <option value="2021-2022">2021-2022</option>
                            <option value="2020-2021">2020-2021</option>
                        
                        </select>
                    </p>

                    <p class="form-row form-row-last col-md-3 col-sm-6">
                        <button type="submit" class="btn btn-darkgrey">chercher</button>
                    </p>
                </div>
            </form>
        
        
    </div>
</section>

<section class="my-3">
    <div class="container">
        <div class="row">
            <main class="col-lg-7 col-xl-8">
                <div class="row">
                    <?php if(isset($documents)): ?>
                        <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 mb-4">
                                <article class="post text-center text-md-left vertical-item content-padding hero-bg" style="height:;">
                                    <div class="item-content">
                                        <header class="entry-header">
                                            <?php if(isset($document->zone)): ?>
                                            <span class="cat-links">
                                                <a href="#" rel="category tag"><?php echo e($document->zone); ?></a>,
                                                <a href="#" rel="category tag"><?php echo e($document->etape); ?></a>
                                            </span>
                                            <?php endif; ?>
                                            <h4 class="entry-title mb-3">
                                                <a href="#" rel="bookmark"><?php echo e($document->titre); ?></a>
                                            </h4>
                                            <div class="">
                                                <?php if(isset($document->type_document) && ($document->type_document == 'competition' || $document->type_document == 'coupe_du_trone')): ?>
                                                    <div>
                                                        <i class="fa fa-map-marker"></i><span> <?php echo e($document->emplacement); ?></span>
                                                    </div>
                                                    <br>
                                                    <div>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <a href="#" rel="bookmark">
                                                            <time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">
                                                                <?php echo e($document->date_competion); ?> <?php echo e($document->date_competition2); ?>

                                                            </time>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </header>
                                        <br>
                                        <div class="entry-content" style="position: relative;">
                                            <a href="<?php echo e(route('download.document', ['filename' => $document->document_url])); ?>" class="btn btn-warning" target="_blank">
                                                <i class="fa fa-download" aria-hidden="true"></i> Télécharger
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                
                <?php if(isset($documents) && $documents->hasPages()): ?>
                <nav class="navigation pagination" role="navigation">
                    <h2 class="screen-reader-text">Posts navigation</h2>
                    <div class="nav-links">
                
                        <?php if($documents->onFirstPage()): ?>
                            <a class="prev page-numbers disabled" aria-disabled="true">
                                <i class="fa fa-chevron-left"></i>
                                <span class="screen-reader-text">Previous page</span>
                            </a>
                        <?php else: ?>
                            <a class="prev page-numbers" href="<?php echo e($documents->previousPageUrl()); ?>">
                                <i class="fa fa-chevron-left"></i>
                                <span class="screen-reader-text">Previous page</span>
                            </a>
                        <?php endif; ?>
                
                        <?php $__currentLoopData = $documents->getUrlRange(1, $documents->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $documents->currentPage()): ?>
                                <span class="page-numbers current">
                                    <span class="meta-nav screen-reader-text">Page </span>
                                    <?php echo e($page); ?>

                                </span>
                            <?php else: ?>
                                <a class="page-numbers" href="<?php echo e($url); ?>">
                                    <span class="meta-nav screen-reader-text">Page </span>
                                    <?php echo e($page); ?>

                                </a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                        <?php if($documents->hasMorePages()): ?>
                            <a class="next page-numbers" href="<?php echo e($documents->nextPageUrl()); ?>">
                                <span class="screen-reader-text">Next page</span>
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        <?php else: ?>
                            <a class="next page-numbers disabled" aria-disabled="true">
                                <span class="screen-reader-text">Next page</span>
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        <?php endif; ?>
                
                    </div>
                </nav>
                <?php endif; ?>

            </main>

            <?php if(count($recentBlogs) > 0): ?>
            <aside class="col-lg-5 col-xl-4">
                <div class="widget widget_recent_posts">
                    <h3 class="widget-title">Actualités récentes</h3>
                    <ul class="list-unstyled">
                        <?php $__currentLoopData = $recentBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="media">
                                <a class="media-image" href="blog-single-right.html">
                                    <img src="<?php echo e(asset($blog->image)); ?>" alt="img">
                                </a>
                                <div class="media-body">
                                    <h4 class="entry-title mb-3">
                                        <a href="<?php echo e(route('actualites.show', ['hash' => $blog->blog_hash])); ?>" rel="bookmark" class="title-multiline">
                                            <?php echo e($blog->title); ?>

                                        </a>
                                    </h4>
                                    <p class="item-meta">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i><?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('d.m.Y')); ?>

                                    </p>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </aside>
            <?php endif; ?>

        </div>
    </div>
</section>


<div class="divider-40 divider-xl-50"></div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/accueil/sport/competition.blade.php ENDPATH**/ ?>