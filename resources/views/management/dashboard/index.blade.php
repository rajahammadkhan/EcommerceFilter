@extends('management.layouts.master ')

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Dashboard</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="{{url('/')}}">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Widgets -->
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Total Categories</div>
                    <h3 class="m-b-10">{{count($category)}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                    <div class="icon">
                        <div class="chart chart-bar"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Total Products</div>
                    <h3 class="m-b-10">{{count($product)}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                    <div class="icon">
                        <span class="chart chart-line"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Total Users</div>
                    <h3 class="m-b-10">{{count($user)}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                    <div class="icon">
                        <div class="chart chart-pie"></div>
                    </div>
                </div>
            </div>
        </div>


        <!-- #END# Widgets -->
        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header d-flex justify-content-between">
                        <h2>
                            <strong>Recent </strong>Arrivals</h2>
                        <a href="{{url('admin/product')}}">View All</a>
                    </div>
                    <div class="body">
                        <div id="new-orders" class="media-list position-relative">
                            <div class="table-responsive">
                                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">Image</th>
                                        <th class="border-top-0">Category Name</th>
                                        <th class="border-top-0">Product Title</th>
                                        <th class="border-top-0">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="table-img">
                                                @if ($product->image != null)
                                                    @php $image = '/'.$product->image @endphp
                                                @else
                                                    @php $image = 'galleryimage.png' @endphp
                                                @endif
                                                <img style="" src="{{ asset('images/media' . '/' . $image) }}"
                                                     height="60px" width="60px"></td>
                                            <td> {{ $product->Category->category_name ?? '' }}</td>
                                            <td>{{$product->title ?? ''}}</td>
                                            <td>{{$product->created_at->format('m/d/Y') ?? ''}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
