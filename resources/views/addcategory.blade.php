<?php $page="addcategory";?>
@extends('layout.mainlayout')
@section('content')		
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title') Product Add Category @endslot
			@slot('title_1') Create new product Category @endslot
		@endcomponent
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <!-- /add -->
        <div class="card">
            <form action="{{route('add-category')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="category_name">
                        </div>
                    
                    <div class="text-danger pt-2">
                        @error('0')
                            {{$message}}
                        @enderror
                        @error('category_name')
                            {{$message}}
                        @enderror
                    </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category Code</label>
                            <input type="text"  name="category_code">
                        </div>
                   
                    <div class="text-danger pt-2">
                        @error('0')
                            {{$message}}
                        @enderror
                        @error('category_code')
                            {{$message}}
                        @enderror
                    </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="category_desc"></textarea>
                        </div>
                    </div>
                    <div class="text-danger pt-2">
                        @error('0')
                            {{$message}}
                        @enderror
                        @error('category_desc')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>	Product Image</label>
                            <div class="image-upload">
                                <input type="file" name="category_image" accept="images/*">
                                <div class="image-uploads">
                                    <img src="{{ URL::asset('/assets/img/icons/upload.svg')}}" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                        <div class="text-danger pt-2">
                        @error('0')
                            {{$message}}
                        @enderror
                        @error('category_image')
                            {{$message}}
                        @enderror
                    </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" name="submit" class="btn btn-submit me-2">Submit</button>
                        <a href="{{url('categorylist')}}" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <!-- /add -->
    </div>
</div>
@endsection
	  