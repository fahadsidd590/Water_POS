<?php $page="customerlist";?>
@extends('layout.mainlayout')
@section('content')	
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title') Customer List @endslot
			@slot('title_1') Manage your Customers @endslot
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
                                    <input type="text" placeholder="Enter Customer Code">
                                </div>	
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Customer Name">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12  ms-auto">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img src="{{ URL::asset('/assets/img/icons/search-whites.svg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Filter -->
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Customer Name</th>
                                <th>code</th>
                                <th>Customer</th>
                                <th>Phone</th>
                                <th>email</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($customer as $customer1)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ URL::asset('/assets/img/customer/customer1.jpg')}}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">{{$customer1->Name}}</a>
                                </td>
                                <td>{{$customer1->id}}</td>
                                <td>{{$customer1->Name}}</td>
                                <td>{{$customer1->Phone}} </td>
                                <td>{{$customer1->Email}}</td>
                                <td>{{$customer1->Country}}</td>
                                <td>
                                        
                                    <a class="me-3" href="{{route('editsupplier',[$customer1->id])}}">
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
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
                                    <a href="javascript:void(0);" class="product-imgs">
                                        WC
                                    </a>
                                    <a href="javascript:void(0);">James Stawberry</a>
                                </td>
                                <td>681</td>
                                <td>Fred john</td>
                                <td>123-456-888</td>
                                <td>john@example.com</td>
                                <td>Albania</td>

                                <td>
                                        
                                    <a class="me-3" href="{{url('editcustomer')}}">
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
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