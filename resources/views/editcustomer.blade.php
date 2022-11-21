<?php $page = "editcustomer"; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')
        @slot('title') Edit Customer Management @endslot
        @slot('title_1') Edit/Update Customer @endslot
        @endcomponent
        <!-- /add -->
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <form action="{{route('editcustomer2',[$customer->id])}}" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Customer Name</label>
                                <input type="text" name="name" value="{{$customer->Name}}">
                                <div class="text-danger pt-2">
                                    @if ($errors->has('name'))
                                    <span class="errormsg">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="{{$customer->Email}}">
                                <div class="text-danger pt-2">
                                    @if ($errors->has('email'))
                                    <span class="errormsg">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{$customer->Phone}} ">
                                <div class="text-danger pt-2">
                                    @if ($errors->has('phone'))
                                    <span class="errormsg">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Choose Country</label>
                                <select class="select" name="country">
                                    <option value="{{$customer->Country}}">{{$customer->Country}}</option>
                                    <option value="USA">United States</option>
                                    <option VALUE="iNDIA"> India</option>
                                </select>
                                <div class="text-danger pt-2">
                        @if ($errors->has('country'))
                        <span class="errormsg">{{ $errors->first('country') }}</span>
                        @endif
                        </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" value="{{$customer->City}}">
                                <div class="text-danger pt-2">
                        @if ($errors->has('city'))
                        <span class="errormsg">{{ $errors->first('city') }}</span>
                        @endif
                        </div>
                                <!-- <select class="select">
                                <option>Newyork</option>
                                <option>City</option>
                            </select> -->
                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="{{$customer->Address}}">
                                <div class="text-danger pt-2">
                        @if ($errors->has('category_name'))
                        <span class="errormsg">{{ $errors->first('address') }}</span>
                        @endif
                        </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description">{{$customer->Description}} </textarea>
                                <div class="text-danger pt-2">
                        @if ($errors->has('description'))
                        <span class="errormsg">{{ $errors->first('desription') }}</span>
                        @endif
                        </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Update</button>
                            <a class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- /add -->
    </div>
</div>
@endsection