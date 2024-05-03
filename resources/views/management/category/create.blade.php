@extends('management.layouts.master')
@section('title')
    Category Create - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ml-4">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title"> Category</h4>
                </li>
            </ul>
        </div>
    </div>
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card py-4">
                    <div class="header">
                        <div class="row py-4">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Category Name </strong></label>
                                <div class="form-line">
                                    <input value="{{ old('category_name') }}" type="text" id="category_name" class="form-control" name="category_name"
                                           placeholder="Category Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class=" col-12">
                                <label for="email_address1"><strong>Status</strong> </label>
                                <select class="form-control select2" name="status" id="Quiz-type"
                                        data-placeholder="Select">
                                    <option selected value=1>Publish
                                    </option>
                                    <option  value=0>draft
                                    </option>

                                </select>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-12">
                                <button class="btn btn-primary  my-2 float-right"> Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
