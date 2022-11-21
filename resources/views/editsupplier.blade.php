<?php $page = "editsupplier"; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')
        @slot('title') Supplier Management @endslot
        @slot('title_1') Edit/Update Customer @endslot
        @endcomponent
        <!-- /add -->
        <form action="{{route('editsupplier2',[$supplier->id])}}" method="post">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Supplier Name</label>
                                <input type="text" value="{{$supplier->Name}}" name="name">
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
                                <input type="text" value="{{$supplier->Email}}" name="email">
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
                                <input type="text" value="{{$supplier->Phone}} " name="phone">
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
                                    <option value="{{$supplier->Country}}" selected>{{$supplier->Country}}</option>
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
                            <input type="text" value="{{$supplier->City}} " name="city">
                            <div class="text-danger pt-2">
                                @if ($errors->has('city'))
                                <span class="errormsg">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                            <!-- <select class="select">
                                <option>Newyork</option>
                                <option>City 1</option>
                            </select> -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" value="{{$supplier->Address}} " name="address">
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
                            <textarea class="form-control" name="description">{{$supplier->Description}} </textarea>
                            <div class="text-danger pt-2">
                                @if ($errors->has('description'))
                                <span class="errormsg">{{ $errors->first('desription') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-12">
                        <div class="form-group">
                            <label>	Avatar</label>
                            <div class="image-upload">
                                <input type="file">
                                <div class="image-uploads">
                                    <img src="{{ URL::asset('/assets/img/icons/upload.svg')}}" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit me-2">Update</button>
                        <a class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
    </div>
    <!-- /add -->
    </form>
</div>
</div>
@endsection