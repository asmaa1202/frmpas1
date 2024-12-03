

<?php $__env->startSection('title'); ?>
<title>FRMPAS - Payement</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
  <div class="card-header position-relative">
    <h5 class="mb-0 mt-1">All Courses</h5>
    <div class="bg-holder d-none d-md-block bg-card"
      style="background-image:url(../../../assets/img/illustrations/corner-6.png);">
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
            placeholder="Search..." aria-label="Search" />
          <div class="position-absolute top-50 start-0 translate-middle-y ms-2"><span
              class="fas fa-search text-400 fs--1"></span></div>
        </form>
      </div>
      <div class="col position-sm-relative position-absolute top-0 end-0 me-3 me-sm-0 p-0">
        <div class="row g-0 g-md-3 justify-content-end">
          <div class="col-auto">
            <div class="d-flex align-items-center"><small class="fw-semi-bold d-none d-lg-block lh-1">View:</small>
              <div class="d-flex"><a class="btn btn-link btn-sm text-400 hover-700"
                  href="../../../app/e-learning/course/course-grid.html" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="Course Grid"><span class="fas fa-th fs-1"
                    data-fa-transform="down-1"></span></a><a class="btn btn-link btn-sm px-1 text-700"
                  href="../../../app/e-learning/course/course-list.html" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="Course List"><span class="fas fa-list-ul fs-1"
                    data-fa-transform="down-1"></span></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<article class="card mb-3 overflow-hidden">
  <div class="card-body p-0">
    <div class="row g-0">
      <div class="col-md-4 col-lg-3">
        <div class="hoverbox h-md-100"><a class="text-decoration-none" href=<?php echo e(asset("dashboard/video/beach.mp4")); ?>

            data-gallery="attachment-bg"><img class="h-100 w-100 fit-cover"
              src=<?php echo e(asset("dashboard/img/elearning/courses/course1.png")); ?> alt="" /></a>
          <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
              src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
        </div>
      </div>
      <div class="col-md-8 col-lg-9 p-x1">
        <div class="row g-0 h-100">
          <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
            <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-soft-primary"><span
                  class="fas fa-pen-nib me-1" data-fa-transform="shrink-4"></span><span>Writing</span></span><span
                class="badge rounded-pill badge-soft-success"><span class="fas fa-crown me-1"
                  data-fa-transform="shrink-4"></span><span>Top Trainer</span></span><span
                class="badge rounded-pill badge-soft-warning"><span class="fas fa-award me-1"
                  data-fa-transform="shrink-4"></span><span>Editor’s Choice</span></span>
            </div>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
            <h4 class="mt-3 mt-sm-0 fs-0 fs-lg-1"><a class="text-900"
                href="../../../app/e-learning/course/course-details.html">Script Writing Masterclass: Introdution to
                Industry Cliches</a></h4>
            <p class="fs--1 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with
              it. In this course, legendary Mr. Finger will explain the process in great details.</p>
            <div class="flex-1 d-flex align-items-end fw-semi-bold fs--1"><span class="me-1 text-900">4.9</span>
              <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star-half-alt text-warning star-icon"></span>
              </div><span class="ms-2 text-secondary">(78,259 reviews)</span>
            </div>
          </div>
          <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
            <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
              <div class="mb-lg-4 mt-auto mt-lg-0">
                <h4 class="mb-1 lh-1 fs-2 text-warning d-flex align-items-end">$69.50
                  <del class="ms-1 fs--1 text-500 mb-1">$139.90</del>
                </h4>
                <p class="mb-0 fs--2 text-800">92,632 Learners Enrolled</p>
              </div>
              <div class="mt-3 d-flex flex-lg-column gap-2">
                <button class="btn btn-md btn-falcon-default hover-danger fs--1 text-600"><span
                    class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to
                    Wishlist</span></button>
                <button class="btn btn-md btn-primary fs--1"><span class="fas fa-cart-plus"></span><span
                    class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
<article class="card mb-3 overflow-hidden">
  <div class="card-body p-0">
    <div class="row g-0">
      <div class="col-md-4 col-lg-3">
        <div class="hoverbox h-md-100"><a class="text-decoration-none" href=<?php echo e(asset("dashboard/video/beach.mp4")); ?>

            data-gallery="attachment-bg"><img class="h-100 w-100 fit-cover"
              src=<?php echo e(asset("dashboard/img/elearning/courses/course2.png")); ?> alt="" /></a>
          <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
              src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
        </div>
      </div>
      <div class="col-md-8 col-lg-9 p-x1">
        <div class="row g-0 h-100">
          <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
            <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-soft-primary"><span
                  class="fas fa-thumbtack me-1" data-fa-transform="shrink-4"></span><span>Misc.</span></span>
            </div>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
            <h4 class="mt-3 mt-sm-0 fs-0 fs-lg-1"><a class="text-900"
                href="../../../app/e-learning/course/course-details.html">Composition in Comics: Easy to Read Between
                Panels</a></h4>
            <p class="fs--1 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with
              it. In this course, legendary Mr. Finger will explain the process in great details.</p>
            <div class="flex-1 d-flex align-items-end fw-semi-bold fs--1"><span class="me-1 text-900">4.9</span>
              <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star-half-alt text-warning star-icon"></span>
              </div><span class="ms-2 text-secondary">(34,567 reviews)</span>
            </div>
          </div>
          <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
            <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
              <div class="mb-lg-4 mt-auto mt-lg-0">
                <h4 class="mb-1 lh-1 fs-2 text-warning d-flex align-items-end">$39.99
                  <del class="ms-1 fs--1 text-500 mb-1">$139.90</del>
                </h4>
                <p class="mb-0 fs--2 text-800">92,603 Learners Enrolled</p>
              </div>
              <div class="mt-3 d-flex flex-lg-column gap-2">
                <button class="btn btn-md btn-falcon-default hover-danger fs--1 text-600"><span
                    class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to
                    Wishlist</span></button>
                <button class="btn btn-md btn-primary fs--1"><span class="fas fa-cart-plus"></span><span
                    class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
<article class="card mb-3 overflow-hidden">
  <div class="card-body p-0">
    <div class="row g-0">
      <div class="col-md-4 col-lg-3">
        <div class="hoverbox h-md-100"><a class="text-decoration-none" href=<?php echo e(asset("dashboard/video/beach.mp4")); ?>

            data-gallery="attachment-bg"><img class="h-100 w-100 fit-cover"
              src=<?php echo e(asset("dashboard/img/elearning/courses/course3.png")); ?> alt="" /></a>
          <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
              src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
        </div>
      </div>
      <div class="col-md-8 col-lg-9 p-x1">
        <div class="row g-0 h-100">
          <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
            <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-soft-primary"><span
                  class="fas fa-brush me-1" data-fa-transform="shrink-4"></span><span>Design</span></span><span
                class="badge rounded-pill badge-soft-success"><span class="fas fa-hashtag me-1"
                  data-fa-transform="shrink-4"></span><span>Best Seller</span></span>
            </div>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
            <h4 class="mt-3 mt-sm-0 fs-0 fs-lg-1"><a class="text-900"
                href="../../../app/e-learning/course/course-details.html">Advanced Design Tools for Modern Designs</a>
            </h4>
            <p class="fs--1 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with
              it. In this course, legendary Mr. Finger will explain the process in great details.</p>
            <div class="flex-1 d-flex align-items-end fw-semi-bold fs--1"><span class="me-1 text-900">4.9</span>
              <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star-half-alt text-warning star-icon"></span>
              </div><span class="ms-2 text-secondary">(108,009 reviews)</span>
            </div>
          </div>
          <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
            <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
              <div class="mb-lg-4 mt-auto mt-lg-0">
                <h4 class="mb-1 lh-1 fs-2 text-warning d-flex align-items-end">$69.50
                  <del class="ms-1 fs--1 text-500 mb-1">$139.90</del>
                </h4>
                <p class="mb-0 fs--2 text-800">11,000 Learners Enrolled</p>
              </div>
              <div class="mt-3 d-flex flex-lg-column gap-2">
                <button class="btn btn-md btn-falcon-default hover-danger fs--1 text-600"><span
                    class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to
                    Wishlist</span></button>
                <button class="btn btn-md btn-primary fs--1"><span class="fas fa-cart-plus"></span><span
                    class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
<article class="card mb-3 overflow-hidden">
  <div class="card-body p-0">
    <div class="row g-0">
      <div class="col-md-4 col-lg-3">
        <div class="hoverbox h-md-100"><a class="text-decoration-none" href=<?php echo e(asset("dashboard/video/beach.mp4")); ?>

            data-gallery="attachment-bg"><img class="h-100 w-100 fit-cover"
              src=<?php echo e(asset("dashboard/img/elearning/courses/course4.png")); ?> alt="" /></a>
          <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
              src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
        </div>
      </div>
      <div class="col-md-8 col-lg-9 p-x1">
        <div class="row g-0 h-100">
          <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
            <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-soft-primary"><span
                  class="fas fa-thumbtack me-1" data-fa-transform="shrink-4"></span><span>Misc.</span></span><span
                class="badge rounded-pill badge-soft-success"><span class="fas fa-crown me-1"
                  data-fa-transform="shrink-4"></span><span>Top Trainer</span></span>
            </div>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
            <h4 class="mt-3 mt-sm-0 fs-0 fs-lg-1"><a class="text-900"
                href="../../../app/e-learning/course/course-details.html">Comic Page Layout: Analysing The Classics</a>
            </h4>
            <p class="fs--1 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with
              it. In this course, legendary Mr. Finger will explain the process in great details.</p>
            <div class="flex-1 d-flex align-items-end fw-semi-bold fs--1"><span class="me-1 text-900">4.9</span>
              <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star-half-alt text-warning star-icon"></span>
              </div><span class="ms-2 text-secondary">(26,777 reviews)</span>
            </div>
          </div>
          <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
            <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
              <div class="mb-lg-4 mt-auto mt-lg-0">
                <h4 class="mb-1 lh-1 fs-2 text-warning d-flex align-items-end">$49.50
                  <del class="ms-1 fs--1 text-500 mb-1">$139.90</del>
                </h4>
                <p class="mb-0 fs--2 text-800">32,106 Learners Enrolled</p>
              </div>
              <div class="mt-3 d-flex flex-lg-column gap-2">
                <button class="btn btn-md btn-falcon-default hover-danger fs--1 text-600"><span
                    class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to
                    Wishlist</span></button>
                <button class="btn btn-md btn-primary fs--1"><span class="fas fa-cart-plus"></span><span
                    class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
<article class="card mb-3 overflow-hidden">
  <div class="card-body p-0">
    <div class="row g-0">
      <div class="col-md-4 col-lg-3">
        <div class="hoverbox h-md-100"><a class="text-decoration-none" href=<?php echo e(asset("dashboard/video/beach.mp4")); ?>

            data-gallery="attachment-bg"><img class="h-100 w-100 fit-cover"
              src=<?php echo e(asset("dashboard/img/elearning/courses/course5.png")); ?> alt="" /></a>
          <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
              src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
        </div>
      </div>
      <div class="col-md-8 col-lg-9 p-x1">
        <div class="row g-0 h-100">
          <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
            <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-soft-primary"><span
                  class="fas fa-brush me-1" data-fa-transform="shrink-4"></span><span>Design</span></span><span
                class="badge rounded-pill badge-soft-success"><span class="fas fa-crown me-1"
                  data-fa-transform="shrink-4"></span><span>Top Trainer</span></span>
            </div>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">J. H. Williams III</a></h5>
            <h4 class="mt-3 mt-sm-0 fs-0 fs-lg-1"><a class="text-900"
                href="../../../app/e-learning/course/course-details.html">Abstract Painting: Zero to Mastery in
                Traditional Medium</a></h4>
            <p class="fs--1 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with
              it. In this course, legendary Mr. Finger will explain the process in great details.</p>
            <div class="flex-1 d-flex align-items-end fw-semi-bold fs--1"><span class="me-1 text-900">4.9</span>
              <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star-half-alt text-warning star-icon"></span>
              </div><span class="ms-2 text-secondary">(1,527 reviews)</span>
            </div>
          </div>
          <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
            <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
              <div class="mb-lg-4 mt-auto mt-lg-0">
                <h4 class="mb-1 lh-1 fs-2 text-warning d-flex align-items-end">$69.50
                  <del class="ms-1 fs--1 text-500 mb-1">$139.90</del>
                </h4>
                <p class="mb-0 fs--2 text-800">2,304 Learners Enrolled</p>
              </div>
              <div class="mt-3 d-flex flex-lg-column gap-2">
                <button class="btn btn-md btn-falcon-default hover-danger fs--1 text-600"><span
                    class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to
                    Wishlist</span></button>
                <button class="btn btn-md btn-primary fs--1"><span class="fas fa-cart-plus"></span><span
                    class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
<article class="card mb-3 overflow-hidden">
  <div class="card-body p-0">
    <div class="row g-0">
      <div class="col-md-4 col-lg-3">
        <div class="hoverbox h-md-100"><a class="text-decoration-none" href=<?php echo e(asset("dashboard/video/beach.mp4")); ?>

            data-gallery="attachment-bg"><img class="h-100 w-100 fit-cover"
              src=<?php echo e(asset("dashboard/img/elearning/courses/course6.png")); ?> alt="" /></a>
          <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
              src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
        </div>
      </div>
      <div class="col-md-8 col-lg-9 p-x1">
        <div class="row g-0 h-100">
          <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
            <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-soft-primary"><span
                  class="fas fa-palette me-1" data-fa-transform="shrink-4"></span><span>Painting</span></span><span
                class="badge rounded-pill badge-soft-success"><span class="fas fa-crown me-1"
                  data-fa-transform="shrink-4"></span><span>Top Trainer</span></span>
            </div>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
            <h4 class="mt-3 mt-sm-0 fs-0 fs-lg-1"><a class="text-900"
                href="../../../app/e-learning/course/course-details.html">Inking: Choosing Between Analog vs Digital</a>
            </h4>
            <p class="fs--1 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with
              it. In this course, legendary Mr. Finger will explain the process in great details.</p>
            <div class="flex-1 d-flex align-items-end fw-semi-bold fs--1"><span class="me-1 text-900">4.9</span>
              <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star-half-alt text-warning star-icon"></span>
              </div><span class="ms-2 text-secondary">(8,179 reviews)</span>
            </div>
          </div>
          <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
            <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
              <div class="mb-lg-4 mt-auto mt-lg-0">
                <h4 class="mb-1 lh-1 fs-2 text-warning d-flex align-items-end">$39.99
                  <del class="ms-1 fs--1 text-500 mb-1">$139.90</del>
                </h4>
                <p class="mb-0 fs--2 text-800">9,312 Learners Enrolled</p>
              </div>
              <div class="mt-3 d-flex flex-lg-column gap-2">
                <button class="btn btn-md btn-falcon-default hover-danger fs--1 text-600"><span
                    class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to
                    Wishlist</span></button>
                <button class="btn btn-md btn-primary fs--1"><span class="fas fa-cart-plus"></span><span
                    class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
<article class="card mb-3 overflow-hidden">
  <div class="card-body p-0">
    <div class="row g-0">
      <div class="col-md-4 col-lg-3">
        <div class="hoverbox h-md-100"><a class="text-decoration-none" href=<?php echo e(asset("dashboard/video/beach.mp4")); ?>

            data-gallery="attachment-bg"><img class="h-100 w-100 fit-cover"
              src=<?php echo e(asset("dashboard/img/elearning/courses/course7.png")); ?> alt="" /></a>
          <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
              src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
        </div>
      </div>
      <div class="col-md-8 col-lg-9 p-x1">
        <div class="row g-0 h-100">
          <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
            <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-soft-primary"><span
                  class="fas fa-pen-nib me-1" data-fa-transform="shrink-4"></span><span>Writing</span></span><span
                class="badge rounded-pill badge-soft-success"><span class="fas fa-hashtag me-1"
                  data-fa-transform="shrink-4"></span><span>Best Seller</span></span><span
                class="badge rounded-pill badge-soft-warning"><span class="fas fa-award me-1"
                  data-fa-transform="shrink-4"></span><span>Editor’s Choice</span></span>
            </div>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
            <h4 class="mt-3 mt-sm-0 fs-0 fs-lg-1"><a class="text-900"
                href="../../../app/e-learning/course/course-details.html">Character Design Masterclass: Your First
                Supervillain</a></h4>
            <p class="fs--1 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with
              it. In this course, legendary Mr. Finger will explain the process in great details.</p>
            <div class="flex-1 d-flex align-items-end fw-semi-bold fs--1"><span class="me-1 text-900">4.9</span>
              <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star-half-alt text-warning star-icon"></span>
              </div><span class="ms-2 text-secondary">(201,452 reviews)</span>
            </div>
          </div>
          <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
            <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
              <div class="mb-lg-4 mt-auto mt-lg-0">
                <h4 class="mb-1 lh-1 fs-2 text-warning d-flex align-items-end">$99.90
                  <del class="ms-1 fs--1 text-500 mb-1">$139.90</del>
                </h4>
                <p class="mb-0 fs--2 text-800">292,603 Learners Enrolled</p>
              </div>
              <div class="mt-3 d-flex flex-lg-column gap-2">
                <button class="btn btn-md btn-falcon-default hover-danger fs--1 text-600"><span
                    class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to
                    Wishlist</span></button>
                <button class="btn btn-md btn-primary fs--1"><span class="fas fa-cart-plus"></span><span
                    class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
<article class="card mb-3 overflow-hidden">
  <div class="card-body p-0">
    <div class="row g-0">
      <div class="col-md-4 col-lg-3">
        <div class="hoverbox h-md-100"><a class="text-decoration-none" href=<?php echo e(asset("dashboard/video/beach.mp4")); ?>

            data-gallery="attachment-bg"><img class="h-100 w-100 fit-cover"
              src=<?php echo e(asset("dashboard/img/elearning/courses/course8.png")); ?> alt="" /></a>
          <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
              src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
        </div>
      </div>
      <div class="col-md-8 col-lg-9 p-x1">
        <div class="row g-0 h-100">
          <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
            <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-soft-primary"><span
                  class="fas fa-pen-nib me-1" data-fa-transform="shrink-4"></span><span>Writing</span></span><span
                class="badge rounded-pill badge-soft-warning"><span class="fas fa-award me-1"
                  data-fa-transform="shrink-4"></span><span>Editor’s Choice</span></span>
            </div>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
            <h4 class="mt-3 mt-sm-0 fs-0 fs-lg-1"><a class="text-900"
                href="../../../app/e-learning/course/course-details.html">Character Design Masterclass: Your First
                Superhero</a></h4>
            <p class="fs--1 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with
              it. In this course, legendary Mr. Finger will explain the process in great details.</p>
            <div class="flex-1 d-flex align-items-end fw-semi-bold fs--1"><span class="me-1 text-900">4.9</span>
              <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star-half-alt text-warning star-icon"></span>
              </div><span class="ms-2 text-secondary">(80,259 reviews)</span>
            </div>
          </div>
          <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
            <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
              <div class="mb-lg-4 mt-auto mt-lg-0">
                <h4 class="mb-1 lh-1 fs-2 text-warning d-flex align-items-end">$69.99
                  <del class="ms-1 fs--1 text-500 mb-1">$139.90</del>
                </h4>
                <p class="mb-0 fs--2 text-800">90,304 Learners Enrolled</p>
              </div>
              <div class="mt-3 d-flex flex-lg-column gap-2">
                <button class="btn btn-md btn-falcon-default hover-danger fs--1 text-600"><span
                    class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to
                    Wishlist</span></button>
                <button class="btn btn-md btn-primary fs--1"><span class="fas fa-cart-plus"></span><span
                    class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
<article class="card mb-3 overflow-hidden">
  <div class="card-body p-0">
    <div class="row g-0">
      <div class="col-md-4 col-lg-3">
        <div class="hoverbox h-md-100"><a class="text-decoration-none" href=<?php echo e(asset("dashboard/video/beach.mp4")); ?>

            data-gallery="attachment-bg"><img class="h-100 w-100 fit-cover"
              src=<?php echo e(asset("dashboard/img/elearning/courses/course9.png")); ?> alt="" /></a>
          <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-index-1"
              src=<?php echo e(asset("dashboard/img/icons/play.svg")); ?> width="60" alt="" /></div>
        </div>
      </div>
      <div class="col-md-8 col-lg-9 p-x1">
        <div class="row g-0 h-100">
          <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
            <div class="d-flex gap-2 flex-wrap mb-3"><span class="badge rounded-pill badge-soft-primary"><span
                  class="fas fa-pen-nib me-1" data-fa-transform="shrink-4"></span><span>Writing</span></span><span
                class="badge rounded-pill badge-soft-success"><span class="fas fa-crown me-1"
                  data-fa-transform="shrink-4"></span><span>Top Trainer</span></span>
            </div>
            <h5 class="fs-0"><a href="../../../app/e-learning/trainer-profile.html">Bill Finger</a></h5>
            <h4 class="mt-3 mt-sm-0 fs-0 fs-lg-1"><a class="text-900"
                href="../../../app/e-learning/course/course-details.html">Character Design Masterclass: Your First
                Sidekick</a></h4>
            <p class="fs--1 mt-2 d-none d-lg-block">Great Script Writers never avoid cliche moments, rather play with
              it. In this course, legendary Mr. Finger will explain the process in great details.</p>
            <div class="flex-1 d-flex align-items-end fw-semi-bold fs--1"><span class="me-1 text-900">4.9</span>
              <div> <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                  class="fa fa-star-half-alt text-warning star-icon"></span>
              </div><span class="ms-2 text-secondary">(55,699 reviews)</span>
            </div>
          </div>
          <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
            <div class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
              <div class="mb-lg-4 mt-auto mt-lg-0">
                <h4 class="mb-1 lh-1 fs-2 text-warning d-flex align-items-end">$69.99
                  <del class="ms-1 fs--1 text-500 mb-1">$139.90</del>
                </h4>
                <p class="mb-0 fs--2 text-800">66,304 Learners Enrolled</p>
              </div>
              <div class="mt-3 d-flex flex-lg-column gap-2">
                <button class="btn btn-md btn-falcon-default hover-danger fs--1 text-600"><span
                    class="far fa-heart"></span><span class="ms-1 text-600 d-none d-lg-inline">Add to
                    Wishlist</span></button>
                <button class="btn btn-md btn-primary fs--1"><span class="fas fa-cart-plus"></span><span
                    class="ms-1 d-none d-lg-inline">Add to Cart</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
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
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CDMA_MOBILE\Desktop\app\resources\views/dashboard/pages/pick.blade.php ENDPATH**/ ?>