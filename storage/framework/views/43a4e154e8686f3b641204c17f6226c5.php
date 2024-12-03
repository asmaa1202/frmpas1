

<?php $__env->startSection('title'); ?>
<title>FRMPAS - Payement</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
  <div class="card-header position-relative">
    <h5 class="mb-0 mt-1">Voici la liste des produits que vous pouvez commander</h5>
    <div class="bg-holder d-none d-md-block bg-card"
      style="background-image:url(<?php echo e(asset("dashboard/img/illustrations/corner-6.png")); ?>)">
    </div>
    <!--/.bg-holder-->

  </div>
  <div class="card-body pt-0 pt-md-3">
    <div class="row g-3 align-items-center">
      <div class="col-auto d-xl-none">
        <button class="btn btn-sm p-0 btn-link position-relative" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#filterOffcanvas" aria-controls="filterOffcanvas"><span
            class="fas fa-filter fs-0 text-700"></span></button>
      </div>
      <div class="col">
        <form class="position-relative">
          <input class="form-control form-control-sm search-input lh-1 rounded-2 ps-4" type="search"
            placeholder="Recherche..." aria-label="Recherche" />
          <div class="position-absolute top-50 start-0 translate-middle-y ms-2"><span
              class="fas fa-search text-400 fs--1"></span></div>
        </form>
      </div>
      <div class="col position-sm-relative position-absolute top-0 end-0 me-3 me-sm-0 p-0">
        <div class="row g-0 g-md-3 justify-content-end">
          <div class="col-auto">
            <div class="d-flex align-items-center">
              <a class="btn btn-sm btn-primary" href="<?php echo e(route('cart')); ?>">Confirmer</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-3 g-3">
  <article class="col-md-6 col-xxl-4">
    <div class="card h-100 overflow-hidden">
      <div class="card-body p-0 d-flex flex-column justify-content-between">
        <div style="display: flex;flex-direction: column;height: 100%;">
          <div class="hoverbox text-center" style="flex:1"><a class="text-decoration-none"
              href=<?php echo e(asset("dashboard/video/beach.mp4")); ?> data-gallery="attachment-bg"><img class="fit-cover"
                src="https://www.cmas.org/images/2023/07/30/cmas-freediving-instructor-3-star.webp" alt=""
                width="280px" /></a>
            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
                src=<?php echo e(asset('dashboard/img/icons/play.svg')); ?> width="60" alt="" /></div>
          </div>
          <div class="p-3">
            <h5 class="fs-0 mb-2"><a class="text-dark"
                href="../../../app/e-learning/course/course-details.html">DISCOVERY FREEDIVER</a></h5>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
          </div>
        </div>
        <div class="row g-0 mb-3 align-items-end">
          <div class="col ps-3">
            <h4 class="fs-1 text-warning d-flex align-items-center"> <span>200 DH</span>
              <del class="ms-2 fs--1 text-700">250 DH</del>
            </h4>

          </div>
          <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default hover-primary" href="#!"
              data-bs-toggle="tooltip" data-bs-placement="top" title="Ajouter au panier"><span class="fas fa-cart-plus"
                data-fa-transform="down-2"></span></a></div>
        </div>
      </div>
    </div>
  </article>
  <article class="col-md-6 col-xxl-4">
    <div class="card h-100 overflow-hidden">
      <div class="card-body p-0 d-flex flex-column justify-content-between">
        <div style="display: flex;flex-direction: column;height: 100%;">
          <div class="hoverbox text-center" style="flex:1"><a class="text-decoration-none"
              href=<?php echo e(asset("dashboard/video/beach.mp4")); ?> data-gallery="attachment-bg"><img class="fit-cover"
                src="https://www.cmas.org/images/2023/07/30/1-star-instructor-photo.webp" alt="" width="280px" /></a>
            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
                src=<?php echo e(asset('dashboard/img/icons/play.svg')); ?> width="60" alt="" /></div>
          </div>
          <div class="p-3">
            <h5 class="fs-0 mb-2"><a class="text-dark" href="../../../app/e-learning/course/course-details.html">CMAS
                FREEDIVER</a></h5>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
          </div>
        </div>
        <div class="row g-0 mb-3 align-items-end">
          <div class="col ps-3">
            <h4 class="fs-1 text-warning d-flex align-items-center"> <span>200 DH</span>
              <del class="ms-2 fs--1 text-700">250 DH</del>
            </h4>

          </div>
          <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default hover-primary" href="#!"
              data-bs-toggle="tooltip" data-bs-placement="top" title="Ajouter au panier"><span class="fas fa-cart-plus"
                data-fa-transform="down-2"></span></a></div>
        </div>
      </div>
    </div>
  </article>
  <article class="col-md-6 col-xxl-4">
    <div class="card h-100 overflow-hidden">
      <div class="card-body p-0 d-flex flex-column justify-content-between">
        <div style="display: flex;flex-direction: column;height: 100%;">
          <div class="hoverbox text-center" style="flex:1"><a class="text-decoration-none"
              href=<?php echo e(asset("dashboard/video/beach.mp4")); ?> data-gallery="attachment-bg"><img class="fit-cover"
                src="https://www.cmas.org/images/2023/07/30/2-star-freediving-instructor.webp" alt=""
                width="280px" /></a>
            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
                src=<?php echo e(asset('dashboard/img/icons/play.svg')); ?> width="60" alt="" /></div>
          </div>
          <div class="p-3">
            <h5 class="fs-0 mb-2"><a class="text-dark" href="../../../app/e-learning/course/course-details.html">SAFETY
                FREEDIVER</a>
            </h5>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
          </div>
        </div>
        <div class="row g-0 mb-3 align-items-end">
          <div class="col ps-3">
            <h4 class="fs-1 text-warning d-flex align-items-center"> <span>200 DH</span>
              <del class="ms-2 fs--1 text-700">250 DH</del>
            </h4>

          </div>
          <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default hover-primary" href="#!"
              data-bs-toggle="tooltip" data-bs-placement="top" title="Ajouter au panier"><span class="fas fa-cart-plus"
                data-fa-transform="down-2"></span></a></div>
        </div>
      </div>
    </div>
  </article>
  <article class="col-md-6 col-xxl-4">
    <div class="card h-100 overflow-hidden">
      <div class="card-body p-0 d-flex flex-column justify-content-between">
        <div style="display: flex;flex-direction: column;height: 100%;">
          <div class="hoverbox text-center" style="flex:1"><a class="text-decoration-none"
              href=<?php echo e(asset("dashboard/video/beach.mp4")); ?> data-gallery="attachment-bg"><img class="fit-cover"
                src="https://www.cmas.org/images/2023/07/30/judge-courses-photo.webp" alt="" width="280px" /></a>
            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
                src=<?php echo e(asset('dashboard/img/icons/play.svg')); ?> width="60" alt="" /></div>
          </div>
          <div class="p-3">
            <h5 class="fs-0 mb-2"><a class="text-dark" href="../../../app/e-learning/course/course-details.html">CMAS POOL FREEDIVER</a></h5>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
          </div>
        </div>
        <div class="row g-0 mb-3 align-items-end">
          <div class="col ps-3">
            <h4 class="fs-1 text-warning d-flex align-items-center"> <span>200 DH</span>
              <del class="ms-2 fs--1 text-700">250 DH</del>
            </h4>

          </div>
          <div class="col-auto pe-3"><a class="btn btn-sm btn-primary" href="#!" data-bs-toggle="tooltip"
              data-bs-placement="top" title="Retirer du panier"><span class="fas fa-shopping-cart"
                data-fa-transform="down-2"></span></a></div>
        </div>
      </div>
    </div>
  </article>
  <article class="col-md-6 col-xxl-4">
    <div class="card h-100 overflow-hidden">
      <div class="card-body p-0 d-flex flex-column justify-content-between">
        <div style="display: flex;flex-direction: column;height: 100%;">
          <div class="hoverbox text-center" style="flex:1"><a class="text-decoration-none"
              href=<?php echo e(asset("dashboard/video/beach.mp4")); ?> data-gallery="attachment-bg"><img class="fit-cover"
                src="https://www.cmas.org/images/2023/07/30/cmas-freediving-instructor-3-star.webp" alt=""
                width="280px" /></a>
            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
                src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
          </div>
          <div class="p-3">
            <h5 class="fs-0 mb-2"><a class="text-dark" href="../../../app/e-learning/course/course-details.html">Script
                Writing Masterclass: Introdution to Industry Cliches</a></h5>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
          </div>
        </div>
        <div class="row g-0 mb-3 align-items-end">
          <div class="col ps-3">
            <h4 class="fs-1 text-warning d-flex align-items-center"> <span>200 DH</span>
              <del class="ms-2 fs--1 text-700">250 DH</del>
            </h4>

          </div>
          <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default hover-primary" href="#!"
              data-bs-toggle="tooltip" data-bs-placement="top" title="Ajouter au panier"><span class="fas fa-cart-plus"
                data-fa-transform="down-2"></span></a></div>
        </div>
      </div>
    </div>
  </article>
  <article class="col-md-6 col-xxl-4">
    <div class="card h-100 overflow-hidden">
      <div class="card-body p-0 d-flex flex-column justify-content-between">
        <div style="display: flex;flex-direction: column;height: 100%;">
          <div class="hoverbox text-center" style="flex:1"><a class="text-decoration-none"
              href=<?php echo e(asset("dashboard/video/beach.mp4")); ?> data-gallery="attachment-bg"><img class="fit-cover"
                src="https://www.cmas.org/images/2023/07/11/1-star-pool-freediver.webp" alt="" width="280px" /></a>
            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
                src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
          </div>
          <div class="p-3">
            <h5 class="fs-0 mb-2"><a class="text-dark"
                href="../../../app/e-learning/course/course-details.html">Composition in Comics: Easy to Read Between
                Panels</a></h5>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
          </div>
        </div>
        <div class="row g-0 mb-3 align-items-end">
          <div class="col ps-3">
            <h4 class="fs-1 text-warning d-flex align-items-center"> <span>200 DH</span>
              <del class="ms-2 fs--1 text-700">250 DH</del>
            </h4>

          </div>
          <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default hover-primary" href="#!"
              data-bs-toggle="tooltip" data-bs-placement="top" title="Ajouter au panier"><span class="fas fa-cart-plus"
                data-fa-transform="down-2"></span></a></div>
        </div>
      </div>
    </div>
  </article>
  <article class="col-md-6 col-xxl-4">
    <div class="card h-100 overflow-hidden">
      <div class="card-body p-0 d-flex flex-column justify-content-between">
        <div style="display: flex;flex-direction: column;height: 100%;">
          <div class="hoverbox text-center" style="flex:1"><a class="text-decoration-none"
              href=<?php echo e(asset("dashboard/video/beach.mp4")); ?> data-gallery="attachment-bg"><img class="fit-cover"
                src="https://www.cmas.org/images/2023/07/11/discovery-pool-freediver.webp" alt="" width="280px" /></a>
            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
                src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
          </div>
          <div class="p-3">
            <h5 class="fs-0 mb-2"><a class="text-dark"
                href="../../../app/e-learning/course/course-details.html">DISCOVERY POOL FREEDIVER</a>
            </h5>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
          </div>
        </div>
        <div class="row g-0 mb-3 align-items-end">
          <div class="col ps-3">
            <h4 class="fs-1 text-warning d-flex align-items-center"> <span>200 DH</span>
              <del class="ms-2 fs--1 text-700">250 DH</del>
            </h4>

          </div>
          <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default hover-primary" href="#!"
              data-bs-toggle="tooltip" data-bs-placement="top" title="Ajouter au panier"><span class="fas fa-cart-plus"
                data-fa-transform="down-2"></span></a></div>
        </div>
      </div>
    </div>
  </article>
  <article class="col-md-6 col-xxl-4">
    <div class="card h-100 overflow-hidden">
      <div class="card-body p-0 d-flex flex-column justify-content-between">
        <div style="display: flex;flex-direction: column;height: 100%;">
          <div class="hoverbox text-center" style="flex:1"><a class="text-decoration-none"
              href=<?php echo e(asset("dashboard/video/beach.mp4")); ?> data-gallery="attachment-bg"><img class="fit-cover"
                src="https://www.cmas.org/images/2023/07/30/discovery-freediver.webp" alt="" width="280px" /></a>
            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
                src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
          </div>
          <div class="p-3">
            <h5 class="fs-0 mb-2"><a class="text-dark" href="../../../app/e-learning/course/course-details.html">Comic
                Page Layout: Analysing The Classics</a></h5>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
          </div>
        </div>
        <div class="row g-0 mb-3 align-items-end">
          <div class="col ps-3">
            <h4 class="fs-1 text-warning d-flex align-items-center"> <span>200 DH</span>
              <del class="ms-2 fs--1 text-700">250 DH</del>
            </h4>

          </div>
          <div class="col-auto pe-3">
            <a class="btn btn-sm btn-primary" href="#!" data-bs-toggle="tooltip" data-bs-placement="top"
              title="Retirer du panier"><span class="fas fa-shopping-cart" data-fa-transform="down-2"></span></a>
          </div>
        </div>
      </div>
    </div>
  </article>

</div>

<div class="card">
  <div class="card-body">
    <div class="row g-3 flex-center justify-content-md-between">
      <div class="col-auto">
        <form class="row gx-2">
          <div class="col-auto"><small>Show:</small></div>
          <div class="col-auto">
            <select class="form-select form-select-sm" aria-label="Show courses">
              <option selected="selected" value="9">9</option>
              <option value="20">20</option>
              <option value="50">50</option>
            </select>
          </div>
        </form>
      </div>
      <div class="col-auto">
        <button class="btn btn-falcon-default btn-sm me-2" type="button" disabled="disabled" data-bs-toggle="tooltip"
          data-bs-placement="top" title="Prev"><span class="fas fa-chevron-left"></span></button><a
          class="btn btn-sm btn-falcon-default text-primary me-2" href="#!">1</a><a
          class="btn btn-sm btn-falcon-default me-2" href="#!">2</a><a class="btn btn-sm btn-falcon-default me-2"
          href="#!">3</a><a class="btn btn-sm btn-falcon-default me-2" href="#!"> <span
            class="fas fa-ellipsis-h"></span></a><a class="btn btn-sm btn-falcon-default me-2" href="#!">303</a>
        <button class="btn btn-falcon-default btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="top"
          title="Next"><span class="fas fa-chevron-right"> </span></button>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CDMA_MOBILE\Desktop\FRMPAS\resources\views/dashboard/pages/pick.blade.php ENDPATH**/ ?>