<?php $page = "editproduct"; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')
        @slot('title') Product Edit @endslot
        @slot('title_1') Update your product @endslot
        @endcomponent
        <!-- /add -->

        <form action="{{ route('edit_product',[$product->product_id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="product_name" value="{{old('name',$product->product_name)}}">
                            </div>
                            <div class="text-danger pt-2">
                                @error('0')
                                {{$message}}
                                @enderror
                                @error('product_name')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="select" id="category_name" onchange="get_brands()" name="category_name">
                                    @foreach ($categorys as $category)
                                    <?php if ($category->id == $product->cate_id) { ?>

                                        <option value="{{$category->id}}">{{ $category->category_name}}</option>
                                    <?php } else { ?>
                                        <option value="{{$category->id}}">{{ $category->category_name}}</option>

                                    <?php } ?>

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
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Sub Category</label>
                                    <select class="select" id="sub_category" name="subcategory_name">

                                        @foreach ($sub_cate as $sub_cate1)
                                        <?php if ($sub_cate1->sub_cate_id == $product->sub_cate_id) { ?>

                                            <option value="{{$sub_cate1->sub_cate_id}}">{{ $sub_cate1->sub_cate_name}}</option>
                                        <?php } else { ?>
                                            <option value="{{$sub_cate1->sub_cate_id}}">{{ $sub_cate1->sub_cate_name}}</option>

                                        <?php } ?>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-danger pt-2">
                                    @error('0')
                                    {{$message}}
                                    @enderror
                                    @error('subcategory_name')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select class="select" name="brand">
                                        @foreach ($brands as $brand)
                                        <?php if ($brand->brand_id == $product->brand_id) { ?>

                                            <option value="{{$brand->brand_id}}">{{ $brand->brand_name}}</option>
                                        <?php } else { ?>
                                            <option value="{{$brand->brand_id}}">{{ $brand->brand_name}}</option>

                                        <?php } ?>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-danger pt-2">
                                    @error('0')
                                    {{$message}}
                                    @enderror
                                    @error('brand')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Unit</label>
                                    <select class="select" name="unit">
                                        <option value="Liter" selected>Liter</option>
                                        <option value="ml">Mille letter</option>
                                    </select>
                                </div>
                                <div class="text-danger pt-2">
                                    @error('0')
                                    {{$message}}
                                    @enderror
                                    @error('unit')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>SKU</label>
                                    <input type="text" name="SKU" value="{{old('name',$product->product_SKU)}}">
                                </div>
                                <div class="text-danger pt-2">
                                    @error('0')
                                    {{$message}}
                                    @enderror
                                    @error('SKU')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Minimum Qty</label>
                                    <input type="text" name="minqty" value="{{old('name',$product->product_min_qty)}}">
                                </div>
                                <div class="text-danger pt-2">
                                    @error('0')
                                    {{$message}}
                                    @enderror
                                    @error('minqty')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" name="quantity" value="{{old('name',$product->product_qty)}}">
                                </div>
                                <div class="text-danger pt-2">
                                    @error('0')
                                    {{$message}}
                                    @enderror
                                    @error('quantity')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="pro_desc" class="form-control">{{$product->product_desc}}</textarea>
                                </div>
                                <div class="text-danger pt-2">
                                    @error('0')
                                    {{$message}}
                                    @enderror
                                    @error('pro_desc')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="price" value="{{old('name',$product->product_price)}}">
                                </div>
                                <div class="text-danger pt-2">
                                    @error('0')
                                    {{$message}}
                                    @enderror
                                    @error('price')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Product Image</label>
                                    <div class="image-upload">
                                        <input type="file" name="pro_image" value="{{ asset('storage/product_img/'.$product->product_img) }}">
                                        <div class="image-uploads">
                                            <img src="{{ URL::asset('/assets/img/icons/upload.svg')}}" alt="img">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                    </div>
                                    <div class="text-danger pt-2">
                                        @error('0')
                                        {{$message}}
                                        @enderror
                                        @error('pro_image')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="product-list">
                                    <ul class="row">
                                        <li>
                                            <div class="productviews">
                                                <div class="productviewsimg">
                                                    <img src="{{ URL::asset('storage/product_img/'.$product->product_img)}}" alt="img">
                                                </div>
                                                <div class="productviewscontent">
                                                    <div class="productviewsname">
                                                        <h2>{{$product->product_img}}</h2>
                                                        <h3>581kb</h3>
                                                    </div>
                                                    <a href="javascript:void(0);" class="hideset">x</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-submit me-2" name="submit" type="submit">Update</button>
                                <a href="{{url('productlist')}}" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        <!-- /add -->
    </div>
</div>
@endsection