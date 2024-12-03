

<?php $__env->startSection('title'); ?>
<title>FRMPAS - Payement</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
  <div class="card-header position-relative">
    <h5 class="mb-0 mt-1">Panier</h5>
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
    </div>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <div class="row justify-content-between">
      <div class="col-md-auto">
        <h5 class="mb-3 mb-md-0">Panier (2 Articles)</h5>
      </div>
      <div class="col-md-auto"><a class="btn btn-sm btn-outline-secondary border-300 me-2 shadow-none"
          href="../../app/e-commerce/product/product-list.html"> <span class="fas fa-chevron-left me-1"
            data-fa-transform="shrink-4"></span>Continuer les achats</a><a class="btn btn-sm btn-primary"
            href="<?php echo e(route('payement')); ?>">Commander</a></div>
    </div>
  </div>
  <div class="card-body p-0">
    <div class="row gx-card mx-0 bg-200 text-900 fs--1 fw-semi-bold">
      <div class="col-9 col-md-8 py-2">Nom</div>
      <div class="col-3 col-md-4">
        <div class="row">
          <div class="col-md-8 py-2 d-none d-md-block text-center">Quantité</div>
          <div class="col-12 col-md-4 text-end py-2">Prix</div>
        </div>
      </div>
    </div>
    <div class="row gx-card mx-0 align-items-center border-bottom border-200">
      <div class="col-8 py-3">
        <div class="d-flex align-items-center"><a href="../../app/e-commerce/product/product-details.html"><img
              class="img-fluid rounded-1 me-3 d-none d-md-block"
              src="https://www.cmas.org/images/2023/07/30/discovery-freediver.webp" alt="" width="60" /></a>
          <div class="flex-1">
            <h5 class="fs-0"><a class="text-900" href="../../app/e-commerce/product/product-details.html">Comic Page
                Layout: Analysing The Classics</a></h5>
            <div class="fs--2 fs-md--1"><a class="text-danger" href="#!">Retirer</a></div>
          </div>
        </div>
      </div>
      <div class="col-4 py-3">
        <div class="row align-items-center">
          <div class="col-md-8 d-flex justify-content-end justify-content-md-center order-1 order-md-0">
            <div>
              <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity">
                <button class="btn btn-sm btn-outline-secondary border-300 px-2 shadow-none"
                  data-type="minus">-</button>
                <input class="form-control text-center px-2 input-spin-none" type="number" min="1" value="1"
                  aria-label="Amount (to the nearest dollar)" style="width: 50px" />
                <button class="btn btn-sm btn-outline-secondary border-300 px-2 shadow-none" data-type="plus">+</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-end ps-0 order-0 order-md-1 mb-2 mb-md-0 text-600">200 DH</div>
        </div>
      </div>
    </div>
    <div class="row gx-card mx-0 align-items-center border-bottom border-200">
      <div class="col-8 py-3">
        <div class="d-flex align-items-center"><a href="../../app/e-commerce/product/product-details.html"><img
              class="img-fluid rounded-1 me-3 d-none d-md-block"
              src="https://www.cmas.org/images/2023/07/30/judge-courses-photo.webp" alt="" width="60" /></a>
          <div class="flex-1">
            <h5 class="fs-0"><a class="text-900" href="../../app/e-commerce/product/product-details.html">CMAS POOL
                FREEDIVER</a></h5>
            <div class="fs--2 fs-md--1"><a class="text-danger" href="#!">Retirer</a></div>
          </div>
        </div>
      </div>
      <div class="col-4 py-3">
        <div class="row align-items-center">
          <div class="col-md-8 d-flex justify-content-end justify-content-md-center order-1 order-md-0">
            <div>
              <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity">
                <button class="btn btn-sm btn-outline-secondary border-300 px-2 shadow-none"
                  data-type="minus">-</button>
                <input class="form-control text-center px-2 input-spin-none" type="number" min="1" value="1"
                  aria-label="Amount (to the nearest dollar)" style="width: 50px" />
                <button class="btn btn-sm btn-outline-secondary border-300 px-2 shadow-none" data-type="plus">+</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-end ps-0 order-0 order-md-1 mb-2 mb-md-0 text-600">200 DH</div>
        </div>
      </div>
    </div>
    <div class="row fw-bold gx-card mx-0">
      <div class="col-9 col-md-8 py-2 text-end text-900">Total</div>
      <div class="col px-0">
        <div class="row gx-card mx-0">
          <div class="col-md-8 py-2 d-none d-md-block text-center">2 (articles)</div>
          <div class="col-12 col-md-4 text-end py-2">400 DH</div>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer bg-light d-flex justify-content-end">
    <form class="me-3">
      <div class="input-group input-group-sm">
        <input class="form-control" type="text" placeholder="Code promo" />
        <button class="btn btn-outline-secondary border-300 btn-sm shadow-none" type="submit">Appliquer</button>
      </div>
    </form><a class="btn btn-sm btn-primary" href="<?php echo e(route('payement')); ?>">Commander</a>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CDMA_MOBILE\Desktop\FRMPAS\resources\views/dashboard/pages/cart.blade.php ENDPATH**/ ?>