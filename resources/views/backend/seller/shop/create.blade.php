@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Create Shop</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Create Shop</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                Create Shop
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        @if ($shop)
                            <div class="">
                                <img style="margin: 0 auto; width: 200px; margin: 0 auto;" src="{{ asset('assets/frontend/img/uploads/shops/'.$shop->logo) }}" alt="">
                            </div>
                        @endif
                        <form action="{{ route('shop.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-xxl-12">
                                    <div class="gap gy-4">
                                        <div class="gap-col">
                                            <div class="card card-gutter-md">
                                                <div class="card-body">
                                                    <div class="row g-gs">
                                                        <div class="col-lg-12">
                                                            <div class="form-control-wrap">
                                                                <label for="productname" class="form-label">
                                                                    Shop Name
                                                                </label>
                                                                <input class="form-control form-control-lg" id="formFileLg"
                                                                    type="text" name="name" required value="<?php if($shop) { echo $shop->name; }  ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-control-wrap">
                                                                <label for="productname" class="form-label">
                                                                    Shop Logo
                                                                </label>
                                                                <input class="form-control form-control-lg" id="formFileLg"
                                                                    type="file" name="logo" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-control-wrap">
                                                                <label for="productname" class="form-label">
                                                                    Shop Address
                                                                </label>
                                                                <textarea name="address" required name="shopaddress" class="form-control form-control-lg"
                                                                placeholder="Shop Address" style="height: 50px; resize: none"><?php if($shop) { echo $shop->address; }  ?></textarea>
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
