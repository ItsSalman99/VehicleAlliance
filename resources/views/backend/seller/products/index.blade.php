@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">All Products</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Products</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                All Products
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li><a href="add-product.html" class="btn btn-primary btn-md d-md-none"><em
                                                class="icon ni ni-plus"></em><span>Add</span></a></li>
                                    <li><a href="{{ route('product.create') }}"
                                            class="btn btn-primary d-none d-md-inline-flex"><em
                                                class="icon ni ni-plus"></em><span>Add New Product</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card">
                            <table class="datatable-init table" data-nk-container="table-responsive">
                                <thead class="table-light">
                                    <tr>
                                        <th class="tb-col"><span class="overline-title">#</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Thumbnail</span>
                                        </th>
                                        <th class="tb-col"><span class="overline-title">Product Name</span></th>
                                        <th class="tb-col"><span class="overline-title">Product Price</span></th>
                                        <th class="tb-col"><span class="overline-title">Product Description</span></th>
                                        <th class="tb-col"><span class="overline-title">In Stock</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Created At</span></th>
                                        <th class="tb-col tb-col-end" data-sortable="false"><span
                                                class="overline-title">action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $product->id }}
                                                </span></td>
                                            <td class="tb-col tb-col-md" style="width: 200px">
                                                <img src="{{ asset($product->img) }}" width="30%" height="80%" alt="">
                                            </td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $product->name }}
                                                </span></td>
                                            <td class="tb-col"><span class="badge text-bg-success-soft">
                                                    {{ $product->price }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $product->description }}
                                                </span></td>
                                            <td class="tb-col">
                                                @if ($product->in_stock == 1)
                                                    <span class="badge text-bg-success-soft">
                                                        In Stock
                                                    </span>
                                                @else
                                                    <span class="badge text-bg-danger-soft">
                                                        Out Of Stock
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ date('F j Y', strtotime($product->created_at)) }}
                                                </span></td>
                                            <td class="tb-col tb-col-end">
                                                <div class="dropdown"><a href="#"
                                                        class="btn btn-sm btn-icon btn-zoom me-n1"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <div class="dropdown-content py-1">
                                                            <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                                <li><a
                                                                        href="{{ route('product.delete', ['id' => $product->id]) }}"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                                <li><a
                                                                        href="{{ route('product.edit', ['id' => $product->id]) }}">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" class="bi bi-pencil-fill"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                                                        </svg>
                                                                        <span>Edit</span></a>
                                                                </li>
                                                                {{-- <li><a href="products.html"><em
                                                                        class="icon ni ni-eye"></em><span>View
                                                                            Details</span></a></li> --}}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
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
@endsection
