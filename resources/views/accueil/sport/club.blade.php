@extends('layout.master')

@section('custom-css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
#box_wrapper > section, #box_wrapper > div > section {
    overflow: visible !important;
}
</style>
@endsection
@section('custom-js')

@endsection

@section('content')

<section class="page_title ds s-parallax s-overlay s-pt-160 s-pb-80">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h1>clubs</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="./">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Sport</a>
                    </li>
                    <li class="breadcrumb-item active">
                        clubs
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>


{{-- <section class="woocommerce-order-details container">
    <p class="text-center text-md-left color-darkgrey mb-1">
        <span class="line-left">Club du sport</span>
    </p>
    <h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
        <span>Club du sport</span>
    </h3>
    
    <h6 class="text-success"># Casablanca-Settat</h6>
    
    <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

        <thead>
            <tr>
                <th class="woocommerce-table__product-name product-name">Club</th>
                <th class="woocommerce-table__product-table product-total">Président</th>
                <th class="woocommerce-table__product-table product-total">Ville</th>
                <th class="woocommerce-table__product-table product-total">Contact</th>
                <th class="woocommerce-table__product-table product-total">Contact</th>
            </tr>
        </thead>

        <tbody>
            @foreach($clubs as $club)
                <tr class="woocommerce-table__line-item order_item">

                    <td class="woocommerce-table__product-name product-name">
                        <a href="shop-product-right.html">{{ $club->nom  ?? '--'}}</a></strong>
                    </td>
                    <td class="woocommerce-table__product-name product-name">
                        <a href="shop-product-right.html">{{ $club->ville  ?? '--'}}</a></strong>
                    </td> 
                    <td class="woocommerce-table__product-name product-name">
                        <a href="shop-product-right.html">{{ $club->president  ?? '--'}}</a></strong>
                    </td>
                    <td class="woocommerce-table__product-name product-name">
                        <a href="shop-product-right.html">{{ $club->email ?? '--' }}</a></strong>
                    </td>
                    <td class="woocommerce-table__product-name product-name">
                        @if($club->is_federal)
                        <a href="shop-product-right.html">
                            <i class="bi bi-check-circle-fill text-success"></i> Fédéral
                        </a>
                        @else
                            --
                        @endif
                    </td>
                </tr>
           
            @endforeach

        </tbody>

    </table>
   

    <h6 class="text-success"># Rabat-Salé-Kénitra</h6>
    <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

        <thead>
            <tr>
                <th class="woocommerce-table__product-name product-name">Club</th>
                <th class="woocommerce-table__product-table product-total">Président</th>
                <th class="woocommerce-table__product-table product-total">Region</th>
                <th class="woocommerce-table__product-table product-total">Contact</th>
            </tr>
        </thead>

        <tbody>
            <tr class="woocommerce-table__line-item order_item">

                <td class="woocommerce-table__product-name product-name">
                    <a href="shop-product-right.html">XXXXXXXXXX</a></strong>
                </td>
                <td class="woocommerce-table__product-name product-name">
                    <a href="shop-product-right.html">XXXXXXXXXX</a></strong>
                </td> 
                <td class="woocommerce-table__product-name product-name">
                    <a href="shop-product-right.html">XXXXXXXXXX</a></strong>
                </td>
                
            </tr>
           
        </tbody>


    </table>


    <h6 class="text-success"># Marrakech-Safi</h6>
    <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

        <thead>
            <tr>
                <th class="woocommerce-table__product-name product-name">Club</th>
                <th class="woocommerce-table__product-table product-total">Président</th>
                <th class="woocommerce-table__product-table product-total">Region</th>
                <th class="woocommerce-table__product-table product-total">Contact</th>
            </tr>
        </thead>

        <tbody>
            <tr class="woocommerce-table__line-item order_item">

                <td class="woocommerce-table__product-name product-name">
                    <a href="shop-product-right.html">XXXXXXXXXX</a></strong>
                </td>
                <td class="woocommerce-table__product-name product-name">
                    <a href="shop-product-right.html">XXXXXXXXXX</a></strong>
                </td> 
                <td class="woocommerce-table__product-name product-name">
                    <a href="shop-product-right.html">XXXXXXXXXX</a></strong>
                </td>
                
            </tr>
           
        </tbody>


    </table>
</section> --}}


<section class="woocommerce-order-details container">
    <p class="text-center text-md-left color-darkgrey mb-1">
        <span class="line-left">Club du sport</span>
    </p>
    <h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
        <span>Club du sport</span>
    </h3>
    
    @foreach($clubsByRegion as $region => $clubs)
        <h6 class="text-success"># {{ $region }}</h6>
        <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
            <thead>
                <tr>
                    <th class="woocommerce-table__product-name product-name">Club</th>
                    <th class="woocommerce-table__product-table product-total">Président</th>
                    <th class="woocommerce-table__product-table product-total">Ville</th>
                    <th class="woocommerce-table__product-table product-total">Contact</th>
                    <th class="woocommerce-table__product-table product-total">Est_Federal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clubs as $club)
                    <tr class="woocommerce-table__line-item order_item">
                        <td class="woocommerce-table__product-name product-name">
                            <a href="#">{{ $club->nom ?? '--' }}</a>
                        </td>
                        <td class="woocommerce-table__product-name product-name">
                            {{ $club->president ?? '--' }}
                        </td>
                        <td class="woocommerce-table__product-name product-name">
                            {{ $club->ville ?? '--' }}
                        </td>
                        <td class="woocommerce-table__product-name product-name">
                            <a href="mailto:{{ $club->email ?? '' }}">{{ $club->email ?? '--' }}</a>
                        </td>
                        <td class="woocommerce-table__product-name product-name">
                            @if($club->is_federal)
                                <i class="bi bi-check-circle-fill text-success"></i> Fédéral
                            @else
                                --
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
</section>

<div class="divider-40 divider-xl-50"></div>


@endsection
