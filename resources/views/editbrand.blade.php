<?php $page = "editbrand"; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')
        @slot('title') Brand Edit @endslot
        @slot('title_1') Update your Brand @endslot
        @endcomponent
        <!-- /add -->
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <form action="{{ route('editbrand2',[$brand->brand_id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input type="text" name="brand_name" value="{{old('name',$brand->brand_name)}}">
                            </div>
                            <div class="text-danger pt-2">
                                @if ($errors->has('brand_name'))
                                <span class="errormsg">{{ $errors->first('brand_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="brand_desc">{{old('desc',$brand->brand_desc)}}</textarea>
                            </div>
                            <div class="text-danger pt-2">
                                @if ($errors->has('brand_desc'))
                                <span class="errormsg">{{ $errors->first('brand_desc') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Product Image</label>
                                <div class="image-upload">
                                    <input type="file" name="brand_image" value="{{ asset('storage/brand_img/'.$brand->brand_image) }}">
                                    <div class="image-uploads">
                                        <img src="{{ URL::asset('/assets/img/icons/upload.svg')}}" alt="img">
                                        <h4>Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                                <div class="text-danger pt-2">
                                @if ($errors->has('brand_image'))
                                <span class="errormsg">{{ $errors->first('brand_image') }}</span>
                                @endif
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="product-list">
                                <ul class="row">
                                    <li>
                                        <div class="productviews">
                                            <div class="productviewsimg">
                                                <img src="{{ URL::asset('storage/brand_img/'.$brand->brand_image)}}" alt="img">
                                            </div>
                                            <div class="productviewscontent">
                                                <div class="productviewsname">
                                                    <h2>{{$brand->brand_image}}</h2>
                                                    <h3>581kb</h3>
                                                </div>
                                                <a href="javascript:void(0);">x</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-submit me-2" name="submit" type="submit">Submit</button>
                            <a href="{{url('brandlist')}}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- /add -->
    </div>
</div>
@endsection