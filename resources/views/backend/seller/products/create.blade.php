@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Add Product</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Product</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                Add Product
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li><a class="btn btn-primary btn-md d-md-none"><em
                                                class="icon ni ni-eye"></em><span>View</span></a></li>
                                    <li><a href="#" class="btn btn-primary d-none d-md-inline-flex"><em
                                                class="icon ni ni-eye"></em><span>View Products</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
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
                                                                    class="form-label">Product Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="name" min="100"
                                                                        class="form-control" placeholder="Product Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="productname"
                                                                    class="form-label">Product Price</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" name="price" min="100"
                                                                        class="form-control" placeholder="Product Price">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group"><label for="productname"
                                                                    class="form-label">Product Description</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea name="description" class="form-control" placeholder="Product Description"></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-control-wrap">
                                                                <label for="productname" class="form-label">Product
                                                                    Thumbnail</label>
                                                                <input class="form-control form-control-lg" id="formFileLg"
                                                                    type="file" name="img">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="in_stock" id="addProductshippingCheckbox">
                                                                    <label class="form-check-label"
                                                                        for="addProductshippingCheckbox">This product is in
                                                                        stock</label>
                                                                </div>
                                                                <div class="smaller">Set if the product is in stock.
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
