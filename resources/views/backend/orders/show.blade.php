@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2 align-items-start">
                                <div class="nk-block-head-content">
                                    <div class="d-flex flex-column flex-md-row align-items-md-center">
                                        <div class="media media-huge media-circle"><img src="" class="img-thumbnail"
                                                alt="">
                                        </div>
                                        <div class="mt-3 mt-md-0 ms-md-3">
                                            <h3 class="title mb-1">#Order-{{ $order->id }}</h3><span class="small">
                                                {{ $order->user->name }}
                                            </span>
                                            <ul class="nk-list-option pt-1">
                                                <li><em class="icon ni ni-map-pin"></em><span class="small">
                                                    {{$order->address}}
                                                    </span></li>
                                                <li><em class="icon ni ni-building"></em><span class="small">Softnio</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block-head-between gap g-2">
                                    <div class="gap-col">
                                        <ul class="d-flex gap g-2">
                                            <li class="d-none d-md-block"><a href="user-edit.html"
                                                    class="btn btn-soft btn-primary"><em class="icon ni ni-edit"></em><span>
                                                        Change Status
                                                    </span></a>
                                            </li>
                                            <li class="d-md-none"><a href="user-edit.html"
                                                    class="btn btn-soft btn-primary btn-icon"><em
                                                        class="icon ni ni-edit"></em></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane show active" id="tab-1" tabindex="0">
                                <div class="card card-gutter-md">
                                    <div class="card-row card-row-lg col-sep col-sep-lg">
                                        <div class="card-aside">
                                            <div class="card-body">
                                                <div class="bio-block">
                                                    <h4 class="bio-block-title">Details</h4>
                                                    <ul class="list-group list-group-borderless small">
                                                        <li class="list-group-item"><span
                                                                class="title fw-medium w-40 d-inline-block">Account
                                                                ID:</span><span
                                                                class="text">Order-{{ $order->id }}</span></li>
                                                        <li class="list-group-item"><span
                                                                class="title fw-medium w-40 d-inline-block">
                                                                Customer Name:</span><span class="text">
                                                                {{ $order->user->name }}
                                                            </span></li>
                                                        <li class="list-group-item"><span
                                                                class="title fw-medium w-40 d-inline-block">Customer
                                                                Email:</span><span
                                                                class="text">{{ $order->user->name }}</span></li>
                                                        <li class="list-group-item"><span
                                                                class="title fw-medium w-40 d-inline-block">Customer
                                                                Address:</span><span class="text">California, United
                                                                States</span></li>
                                                        <li class="list-group-item"><span
                                                                class="title fw-medium w-40 d-inline-block">Order
                                                                Date</span><span class="text">
                                                                {{ date('F, j Y', strtotime($order->created_at)) }}
                                                            </span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content col-sep">
                                            <div class="card-body">
                                                <div class="bio-block">
                                                    <h4 class="bio-block-title">Product</h4>
                                                    <table class="datatable-init table"
                                                        data-nk-container="table-responsive">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th class="tb-col"><span class="overline-title">#</span>
                                                                </th>
                                                                <th class="tb-col tb-col-md"><span
                                                                        class="overline-title">Product</span>
                                                                </th>
                                                                <th class="tb-col"><span class="overline-title">Price</span>
                                                                </th>
                                                                <th class="tb-col tb-col-md"><span
                                                                        class="overline-title">Quantity</span></th>
                                                                <th class="tb-col tb-col-md"><span
                                                                        class="overline-title">Seller</span></th>
                                                                <th class="tb-col tb-col-end" data-sortable="false"><span
                                                                        class="overline-title">
                                                                        Action
                                                                    </span></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($order->order_items as $key => $order)
                                                                <tr>
                                                                    <td class="tb-col tb-col-md"><span>
                                                                            #{{ $key + 1 }}
                                                                        </span></td>
                                                                    <td class="tb-col tb-col-md"><span>
                                                                            {{ $order->product->name }}
                                                                        </span></td>
                                                                    <td class="tb-col"><span
                                                                            class="badge text-bg-success-soft">
                                                                            {{ $order->price }}
                                                                        </span></td>
                                                                    <td class="tb-col"><span
                                                                            class="badge text-bg-success-soft">
                                                                            {{ $order->qty }}
                                                                        </span></td>
                                                                    <td class="tb-col"><span
                                                                            class="badge text-bg-success-soft">
                                                                            {{ $order->product->seller->name }}
                                                                        </span></td>
                                                                    <td class="tb-col tb-col-end">
                                                                        <div class="dropdown"><a href="#"
                                                                                class="btn btn-sm btn-icon btn-zoom me-n1"
                                                                                data-bs-toggle="dropdown"><em
                                                                                    class="icon ni ni-more-v"></em></a>
                                                                            <div
                                                                                class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                                <div class="dropdown-content py-1">
                                                                                    <ul
                                                                                        class="link-list link-list-hover-bg-primary link-list-md">
                                                                                        <li><a
                                                                                                href="{{ route('orders.show', ['id' => $order->id]) }}"><em
                                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                                    Details</span></a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
