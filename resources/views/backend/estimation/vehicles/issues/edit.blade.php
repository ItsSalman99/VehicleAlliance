@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Edit Vehicle Issue</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Vehicle Issue</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                Edit Vehicle Issue
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li><a href="products.html" class="btn btn-primary btn-md d-md-none"><em
                                                class="icon ni ni-eye"></em><span>View</span></a></li>
                                    <li><a href="{{ route('vehicle.issues.index') }}"
                                            class="btn btn-primary d-none d-md-inline-flex"><em
                                                class="icon ni ni-eye"></em><span>View Issues</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <form action="{{ route('vehicle.issues.update', ['id' => $issue->id]) }}" method="POST">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-xxl-9">
                                    <div class="gap gy-4">
                                        <div class="gap-col">
                                            <div class="card card-gutter-md">
                                                <div class="card-body">
                                                    <div class="row g-gs">
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="productname"
                                                                    class="form-label">Vehicle Issue Name:</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="name" value="{{$issue->name}}"
                                                                        class="form-control" placeholder="Issue Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gap-col">
                                            <ul class="d-flex align-items-center gap g-3">
                                                <li><button type="submit" class="btn btn-primary">Update
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
