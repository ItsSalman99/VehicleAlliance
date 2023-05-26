@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Add New Staff</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Staff</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                Add Staff
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li><a class="btn btn-primary btn-md d-md-none"><em
                                                class="icon ni ni-eye"></em><span>View</span></a></li>
                                    <li><a href="{{ route('staffs.index') }}" class="btn btn-primary d-none d-md-inline-flex"><em
                                                class="icon ni ni-eye"></em><span>View All Staff</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <form action="{{ route('staffs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-xxl-12">
                                    <div class="gap gy-4">
                                        <div class="gap-col">
                                            <div class="card card-gutter-md">
                                                <div class="card-body">
                                                    <div class="row g-gs">
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for="productname"
                                                                    class="form-label">Staff First Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="fname" min="100"
                                                                        class="form-control" placeholder="First Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for="productname"
                                                                    class="form-label">Staff Last Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="lname" min="100"
                                                                        class="form-control" placeholder="Last Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="productname" class="form-label">
                                                                    Email
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="email" name="email"
                                                                        class="form-control" placeholder="Email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="productname" class="form-label">
                                                                    Password
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="password" name="password"
                                                                        class="form-control" placeholder="**********">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="productname" class="form-label">
                                                                    Confirm Password
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="password" name="confirm_password"
                                                                        class="form-control" placeholder="**********">
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gap-col">
                                            <ul class="d-flex align-items-center gap g-3">
                                                <li>
                                                    <button type="submit" class="btn btn-primary">
                                                        Add
                                                    </button>
                                                </li>
                                                <li><a href="{{ route('dashboard') }}" class="btn border-0">Cancel</a>
                                                </li>
                                            </ul>
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
