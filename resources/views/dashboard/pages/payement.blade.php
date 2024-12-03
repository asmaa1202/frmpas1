@extends('dashboard.layout.master')

@section('title')
<title>FRMPAS - Payement</title>
@endsection

@section('content')
<div class="card mb-3">
  <div class="bg-holder d-none d-lg-block bg-card"
    style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/corner-4.png') }});">
  </div>
  <!--/.bg-holder-->

  <div class="card-body position-relative">
    <div class="row">
      <div class="col-lg-8">
        <h3>Payement</h3>
        <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
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
              checked="checked" name="payment-method"><label class="form-check-label mb-2 fs-2" for="credit-card">Credit
              Card</label></div>
          <div class="row gx-0 ps-2 mb-4">
            <div class="col-sm-8 px-3">
              <div class="mb-3"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0"
                  for="inputNumber">Numéro de carte</label><input class="form-control" id="inputNumber" type="text"
                  placeholder="•••• •••• •••• ••••"></div>
              <div class="row align-items-center">
                <div class="col-6"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0">Date
                    d'expiration</label><input class="form-control" type="text" placeholder="mm/yyyy"></div>
                <div class="col-6"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0">CVV<a
                      class="d-inline-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                      aria-label="Card verification value" data-bs-original-title="Card verification value"><svg
                        class="svg-inline--fa fa-question-circle fa-w-16 ms-2" aria-hidden="true" focusable="false"
                        data-prefix="fa" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                          d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z">
                        </path>
                      </svg>
                      <!-- <span class="fa fa-question-circle ms-2"></span> Font Awesome fontawesome.com --></a></label><input
                    class="form-control" type="text" placeholder="123" maxlength="3" pattern="[0-9]{3}">
                </div>
              </div>
            </div>
            <div class="col-4 ps-3 text-center pt-2 d-none d-sm-block">
              <div class="rounded-1 p-2 mt-3 bg-100">
                <div class="text-uppercase fs-11 fw-bold">On accepte</div><img
                  src={{ asset("dashboard/img/icons/icon-payment-methods-grid.png")}} alt="" width="120">
              </div>
            </div>
          </div>
          <div class="border-bottom border-dashed my-5"></div>
          <div class="row">
            <div class="col-md-7 col-xl-12 col-xxl-7 px-md-3 mb-xxl-0 position-relative">
              <div class="d-flex"><img class="me-3" src={{ asset("dashboard/img/icons/shield.png")}} alt="" width="60"
                  height="60">
                <div class="flex-1">
                  <h5 class="mb-2">Protection des achats</h5>
                  <div class="form-check mb-0"><input class="form-check-input" id="protection-option-1" type="checkbox"
                      checked="checked"><label class="form-check-label mb-0" for="protection-option-1">
                      Remboursement complet Si vous ne recevez pas votre commande</label>
                  </div>
                  <div class="form-check"><input class="form-check-input" id="protection-option-2" type="checkbox"
                      checked="checked"><label class="form-check-label mb-0" for="protection-option-2">Remboursement
                      total ou partiel, si le produit
                      n’est pas tel que décrit dans les détails</label></div>
                </div>
              </div>
              <div class="vertical-line d-none d-md-block d-xl-none d-xxl-block"> </div>
            </div>
            <div
              class="col-md-5 col-xl-12 col-xxl-5 ps-lg-4 ps-xl-2 ps-xxl-5 text-center text-md-start text-xl-center text-xxl-start">
              <div class="border-bottom border-dashed d-block d-md-none d-xl-block d-xxl-none my-4"></div>
              <div class="fs-2 fw-semi-bold">Tout Total: <span class="text-primary">400 DH</span></div>
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
        <h5 class="mb-0">Récapitulatif de commande</h5>
      </div>
      <div class="card-body">
        <table class="table table-borderless fs-10 mb-0">
          <tbody>
            <tr class="border-bottom">
              <th class="ps-0 pt-0">Pick<div class="text-400 fw-normal fs-11">
                  CMAS POOL FREEDIVER</div>
              </th>
              <th class="pe-0 text-end pt-0">200 DH</th>
            </tr>
            <tr class="border-bottom">
              <th class="ps-0">Pick<div class="text-400 fw-normal fs-11">Comic Page
                  Layout: Analysing The Classics</div>
              </th>
              <th class="pe-0 text-end">200 DH</th>
            </tr>
            <tr>
              <th class="ps-0 pb-0">Total</th>
              <th class="pe-0 text-end pb-0">400 DH</th>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer d-flex justify-content-between bg-body-tertiary">
        <div class="fw-semi-bold">Total à payer</div>
        <div class="fw-bold">400 DH</div>
      </div>
    </div>
  </div>
</div>
@endsection