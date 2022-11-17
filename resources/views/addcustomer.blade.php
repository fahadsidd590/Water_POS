<?php $page = "addcustomer"; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')
        @slot('title') Customer Management @endslot
        @slot('title_1') Add/Update Customer @endslot
        @endcomponent
        <!-- /add -->
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <form action="{{route('add-customer')}}" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
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
                        <div class="col-lg-3 col-sm-6 col-12">
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
                        <div class="col-lg-3 col-sm-6 col-12">
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
                        <div class="col-lg-3 col-sm-6 col-12">
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
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="customer_city">
                                <!-- <select class="select">
                                <option>Choose City</option>
                                <option>City 1</option>
                                <option>City 2</option>
                            </select> -->
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
                            <button class="btn btn-submit me-2" type="submit">Submit</button>
                            <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- /add -->
    </div>
</div>
@endsection