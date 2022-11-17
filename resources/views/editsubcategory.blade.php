<?php $page = "editsubcategory"; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')
        @slot('title') Product Edit Sub Category @endslot
        @slot('title_1') Create new product Category @endslot
        @endcomponent
        <!-- /add -->
       
        <form action="{{route('editsubcategory2',[$subcategory->sub_cate_id])}}" method="post">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Parent Category</label>
                                <select class="select" name="category_name">
                                    @foreach ($category as $category1)
                                        <!-- @@if($category1->id == old('sub_cate_name',$subcategory->cate_id)) -->
                                        <?php if($category1->id == old('sub_cate_name',$subcategory->cate_id)){?>
                                        <option value="{{$category1->id}}" selected>{{$category1->category_name}}</option>
                                        <?php }else{ ?>
                                            <option value="{{$category1->id}}">{{$category1->category_name}}</option>
                                        <?php }?>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="sub_cate_name" value="{{old('sub_cate_name',$subcategory->sub_cate_name)}}">
                            </div>
                            <div class="text-danger pt-2">
                                @error('0')
                                {{$message}}
                                @enderror
                                @error('sub_cate_name')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Code</label>
                                <input type="text" name="sub_cate_code" value="{{old('sub_cate_code',$subcategory->sub_cate_code)}}">
                            </div>
                            <div class="text-danger pt-2">
                                @error('0')
                                {{$message}}
                                @enderror
                                @error('sub_cate_code')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="sub_cate_desc">{{old('sub_cate_desc',$subcategory->sub_cate_desc)}}</textarea>
                            </div>
                            <div class="text-danger pt-2">
                                @error('0')
                                {{$message}}
                                @enderror
                                @error('sub_cate_desc')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-submit me-2" type="submit">Submit</button>
                            <a href="{{url('subcategorylist')}}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- /add -->
    </div>
</div>
@endsection