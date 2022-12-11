@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Manage Slider</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Application Slider</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                Manage Slider
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators"> <button type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button> <button type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button> <button type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button> </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active"> <img
                                        src="<?php if($slider && $slider->img1 != null) { echo $slider->img1; } else { echo 'https://html.nioboard.themenio.com/images/slider/a.jpg'; } ?>" class="d-block w-100"
                                        alt="..."> </div>
                                <div class="carousel-item"> <img
                                    src="<?php if($slider && $slider->img2 != null) { echo $slider->img2; } else { echo 'https://html.nioboard.themenio.com/images/slider/a.jpg'; } ?>" class="d-block w-100"
                                        alt="..."> </div>
                                <div class="carousel-item"> <img
                                    src="<?php if($slider && $slider->img3 != null) { echo $slider->img3; } else { echo 'https://html.nioboard.themenio.com/images/slider/a.jpg'; } ?>" class="d-block w-100"
                                        alt="..."> </div>
                            </div> <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"> <span
                                    class="carousel-control-prev-icon" aria-hidden="true"></span> <span
                                    class="visually-hidden">Previous</span> </button> <button class="carousel-control-next"
                                type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"> <span
                                    class="carousel-control-next-icon" aria-hidden="true"></span> <span
                                    class="visually-hidden">Next</span> </button>
                        </div>
                        <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" hidden value="<?php if($slider != null) { echo 'update'; } else { echo 'store'; } ?>" name="state">
                            <div class="row g-gs">
                                <div class="col-xxl-9">
                                    <div class="gap gy-4">
                                        <div class="gap-col">
                                            <div class="card card-gutter-md">
                                                <div class="card-body">
                                                    <div class="row g-gs">
                                                        <div class="col-lg-12">
                                                            <div class="form-control-wrap">
                                                                <label for="productname"
                                                                    class="form-label">Slider Image 1</label>
                                                                <input class="form-control form-control-lg"
                                                                    id="formFileLg" type="file" name="img1">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-control-wrap">
                                                                <label for="productname"
                                                                    class="form-label">Slider Image 2</label>
                                                                <input class="form-control form-control-lg"
                                                                    id="formFileLg" type="file" name="img2">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-control-wrap">
                                                                <label for="productname"
                                                                    class="form-label">Slider Image 3</label>
                                                                <input class="form-control form-control-lg"
                                                                    id="formFileLg" type="file" name="img3">
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
