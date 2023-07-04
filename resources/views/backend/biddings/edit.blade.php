@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Edit Vehicle</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Vehicle</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                Edit Vehicle
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li><a href="#" class="btn btn-primary btn-md d-md-none"><em
                                                class="icon ni ni-eye"></em><span>View</span></a></li>
                                    <li><a href="{{ route('biddings.index') }}"
                                            class="btn btn-primary d-none d-md-inline-flex"><em
                                                class="icon ni ni-eye"></em><span>View Vehicles</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <form action="{{ route('biddings.vehicles.update', ['id' => $vehicle->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-xxl-9">
                                    <div class="gap gy-4">
                                        <div class="gap-col">
                                            <div class="card card-gutter-md">
                                                <div class="card-body">
                                                    <img src="{{ asset($vehicle->img) }}" alt="">
                                                    <div class="row g-gs">
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="image"
                                                                    class="form-label">Vehicle Image</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="file" name="img"
                                                                        class="form-control" placeholder="Vehicle Image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="productname"
                                                                    class="form-label">Vehicle Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="name"
                                                                        value="{{ $vehicle->name }}" class="form-control"
                                                                        placeholder="Vehicle Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for="minprice"
                                                                    class="form-label">
                                                                    Min. Selling Price
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" class="form-control"
                                                                        value="{{ $vehicle->min_price }}" name="min_price"
                                                                        placeholder="Min. Vehicle price">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for="maxprice"
                                                                    class="form-label">
                                                                    Max. Selling Price
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" class="form-control"
                                                                        value="{{ $vehicle->max_price }}" name="max_price"
                                                                        placeholder="Max.Vehicle price">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for="price"
                                                                    class="form-label">
                                                                    Vehicle Model
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $vehicle->year_model }}" name="model"
                                                                        placeholder="Vehicle Model">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for="engine_capacity"
                                                                    class="form-label">
                                                                    Engine Capacity
                                                                </label>
                                                                <div class="form-control-wrap"><input type="text"
                                                                        class="form-control" name="engine_capacity"
                                                                        value="{{ $vehicle->engine_capacity }}"
                                                                        placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for="sku"
                                                                    class="form-label">
                                                                    Transmission Type
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    <select class="js-select" name="transmission_type"
                                                                        data-search="true" data-sort="false">
                                                                        <option value="Automatic" <?php
                                                                        if ($vehicle->transmission_type == 'Automatic') {
                                                                            echo 'selected';
                                                                        } ?>>Automatic
                                                                        </option>
                                                                        <option value="Manual" <?php
                                                                        if ($vehicle->transmission_type == 'Manual') {
                                                                            echo 'selected';
                                                                        } ?>>Manual
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="description"
                                                                    class="form-label">
                                                                    Description
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    <textarea name="description" class="form-control">{{ $vehicle->description }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gap-col">
                                            <ul class="d-flex align-items-center gap g-3">
                                                <li><button type="submit" class="btn btn-primary">Save
                                                        Changes</button></li>
                                                <li><a href="{{ route('dashboard') }}" class="btn border-0">Cancel</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3">
                                    <div class="card card-gutter-md">
                                        <div class="card-body">
                                            <div class="row g-gs">
                                                <div class="col-12">
                                                    <div class="form-group"><label class="form-label">Tags</label>
                                                        <div class="form-control-wrap"><input class="js-tags"
                                                                value="" type="text"
                                                                placeholder="Add tags to a product"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group"><label class="form-label">Status</label>
                                                        <div class="form-control-wrap"><select class="js-select"
                                                                data-search="true" data-sort="false">
                                                                <option value="">Select an option</option>
                                                                <option value="1">Published</option>
                                                                <option value="2">Draft</option>
                                                                <option value="3">Scheduled</option>
                                                                <option value="4">Inactive</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
