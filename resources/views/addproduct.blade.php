<?php $page = "addproduct"; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')
        @slot('title') Product Add @endslot
        @slot('title_1') Create new product @endslot
        @endcomponent
        <!-- /add -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <form action="{{route('add_product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="product_name">
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
                                    <option>Choose Category</option>
                                   @foreach($category as $category1)
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
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Sub Category</label>
                                <select class="select" id="sub_category" name="subcategory_name">
                                    <option>Choose Sub Category</option>
                                    
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
                                    <option>Choose Brand</option>
                                    @foreach($brands as $brand)
                                   <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
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
                                    <option>Choose Unit</option>
                                    <option value="Liter">Liter</option>
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
                                <input type="text" name="SKU">
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
                                <input type="text" name="minqty">
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
                                <input type="text" name="quantity">
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
                                <textarea class="form-control" name="pro_desc"></textarea>
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
                                <input type="text" name="price">
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
                                    <input type="file" name="pro_image">
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
                        <div class="col-lg-12">
                            <button  class="btn btn-submit me-2" type="submit" name="submit">Submit</button>
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
