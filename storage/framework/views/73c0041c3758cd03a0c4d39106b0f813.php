

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
                <h1>Actualités</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Actualités
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>

<section class="ls s-py-90 s-py-xl-160">
    <div class="container">

        <div class="row c-gutter-60">
            <main class="col-lg-7 col-xl-8">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="text-center text-md-left vertical-item content-padding hero-bg post type-post status-publish format-standard has-post-thumbnail sticky">
                    
                    <div class="item-media post-thumbnail">
                        <img src="<?php echo e(asset($blog->image)); ?>" alt="img" style="height: 300px !important;">
                        <div class="media-links">
                            <a class="abs-link" href="<?php echo e(route('actualites.show', ['hash'=>$blog->blog_hash ])); ?>"></a>
                        </div>
                    </div><!-- .post-thumbnail -->
                    <div class="item-content">
                        <header class="entry-header">
                            <h4 class="entry-title mb-3">
                                <a href="<?php echo e(route('actualites.show', ['hash'=>$blog->blog_hash ])); ?>" rel="bookmark">
                                    
                                    <?php echo e($blog->title); ?>

                                </a>
                            </h4>
                            <div class="entry-meta">
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('actualites.show', ['hash'=>$blog->blog_hash ])); ?>" rel="bookmark">
                                        <time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">
                                            <?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('d.m.Y')); ?>

                                        </time>
                                    </a>
                                </span>
                             
                            </div>
                            <!-- .entry-meta -->

                        </header>
                        <!-- .entry-header -->

                        <div class="entry-content">
                            <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; padding-bottom: 3px;">
                                <?php echo e($blog->subject_preview); ?>

                            </p>
                        </div>
                       
                        
                    </div><!-- .item-content -->
                </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if($blogs->hasPages()): ?>
                <nav class="navigation pagination" role="navigation">
                    <h2 class="screen-reader-text">Posts navigation</h2>
                    <div class="nav-links">
                
                        
                        <?php if($blogs->onFirstPage()): ?>
                            <a class="prev page-numbers disabled" aria-disabled="true">
                                <i class="fa fa-chevron-left"></i>
                                <span class="screen-reader-text">Previous page</span>
                            </a>
                        <?php else: ?>
                            <a class="prev page-numbers" href="<?php echo e($blogs->previousPageUrl()); ?>">
                                <i class="fa fa-chevron-left"></i>
                                <span class="screen-reader-text">Previous page</span>
                            </a>
                        <?php endif; ?>
                
                        
                        <?php $__currentLoopData = $blogs->getUrlRange(1, $blogs->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $blogs->currentPage()): ?>
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
                
                        
                        <?php if($blogs->hasMorePages()): ?>
                            <a class="next page-numbers" href="<?php echo e($blogs->nextPageUrl()); ?>">
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

            <?php if(count($recentBlogs)>0): ?>
            <aside class="col-lg-5 col-xl-4">

                <div class="widget widget_recent_posts">

                    <h3 class="widget-title">Actualités récentes</h3>
                    <ul class="list-unstyled">
                        <?php $__currentLoopData = $recentBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="media">
                                <a class="media-image" href="<?php echo e(route('actualites.show', ['hash' => $blog->blog_hash ])); ?>">
                                    <img src="<?php echo e(asset($blog->image)); ?>" alt="img">
                                </a>
                                <div class="media-body">
                                    <h4 class="entry-title mb-3">
                                        <a href="<?php echo e(route('actualites.show', ['hash' => $blog->blog_hash ])); ?>" rel="bookmark" class="title-multiline">
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

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/accueil/actualite/actualites.blade.php ENDPATH**/ ?>