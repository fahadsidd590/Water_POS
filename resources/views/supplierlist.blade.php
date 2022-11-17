<?php $page="supplierlist";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title') Supplier List @endslot
			@slot('title_1') Manage your Supplier @endslot
		@endcomponent


        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <!-- /product list -->
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
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ URL::asset('/assets/img/icons/pdf.svg')}}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ URL::asset('/assets/img/icons/excel.svg')}}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Filter -->
                <div class="card" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Supplier Code">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Supplier">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img src="{{ URL::asset('/assets/img/icons/search-whites.svg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Filter -->
                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Supplier Name</th>
                                <th>code</th>
                                <th>Phone</th>
                                <th>email</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($supplier as $supplier1)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ URL::asset('/assets/img/product/noimage.png')}}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">{{$supplier1->Name}}</a>
                                </td>
                                <td>{{$supplier1->id}}</td>
                                <td>{{$supplier1->Name}}</td>
                                <td>{{$supplier1->Phone}} </td>
                                <td>{{$supplier1->Email}}</td>
                                <td>{{$supplier1->Country}}</td>
                                <td>
                                        
                                    <a class="me-3" href="{{route('editsupplier',[$supplier1->id])}}">
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            @endforeach
             
                           
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /product list -->
    </div>
</div>
@component('components.modal-popup')                
@endcomponent
@endsection