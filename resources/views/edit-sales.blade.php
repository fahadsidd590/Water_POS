<?php $page="edit-sales";?>
@extends('layout.mainlayout')
@section('content')	
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title') Edit Sale @endslot
			@slot('title_1') Edit your sale details @endslot
		@endcomponent
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="row">
                                <div class="col-lg-10 col-sm-10 col-10">
                                    <select class="select">
                                        <option>walk-in-customer</option>
                                        <option>Customer Name</option>
                                    </select>
                                </div>
                                <!-- <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                    <div class="add-icon">
                                        <span><img src="{{ URL::asset('/assets/img/icons/plus1.svg')}}" alt="img"></span>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-groupicon">
                                <input type="text"  class="datetimepicker" value="10-02-2022">
                                <div class="addonset">
                                    <img src="{{ URL::asset('/assets/img/icons/calendars.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>                  
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Product Name</label>
                            <div class="input-groupicon">
                                <input type="text" placeholder="Please type product code and select...">
                                <div class="addonset">
                                    <img src="{{ URL::asset('/assets/img/icons/scanner.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive mb-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>QTY</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Tax</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="productimgname">
                                        <a class="product-img">
                                            <img src="{{ URL::asset('/assets/img/product/product7.jpg')}}" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Apple Earpods</a>
                                    </td>
                                    <td>1.00</td>
                                    <td>15000.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>1500.00</td>
                                    <td>
                                        <a href="javascript:void(0);" class="delete-set"><img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="svg"></a>
                                    </td>
                                </tr>
                                <tr >
                                    <td>2</td>
                                    <td class="productimgname">
                                        <a class="product-img">
                                            <img src="{{ URL::asset('/assets/img/product/product8.jpg')}}" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">iPhone 11</a>
                                    </td>
                                    <td>1.00</td>
                                    <td>1500.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>1500.00</td>
                                    <td>
                                        <a href="javascript:void(0);" class="delete-set"><img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="svg"></a>
                                    </td>
                                </tr>
                                <tr >
                                    <td>2</td>
                                    <td class="productimgname">
                                        <a class="product-img">
                                            <img src="{{ URL::asset('/assets/img/product/product1.jpg')}}" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Macbook pro</a>
                                    </td>
                                    <td>1.00</td>
                                    <td>1500.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>1500.00</td>
                                    <td>
                                        <a href="javascript:void(0);" class="delete-set"><img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="svg"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>paid amount</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="select">
                                <option>Choose Status</option>
                                <option>Completed</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                     
                        <div class="col-lg-6 ">
                            <div class="total-order w-100 max-widthauto m-auto mb-4">
                                <ul>
                                    
                                    <li class="total">
                                        <h4>Grand Total</h4>
                                        <h5>$ 1750.00</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                        <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection