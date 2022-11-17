<?php $page="productlist";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title') Product List @endslot
			@slot('title_1') Manage your products @endslot
		@endcomponent
        <!-- /product list -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="{{ URL::asset('/assets/img/icons/filter.svg')}}" alt="img">
                                <span><img src="{{ URL::asset('/assets/img/icons/closes.svg')}}" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="{{ URL::asset('/assets/img/icons/search-white.svg')}}" alt="img"></a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" href="{{  URL::to('product_export_pdf') }}" data-bs-placement="top" title="pdf"><img src="{{ URL::asset('/assets/img/icons/pdf.svg')}}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" href="{{ route('product.export') }}" data-bs-placement="top" title="excel"><img src="{{ URL::asset('/assets/img/icons/excel.svg')}}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Filter -->
                <div class="card mb-0" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Product</option>
                                                <option>Macbook pro</option>
                                                <option>Orange</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Category</option>
                                                <option>Computers</option>
                                                <option>Fruits</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Sub Category</option>
                                                <option>Computer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Brand</option>
                                                <option>N/D</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12 ">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Price</option>
                                                <option>150.00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-sm-6 col-12">
                                        <div class="form-group">
                                            <a class="btn btn-filters ms-auto"><img src="{{ URL::asset('/assets/img/icons/search-whites.svg')}}" alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Filter -->
                <div class="table-responsive">
                    <table class="table  datanew" id="producttble">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Product Name</th>
                                <th>SKU</th>
                                <th>Category </th>
                                <th>Brand</th>
                                <th>price</th>
                                <th>Unit</th>
                                <th>Qty</th>
                                <th>Created By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ asset('storage/product_img/'.$product->product_img)}}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">{{$product->product_name}}</a>
                                </td>
                                <td>{{$product->product_SKU}}</td>
                                <td>{{$product->category_name}}</td>
                                <td>{{$product->brand_name}}</td>
                                <td>{{$product->brand_name}}</td>
                                <td>{{$product->product_unit}}</td>
                                <td>{{$product->product_qty}}</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{route('productdetail',[$product->product_id])}}">
                                        <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{route('editproduct',[$product->product_id])}}">
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    <!-- <a class=" product_del_btn"  data-id="{{ $product->product_id }}">
                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                    </a> -->
                                    <a class=" product_del_btn"  data-id="{{ $product->product_id }}" >
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            @endforeach
<!--                       
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ URL::asset('/assets/img/product/product17.jpg')}}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Limon</a>
                                </td>
                                <td>PT0011</td>
                                <td>Health Care	</td>
                                <td>N/D</td>
                                <td>10.00</td>
                                <td>kg</td>
                                <td>100.00</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{url('product-details')}}">
                                        <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{url('editproduct')}}">
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                    </a>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /product list -->
    </div>
</div>
@endsection