<?php $page="product-details";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title') Product Details @endslot
			@slot('title_1') Full details of a product @endslot
		@endcomponent
        <!-- /add -->
       
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="bar-code-view">
                           {!!  DNS1D::getBarcodeSVG('4445645656', 'PHARMA2T',3,33); !!}
                            <!-- <img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="barcode"> -->
                            <a class="printimg">
                                <img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="print">
                            </a>
                        </div>
                        <div class="productdetails">
                            <ul class="product-bar">
                                <li>
                                    <h4>Product</h4>
                                    <h6>{{$product->product_name}}	</h6>
                                </li>
                                <li>
                                    <h4>Category</h4>
                                    <h6>{{$categorys->category_name}}</h6>
                                </li>
                                <li>
                                    <h4>Sub Category</h4>
                                    <h6>{{ $sub_cate->sub_cate_name }}</h6>
                                </li>
                                <li>
                                    <h4>Brand</h4>
                                    <h6>{{ $brands->brand_name }}</h6>
                                </li>
                                <li>
                                    <h4>Unit</h4>
                                    <h6>{{$product->product_unit}}</h6>
                                </li>
                                <li>
                                    <h4>SKU</h4>
                                    <h6>{{$product->product_SKU}}</h6>
                                </li>
                                <li>
                                    <h4>Minimum Qty</h4>
                                    <h6>{{$product->product_min_qty}}</h6>
                                </li>
                                <li>
                                    <h4>Quantity</h4>
                                    <h6>{{$product->product_qty}}</h6>
                                </li>
                               
                                <li>
                                    <h4>Price</h4>
                                    <h6>{{$product->product_price}}</h6>
                                </li>
                                
                                <li>
                                    <h4>Description</h4>
                                    <h6>{{ $product->product_desc}}</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="slider-product-details">
                            <div class="owl-carousel owl-theme product-slide">
                                <div class="slider-product">
                                <img src="{{ URL::asset('storage/product_img/'.$product->product_img)}}" alt="img">

                                    <h4>{{$product->product_img}}</h4>
                                    <!-- <h6>581kb</h6> -->
                                </div>
                                <div class="slider-product">
                                    <img src="{{ URL::asset('/assets/img/product/product69.jpg')}}" alt="img">
                                    <h4>macbookpro.jpg</h4>
                                    <!-- <h6>581kb</h6> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <!-- /add -->
    </div>
</div>
@endsection