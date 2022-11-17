<?php $page = "subaddcategory"; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')
        @slot('title') Product Add sub Category @endslot
        @slot('title_1') Create new product Category @endslot
        @endcomponent
        <!-- /add -->
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{route('addsubcategory')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Parent Category</label>
                                <select class="select" name="category_name">
                                    <option>Choose Category</option>
                                    @foreach ($category as $category1)
                                    <option value="{{$category1->id}}">{{$category1->category_name}}</option>
                                    @endforeach
                                </select>
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
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="sub_category_name">
                            </div>
                            <div class="text-danger pt-2">
                                @error('0')
                                {{$message}}
                                @enderror
                                @error('sub_category_name')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Code</label>
                                <input type="text" name="sub_category_code">
                            </div>
                            <div class="text-danger pt-2">
                                @error('0')
                                {{$message}}
                                @enderror
                                @error('sub_category_code')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="sub_category_desc"></textarea>
                            </div>
                            <div class="text-danger pt-2">
                                @error('0')
                                {{$message}}
                                @enderror
                                @error('sub_category_desc')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-submit me-2" name="submit " type="submit">Submit</button>
                            <a href="{{url('subcategorylist')}}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /add -->
    </div>
</div>
@endsection