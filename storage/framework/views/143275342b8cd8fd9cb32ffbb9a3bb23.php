<?php $__env->startSection('title'); ?>
<title>FRMPAS - Tableau de bord</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="card-body d-flex">
        <div>
            <img class="rounded" src="<?php echo e($me->image); ?>" alt="" width="100">
        </div>
        <div class="ps-3">
            <h3 class="text-primary">Bonjour </h3>
            <span class="lead d-block"><?php echo e($me->nom . ' ' . $me->prenom); ?></span>
            <span><?php echo e($me->email); ?></span>
        </div>
    </div>
</div>
<div class="row g-3 mb-3">
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-body">
                <div class="row h-100 justify-content-between g-0">
                    <div class="col-5 col-sm-6 col-xxl pe-2">
                        <h6 class="mt-1">Niveaux</h6>
                        <div class="row fs--2 mt-3">
                            <div class="col-6">
                                <div class="d-flex flex-between-center mb-1">
                                    <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span
                                            class="fw-semi-bold">Niveau 1 (<?php echo e($countNiveau1Plongeur); ?>)</span></div>
                                    <div class="d-xxl-none"><?php echo e($countNiveau1Plongeur); ?></div>
                                    <input id="countNiveau1Plongeur" hidden="true" value="<?php echo e($countNiveau1Plongeur); ?>">
                                </div>
                                <div class="d-flex flex-between-center mb-1">
                                    <div class="d-flex align-items-center"><span class="dot bg-info"></span><span
                                            class="fw-semi-bold">Niveau 2 (<?php echo e($countNiveau2Plongeur); ?>)</span></div>
                                    <div class="d-xxl-none"><?php echo e($countNiveau2Plongeur); ?></div>
                                    <input id="countNiveau2Plongeur" hidden="true" value="<?php echo e($countNiveau2Plongeur); ?>">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="d-flex flex-between-center mb-1">
                                    <div class="d-flex align-items-center"><span class="dot bg-400"></span><span
                                            class="fw-semi-bold">Niveau 3 (<?php echo e($countNiveau3Plongeur); ?>)</span></div>
                                    <div class="d-xxl-none"><?php echo e($countNiveau3Plongeur); ?></div>
                                    <input id="countNiveau3Plongeur" hidden="true" value="<?php echo e($countNiveau3Plongeur); ?>">
                                </div>
                                <div class="d-flex flex-between-center mb-1">
                                    <div class="d-flex align-items-center"><span class="dot bg-success"></span><span
                                            class="fw-semi-bold">Niveau 4 (<?php echo e($countNiveau4Plongeur); ?>)</span></div>
                                    <div class="d-xxl-none"><?php echo e($countNiveau4Plongeur); ?></div>
                                    <input id="countNiveau4Plongeur" hidden="true" value="<?php echo e($countNiveau4Plongeur); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-body d-flex flex-column justify-content-end">
                <h6 class="mb-0 mt-2">Total de plongeurs</h6>
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1">
                            <?php echo e($countEnfantPlongeur +$countFemmePlongeur+$countHommePlongeur); ?></div>

                    </div>
                    <div class="col-auto ps-0 mt-n4">
                        <div class="echart-default-total-order"
                            data-echarts="{&quot;tooltip&quot;:{&quot;trigger&quot;:&quot;axis&quot;,&quot;formatter&quot;:&quot;{b0} : {c0}&quot;},&quot;xAxis&quot;:{&quot;data&quot;:[&quot;Week 4&quot;,&quot;Week 5&quot;,&quot;Week 6&quot;,&quot;Week 7&quot;]},&quot;series&quot;:[{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:[20,40,100,120],&quot;smooth&quot;:true,&quot;lineStyle&quot;:{&quot;width&quot;:3}}],&quot;grid&quot;:{&quot;bottom&quot;:&quot;2%&quot;,&quot;top&quot;:&quot;2%&quot;,&quot;right&quot;:&quot;10px&quot;,&quot;left&quot;:&quot;10px&quot;}}"
                            data-echart-responsive="true" style="user-select: none; position: relative;"
                            _echarts_instance_="ec_1687540493040">
                            <div
                                style="position: relative; width: 138px; height: 90px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;">
                                <canvas
                                    style="position: absolute; left: 0px; top: 0px; width: 138px; height: 90px; user-select: none; padding: 0px; margin: 0px; border-width: 0px;"
                                    data-zr-dom-id="zr_0" width="138" height="90"></canvas>
                            </div>
                            <div class=""
                                style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; background-color: rgb(249, 250, 253); border-width: 1px; border-radius: 4px; color: rgb(11, 23, 39); font: 14px / 21px Microsoft YaHei; padding: 7px 10px; top: 0px; left: 0px; transform: translate3d(-38px, 26px, 0px); border-color: rgb(216, 226, 239); pointer-events: none; visibility: hidden; opacity: 0;">
                                Week 4 : 20</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-body">
                <div class="row h-100 justify-content-between g-0">
                    <div class="col-5 col-sm-6 col-xxl pe-2">
                        <h6 class="mt-1">Genre plongeur</h6>
                        <div class="fs--2 mt-3">
                            <div class="d-flex flex-between-center mb-1">
                                <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span
                                        class="fw-semi-bold">Homme (<?php echo e($countHommePlongeur); ?>)</span></div>
                                <div class="d-xxl-none"><?php echo e($countHommePlongeur); ?></div>
                                <input id="countHommePlongeur" hidden="true" value="<?php echo e($countHommePlongeur); ?>">
                            </div>
                            <div class="d-flex flex-between-center mb-1">
                                <div class="d-flex align-items-center"><span class="dot bg-info"></span><span
                                        class="fw-semi-bold">Femme (<?php echo e($countFemmePlongeur); ?>)</span></div>
                                <div class="d-xxl-none"><?php echo e($countFemmePlongeur); ?></div>
                                <input id="countFemmePlongeur" hidden="true" value="<?php echo e($countFemmePlongeur); ?>">
                            </div>
                            <div class="d-flex flex-between-center mb-1">
                                <div class="d-flex align-items-center"><span class="dot bg-300"></span><span
                                        class="fw-semi-bold">Enfant (<?php echo e($countEnfantPlongeur); ?>)</span></div>
                                <div class="d-xxl-none"><?php echo e($countEnfantPlongeur); ?></div>
                                <input id="countEnfantPlongeur" hidden="true" value="<?php echo e($countEnfantPlongeur); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-auto position-relative">
                        <div class="echart-market-share" style="user-select: none; position: relative;"
                            _echarts_instance_="ec_1687540493036">
                            <div
                                style="position: relative; width: 106px; height: 106px; padding: 0px; margin: 0px; border-width: 0px;">
                                <canvas
                                    style="position: absolute; left: 0px; top: 0px; width: 106px; height: 106px; user-select: none; padding: 0px; margin: 0px; border-width: 0px;"
                                    data-zr-dom-id="zr_0" width="106" height="106"></canvas>
                            </div>
                            <div class=""></div>
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">
                            <?php echo e($countEnfantPlongeur +$countFemmePlongeur+$countHommePlongeur); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-header d-flex flex-between-center pb-0">
                <h6 class="mb-0">Météo</h6>
            </div>
            <div class="card-body pt-2">
                <div class="row g-0 h-100 align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center"><img class="me-3"
                                src=<?php echo e(asset("dashboard/img/icons/weather-icon.png")); ?> alt="" height="60">
                            <div>
                                <h6 class="mb-2">Casablanca</h6>
                                <div class="fs--2 fw-semi-bold">
                                    <div class="text-warning">Ensoleillée</div>Precipitation: 50%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto text-center ps-2">
                        <div class="fs-4 fw-normal font-sans-serif text-primary mb-1 lh-1">31°</div>
                        <div class="fs--1 text-800">32° / 25°</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 mb-3">
    <div class="col-md-8 col-xxl-8">
        <div class="card">
            <div class="card-header bg-body-tertiary">
                <h5 class="mb-0">Méthode de paiement</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-check mb-0"><input class="form-check-input" type="radio" value="" id="credit-card"
                            checked="checked" name="payment-method"><label class="form-check-label mb-2 fs-2"
                            for="credit-card">Credit Card</label></div>
                    <div class="row gx-0 ps-2 mb-4">
                        <div class="col-sm-8 px-3">
                            <div class="mb-3"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0"
                                    for="inputNumber">Numéro de carte</label><input class="form-control"
                                    id="inputNumber" type="text" placeholder="•••• •••• •••• ••••"></div>
                            <div class="row align-items-center">
                                <div class="col-6"><label
                                        class="form-label ls text-uppercase text-600 fw-semi-bold mb-0">Date
                                        d'expiration</label><input class="form-control" type="text"
                                        placeholder="mm/yyyy"></div>
                                <div class="col-6"><label
                                        class="form-label ls text-uppercase text-600 fw-semi-bold mb-0">CVV<a
                                            class="d-inline-block" href="#" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Card verification value"
                                            data-bs-original-title="Card verification value"><svg
                                                class="svg-inline--fa fa-question-circle fa-w-16 ms-2"
                                                aria-hidden="true" focusable="false" data-prefix="fa"
                                                data-icon="question-circle" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z">
                                                </path>
                                            </svg>
                                            <!-- <span class="fa fa-question-circle ms-2"></span> Font Awesome fontawesome.com --></a></label><input
                                        class="form-control" type="text" placeholder="123" maxlength="3"
                                        pattern="[0-9]{3}">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 ps-3 text-center pt-2 d-none d-sm-block">
                            <div class="rounded-1 p-2 mt-3 bg-100">
                                <div class="text-uppercase fs-11 fw-bold">On accepte</div><img
                                    src=<?php echo e(asset("dashboard/img/icons/icon-payment-methods-grid.png")); ?> alt=""
                                    width="120">
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom border-dashed my-5"></div>
                    <div class="row">
                        <div class="col-md-7 col-xl-12 col-xxl-7 px-md-3 mb-xxl-0 position-relative">
                            <div class="d-flex"><img class="me-3" src=<?php echo e(asset("dashboard/img/icons/shield.png")); ?>

                                    alt="" width="60" height="60">
                                <div class="flex-1">
                                    <h5 class="mb-2">Protection des achats</h5>
                                    <div class="form-check mb-0"><input class="form-check-input"
                                            id="protection-option-1" type="checkbox" checked="checked"><label
                                            class="form-check-label mb-0" for="protection-option-1">
                                            Remboursement complet Si vous ne recevez pas votre commande</label>
                                    </div>
                                    <div class="form-check"><input class="form-check-input" id="protection-option-2"
                                            type="checkbox" checked="checked"><label class="form-check-label mb-0"
                                            for="protection-option-2">Remboursement total ou partiel, si le produit
                                            n’est pas tel que décrit dans les détails</label></div>
                                </div>
                            </div>
                            <div class="vertical-line d-none d-md-block d-xl-none d-xxl-block"> </div>
                        </div>
                        <div
                            class="col-md-5 col-xl-12 col-xxl-5 ps-lg-4 ps-xl-2 ps-xxl-5 text-center text-md-start text-xl-center text-xxl-start">
                            <div class="border-bottom border-dashed d-block d-md-none d-xl-block d-xxl-none my-4"></div>
                            <div class="fs-2 fw-semi-bold">Tout Total: <span class="text-primary">200 DH</span></div>
                            <button class="btn btn-success mt-3 px-5" type="submit">Confirmer et payer</button>
                            <p class="fs-10 mt-3 mb-0">En cliquant sur le bouton Confirmer et payer, vous acceptez les
                                conditions générales</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4 order-xl-1">
        <div class="card">
            <div class="card-header bg-body-tertiary d-flex flex-between-center">
                <h5 class="mb-0">Récapitulatif de commande</h5><a class="btn btn-falcon-default btn-sm text-600"
                    href="../../app/e-commerce/shopping-cart.html"><svg class="svg-inline--fa fa-pencil-alt fa-w-16"
                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pencil-alt" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z">
                        </path>
                    </svg><!-- <span class="fas fa-pencil-alt"></span> Font Awesome fontawesome.com --></a>
            </div>
            <div class="card-body">
                <table class="table table-borderless fs-10 mb-0">
                    <tbody>
                        <tr class="border-bottom">
                            <th class="ps-0 pt-0">Pick<div class="text-400 fw-normal fs-11">
                                    LES ACCIDENTS MECANIQUES ou LES ACCIDENTS BAROTRAUMATIQUES et LE FROID</div>
                            </th>
                            <th class="pe-0 text-end pt-0">200 DH</th>
                        </tr>
                        
                        <tr>
                            <th class="ps-0 pb-0">Total</th>
                            <th class="pe-0 text-end pb-0">200 DH</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex justify-content-between bg-body-tertiary">
                <div class="fw-semi-bold">Total à payer</div>
                <div class="fw-bold">200 DH</div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CDMA_MOBILE\Desktop\app\resources\views/dashboard/pages/home.blade.php ENDPATH**/ ?>