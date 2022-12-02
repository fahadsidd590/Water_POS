<?php $page = "add-sales"; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')
        @slot('title') Add Sale @endslot
        @slot('title_1') Add your new sale @endslot
        @endcomponent
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('addcustomeronsales')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Customer Name</label>
                                                <input type="text" name="customer_name">

                                                <div class="text-danger pt-2">
                                                    @error('0')
                                                    {{$customer_name}}
                                                    @enderror
                                                    @error('customer_name')
                                                    {{$message}}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="customer_email">
                                                <div class="text-danger pt-2">
                                                    @error('0')
                                                    {{$customer_email}}
                                                    @enderror
                                                    @error('customer_email')
                                                    {{$message}}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="customer_phone">
                                                <div class="text-danger pt-2">
                                                    @error('0')
                                                    {{$customer_phone}}
                                                    @enderror
                                                    @error('customer_phone')
                                                    {{$message}}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Choose Country</label>
                                                <select class="select" name="country">
                                                    <option>Choose Country</option>
                                                    <option value="India">India</option>
                                                    <option value="USA">USA</option>
                                                    <option value="pakistan">pakistan</option>
                                                    <option value="UAE">UAE</option>

                                                </select>
                                                <div class="text-danger pt-2">
                                                    @error('0')
                                                    {{$country}}
                                                    @enderror
                                                    @error('country')
                                                    {{$message}}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="customer_city">
                                                <div class="text-danger pt-2">
                                                    @error('0')
                                                    {{$customer_city}}
                                                    @enderror
                                                    @error('customer_city')
                                                    {{$message}}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="customer_address">
                                                <div class="text-danger pt-2">
                                                    @error('0')
                                                    {{$customer_address}}
                                                    @enderror
                                                    @error('customer_address')
                                                    {{$message}}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description"></textarea>
                                                <div class="text-danger pt-2">
                                                    @error('0')
                                                    {{$description}}
                                                    @enderror
                                                    @error('description')
                                                    {{$message}}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn btn-submit me-2" type="submit">Submit</button>
                                            <!-- <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a> -->
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{route('addsales')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Customer</label>
                                <div class="row">
                                    <div class="col-lg-9 col-sm-9 col-9">
                                        <!-- <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select> -->
                                        <select class="select" name="customer">
                                            <option>Choose</option>
                                            @foreach ($customer as $customer1)
                                            <option value="{{$customer1->id}}">{{$customer1->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 col-3 ps-0">
                                        <button class="btn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <div class="add-icon">
                                                <span><img src="{{ URL::asset('/assets/img/icons/plus1.svg')}}" alt="img"></span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Date</label>
                                <div class="input-groupicon">
                                    <input type="text" placeholder="Choose Date" name="orderdate" class="datetimepicker">
                                    <a class="addonset">
                                        <img src="{{ URL::asset('/assets/img/icons/calendars.svg')}}" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <div class="input-groupicon">
                                    <select onChange="addproducttocart()" id="productlist" class="form-select form-select-sm" name="productName" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($product as $product1)
                                        <option value="{{$product1->product_id}}">{{$product1->product_name}}</option>
                                        @endforeach
                                    </select>
                                    <!-- <input type="text" placeholder="Please type product code and select...">
                                <div class="addonset">
                                    <img src="{{ URL::asset('/assets/img/icons/scanners.svg')}}" alt="img">
                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive mb-3">
                            <table class="table" id="producttable1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>QTY</th>
                                        <th>Price</th>
                                        <th>Subtotal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="producttable">
                                    <!-- <tr>
                                    <td>1</td>
                                    <td class="productimgname">
                                        <a class="product-img">
                                            <img src="{{ URL::asset('/assets/img/product/product7.jpg')}}" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Apple Earpods</a>
                                    </td>
                                    <td><input onclick="" onblur="" readonly type="number" name="quantity[]" class="form-control"></td>
                                    <td> <input onclick="" readonly type="number" class="form-control" name="Amount[]"></td>
                                    <td>1500.00</td>
                                    <td>
                                        <a href="javascript:void(0);" class="delete-set"><img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="svg"></a>
                                    </td>
                                </tr> -->


                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Paid amount</label>
                                <input type="number" name="paidamount" class="form-control">
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Discount</label>
                            <input type="text" >
                        </div>
                    </div> -->
                        <!-- <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Shipping</label>
                            <input type="text" >
                        </div>
                    </div> -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="select" name="status">
                                    <option>Choose Status</option>
                                    <option>Completed</option>
                                    <option>Inprogress</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-lg-6 ">
                            <div class="total-order w-100 max-widthauto m-auto mb-4">
                                <ul>
                                    <li>
                                        <h4>Order Tax</h4>
                                        <h5>$ 0.00 (0.00%)</h5>
                                    </li>
                                    <li>
                                        <h4>Discount	</h4>
                                        <h5>$ 0.00</h5>
                                    </li>	
                                </ul>
                            </div>
                        </div> -->
                            <div class="col-lg-6 ">
                                <div class="total-order w-100 max-widthauto m-auto mb-4">
                                    <ul>
                                        <!-- <li>
                                        <h4>Shipping</h4>
                                        <h5>$ 0.00</h5>
                                    </li> -->
                                        <li class="total">
                                            <h4>Grand Total</h4>
                                            <input type="number" readonly name="totalamount" id="totalamount">
                                            <!-- // <h5 id="totalamount">RS: 0.00</h5> -->
                                            <!-- <input type="hidden"  /> -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection