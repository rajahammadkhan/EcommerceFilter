@extends('management.layouts.master')
@section('title')
    Product Edit - {{ config('app.dashboard') }}
@endsection
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Product</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">

                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Title </strong></label>
                                            <div class="form-line">
                                                <input value="{{$product->title ?? '' }}" type="text"
                                                       id="erp_question_text"
                                                       class="form-control" name="title" placeholder="Title" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Brand </strong></label>
                                            <div class="form-line">
                                                <input value="{{$product->brand ?? '' }}" type="text"
                                                       id="erp_question_text"
                                                       class="form-control" name="brand" placeholder="Brand" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Price </strong></label>
                                            <div class="form-line">
                                                <input value="{{$product->price ?? '' }}" type="number"
                                                       id="erp_question_text"
                                                       class="form-control" name="price" placeholder="Price" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class=" col-12">
                                            <label for="email_address1"><strong>Size</strong></label>
                                            <select id="choices-multiple-remove-button" multiple
                                                    class="form-control select2" name="size[]" id="Quiz-type"
                                                    data-placeholder="Select">
                                                @php
                                                    $array_size = $product->size == null ? "[]" : $product->size;
                                                @endphp
                                                <option
                                                    {{ in_array('xs', json_decode($array_size)) ? 'Selected' : '' }} value="xs">
                                                    XS
                                                </option>
                                                <option
                                                    {{ in_array('s', json_decode($array_size)) ? 'Selected' : '' }}  value="s">
                                                    S
                                                </option>
                                                <option
                                                    {{ in_array('m', json_decode($array_size)) ? 'Selected' : '' }} value="m">
                                                    M
                                                </option>
                                                <option
                                                    {{ in_array('l', json_decode($array_size)) ? 'Selected' : '' }} value="l">
                                                    L
                                                </option>
                                                <option
                                                    {{ in_array('xl', json_decode($array_size)) ? 'Selected' : '' }} value="xl">
                                                    XL
                                                </option>
                                                <option
                                                    {{ in_array('xxl', json_decode($array_size)) ? 'Selected' : '' }} value="xxl">
                                                    XXL
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class=" col-12">
                                            <label for="email_address1"><strong>Colour</strong></label>
                                            <select id="choices-multiple-remove-button" multiple
                                                    class="form-control select2" name="colour[]" id="Quiz-type"
                                                    data-placeholder="Select">
                                                @php
                                                    $array_color = $product->colour == null ? "[]" : $product->colour;
                                                @endphp
                                                <option disabled> select</option>
                                                <option
                                                    {{ in_array('red', json_decode($array_color)) ? 'Selected' : '' }} value="red">
                                                    Red
                                                </option>
                                                <option
                                                    {{ in_array('blue', json_decode($array_color)) ? 'Selected' : '' }} value="blue">
                                                    Blue
                                                </option>
                                                <option
                                                    {{ in_array('black', json_decode($array_color)) ? 'Selected' : '' }} value="black">
                                                    Black
                                                </option>
                                                <option
                                                    {{ in_array('green', json_decode($array_color)) ? 'Selected' : '' }} value="green">
                                                    Green
                                                </option>
                                                <option
                                                    {{ in_array('brown', json_decode($array_color)) ? 'Selected' : '' }} value="brown">
                                                    Brown
                                                </option>
                                                <option
                                                    {{ in_array('black', json_decode($array_color)) ? 'Selected' : '' }} value="black">
                                                    Black
                                                </option>
                                                <option
                                                    {{ in_array('yellow', json_decode($array_color)) ? 'Selected' : '' }} value="yellow">
                                                    Yellow
                                                </option>
                                                <option
                                                    {{ in_array('pink', json_decode($array_color)) ? 'Selected' : '' }} value="pink">
                                                    Pink
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">


                                <div class="header">
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-primary  my-2 float-right"> Submit</button>
                                        </div>
                                    </div>
                                    <div class="row my-1">


                                        <div class=" col-12">
                                            <label for="email_address1"><strong>Status</strong> </label>
                                            <select class="form-control select2" name="status" id="Quiz-type"
                                                    data-placeholder="Select">
                                                <option {{$product->status == 1 ? 'selected' : ''}} selected value=1>
                                                    Publish
                                                </option>
                                                <option {{$product->status == 0 ? 'selected' : ''}}  value=0>draft
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class=" col-12">
                                            <label for="email_address1"><strong>Category</strong></label>
                                            <select class="form-control select2" name="category_id" id="Quiz-type"
                                                    data-placeholder="Select" required>
                                                <option selected disabled> select</option>
                                                @if(isset($cate))
                                                    @foreach ($cate as $row)
                                                        <option
                                                            {{ $product->category_id == $row->id ? 'Selected' : '' }}
                                                            value={{ $row->id }}>{{ $row->category_name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <label class="mt-3"><strong>Media Gallery</strong></label>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>Image</span>
                                            <input name="image" type="file">
                                        </div>
                                        @if ($product->image != null)
                                            @php $image = '/'.$product->image @endphp
                                        @else
                                            @php $image = 'galleryimage.png' @endphp
                                        @endif
                                        <img style="" src="{{ asset('images/media' . '/' . $image) }}"
                                             height="80px" width="100px">
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" name="image" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <script>
                    $(document).ready(function () {
                        $(".chosen-select").chosen({
                            no_results_text: "Oops, nothing found!"
                        })
                    });
                    $(document).ready(function () {
                        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                            removeItemButton: true,
                        });
                    });


                </script>
@endsection
