@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">All Orders</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Orders</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                All Orders
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card">
                            <table class="datatable-init table" data-nk-container="table-responsive">
                                <thead class="table-light">
                                    <tr>
                                        <th class="tb-col"><span class="overline-title">#</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Buyer</span>
                                        </th>
                                        <th class="tb-col"><span class="overline-title">Total</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Status</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Created At</span></th>
                                        <th class="tb-col tb-col-end" data-sortable="false"><span class="overline-title">
                                                Action
                                            </span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $key => $order)
                                        <tr>
                                            <td class="tb-col tb-col-md"><span>
                                                    #{{ $key + 1 }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $order->user->name }}
                                                </span></td>
                                            <td class="tb-col"><span class="badge text-bg-success-soft">
                                                    {{ $order->total }}
                                                </span></td>
                                            <td class="tb-col"><span class="badge text-bg-success-soft">
                                                    {{ $order->status }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ date('F j Y', strtotime($order->created_at)) }}
                                                </span></td>
                                            <td class="tb-col tb-col-end">
                                                <div class="dropdown"><a href="#"
                                                        class="btn btn-sm btn-icon btn-zoom me-n1"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <div class="dropdown-content py-1">
                                                            <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                                <li><a href="{{ route('orders.show', ['id'=> $order->id]) }}"><em
                                                                            class="icon ni ni-eye"></em><span>View Details</span></a>
                                                                </li>
                                                              	@if(Auth::user()->type == 'seller')
                                                                  <li><a href="{{ route('orders.status', ['id'=> $order->id]) }}"><em
                                                                              class="icon ni ni-eye"></em><span>
                                                                          Change Status
                                                                    </span></a>
                                                                  </li>
                                                              	@endif
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
