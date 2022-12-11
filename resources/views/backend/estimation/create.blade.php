@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Add Estimation</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Estimation</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                Add Estimation
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li><a class="btn btn-primary btn-md d-md-none"><em
                                                class="icon ni ni-eye"></em><span>View</span></a></li>
                                    <li><a href="{{ route('estimation.index', ['id'=>1]) }}" class="btn btn-primary d-none d-md-inline-flex"><em
                                                class="icon ni ni-eye"></em><span>View Estimation</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <form action="{{ route('estimation.issue.store') }}" method="POST">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-xxl-9">
                                    <div class="gap gy-4">
                                        <div class="gap-col">
                                            <div class="card card-gutter-md">
                                                <div class="card-body">
                                                    <div class="row g-gs">
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for="tax-class"
                                                                    class="form-label">Select Vehicle</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="js-select" name="vehicle"
                                                                        data-search="true" data-sort="false">
                                                                        <option value="">Select vehicle
                                                                        </option>
                                                                        @foreach ($vehicles as $vehicle)
                                                                            <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for="tax-class"
                                                                    class="form-label">Select Model</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="js-select" name="model"
                                                                        data-search="true" data-sort="false">
                                                                        <option value="">Select vehicle model
                                                                        </option>
                                                                        @foreach ($models as $model)
                                                                            <option value="{{ $model->id }}">{{ $model->model }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="tax-class"
                                                                    class="form-label">Select Issue</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="js-select" name="issue"
                                                                        data-search="true" data-sort="false">
                                                                        <option value="">Select an issue
                                                                        </option>
                                                                        @foreach ($issues as $issue)
                                                                            <option value="{{ $issue->id }}">{{ $issue->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="productname"
                                                                    class="form-label">Estimation Min Price</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" name="minprice" min="100"
                                                                        class="form-control" placeholder="Min. Estimation Price">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="productname"
                                                                    class="form-label">Estimation Max Price</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" name="maxprice" min="100"
                                                                        class="form-control" placeholder="Max. Estimation Price">
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
                                                        <div class="form-control-wrap"><input class="js-tags" value=""
                                                                type="text" placeholder="Add tags to a product"></div>
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
