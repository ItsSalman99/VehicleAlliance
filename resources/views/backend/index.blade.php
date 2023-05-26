@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    @if (Auth::user()->type == 'admin')
                        <div class="row g-gs">
                            <div class="col-sm-6 col-xl-6 col-xxl-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title-group align-items-start">
                                            <div class="card-title">
                                                <h4 class="title">Admins</h4>
                                            </div>
                                            <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                                <em class="icon icon-md ni ni-user-alt-fill"></em>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-4">
                                            <div class="amount h1">{{ $admins }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-6 col-xxl-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title-group align-items-start">
                                            <div class="card-title">
                                                <h4 class="title">Buyers</h4>
                                            </div>
                                            <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                                <em class="icon icon-md ni ni-user-alt-fill"></em>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-4">
                                            <div class="amount h1">{{ $buyer }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-6 col-xxl-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title-group align-items-start">
                                            <div class="card-title">
                                                <h4 class="title">Staffs</h4>
                                            </div>
                                            <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                                <em class="icon icon-md ni ni-user-alt-fill"></em>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-4">
                                            <div class="amount h1">{{ $staff }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-6 col-xxl-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title-group align-items-start">
                                            <div class="card-title">
                                                <h4 class="title">Sellers</h4>
                                            </div>
                                            <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                                <em class="icon icon-md ni ni-user-alt-fill"></em>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-4">
                                            <div class="amount h1">{{ $seller }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-6 col-xxl-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title-group align-items-start">
                                            <div class="card-title">
                                                <h4 class="title">Total Orders</h4>
                                            </div>
                                            <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                                <em class="icon icon-md ni ni-user-alt-fill"></em>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-4">
                                            <div class="amount h1">{{ $orders }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-6 col-xxl-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title-group align-items-start">
                                            <div class="card-title">
                                                <h4 class="title">Orders Earned</h4>
                                            </div>
                                            <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                                <em class="icon icon-md ni ni-user-alt-fill"></em>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-4">
                                            <div class="amount h1">Rs.{{ $orderEarned }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12">
                                <div class="card h-100">
                                    <div class="card-body flex-grow-0 py-2">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h5 class="title">Top 10 Services</h5>
                                            </div>
                                            <div class="card-tools">
                                                {{-- <div class="dropdown"><a href="#"
                                                        class="btn btn-sm btn-icon btn-zoom me-n1"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <li>
                                                            <div class="dropdown-header pt-2 pb-0">
                                                                <h6 class="mb-0">Options</h6>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a href="#" class="dropdown-item">7 Days</a>
                                                        </li>
                                                        <li><a href="#" class="dropdown-item">15
                                                                Days</a></li>
                                                        <li><a href="#" class="dropdown-item">30
                                                                Days</a></li>
                                                    </ul>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-middle mb-0">
                                            <thead class="table-light table-head-sm">
                                                <tr>
                                                    <th class="tb-col"><span class="overline-title">#id</span></th>
                                                    <th class="tb-col tb-col-end"><span
                                                            class="overline-title">Thumbnail</span>
                                                    </th>
                                                    <th class="tb-col tb-col-end"><span class="overline-title">Name</span>
                                                    </th>
                                                    <th class="tb-col tb-col-end"><span class="overline-title">Price</span>
                                                    </th>
                                                    <th class="tb-col tb-col-end"><span class="overline-title">
                                                            Timing
                                                        </span>
                                                    </th>
                                                    <th class="tb-col tb-col-end"><span class="overline-title">
                                                            Dates
                                                        </span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($services as $item)
                                                    <tr>
                                                        <td class="tb-col">
                                                            {{ $item->id }}
                                                        </td>
                                                        <td class="tb-col tb-col-md" style="width: 200px">
                                                            <img src="{{ asset($item->img) }}" width="20%" height="20%"
                                                                alt="">
                                                        </td>
                                                        <td class="tb-col tb-col-end"><span class="small">
                                                                {{ $item->name }}
                                                            </span></td>
                                                        <td class="tb-col tb-col-end"><span class="change up small">
                                                                Pkr. {{ $item->price }}
                                                            </span>
                                                        </td>
                                                        <td class="tb-col tb-col-end"><span class="small">
                                                                {{ $item->available_stime . '-' . $item->available_etime }}
                                                            </span>
                                                        </td>
                                                        <td class="tb-col tb-col-end"><span class="text-info small">
                                                                {{ $item->start_available_date . '-' . $item->end_available_date }}
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12">
                                <div class="card h-100">
                                    <div class="card-body flex-grow-0 py-2">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h5 class="title">Top 10 Estiamtions</h5>
                                            </div>
                                            <div class="card-tools">
                                                {{-- <div class="dropdown"><a href="#"
                                                        class="btn btn-sm btn-icon btn-zoom me-n1"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <li>
                                                            <div class="dropdown-header pt-2 pb-0">
                                                                <h6 class="mb-0">Options</h6>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a href="#" class="dropdown-item">7 Days</a>
                                                        </li>
                                                        <li><a href="#" class="dropdown-item">15
                                                                Days</a></li>
                                                        <li><a href="#" class="dropdown-item">30
                                                                Days</a></li>
                                                    </ul>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-middle mb-0">
                                            <thead class="table-light table-head-sm">
                                                <tr>
                                                    <th class="tb-col"><span class="overline-title">Vehicle Name</span>
                                                    </th>
                                                    <th class="tb-col tb-col-md"><span class="overline-title">Vehicle
                                                            Model</span>
                                                    </th>
                                                    <th class="tb-col"><span class="overline-title">Issue</span></th>
                                                    <th class="tb-col"><span class="overline-title">Min. Estimation
                                                            Price</span></th>
                                                    <th class="tb-col"><span class="overline-title">Max. Estimation
                                                            Price</span></th>
                                                    <th class="tb-col tb-col-md"><span class="overline-title">Created
                                                            At</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($estimations as $estimation)
                                                    <tr>
                                                        <td class="tb-col tb-col-md"><span>
                                                                {{ $estimation->vehicle->name }}
                                                            </span></td>
                                                        <td class="tb-col tb-col-md"><span>
                                                                {{ $estimation->model->model }}
                                                            </span></td>
                                                        <td class="tb-col tb-col-md"><span>
                                                                {{ $estimation->issue->name }}
                                                            </span></td>
                                                        <td class="tb-col"><span class="badge text-bg-success-soft">
                                                                Pkr. {{ $estimation->min_est }}
                                                            </span></td>
                                                        <td class="tb-col"><span class="badge text-bg-success-soft">
                                                                Pkr. {{ $estimation->max_est }}
                                                            </span></td>
                                                        <td class="tb-col tb-col-md"><span>
                                                                {{ date('F j Y', strtotime($estimation->created_at)) }}
                                                            </span></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12">
                                <div class="card h-100">
                                    <div class="card-body flex-grow-0 py-2">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h5 class="title">Application Users</h5>
                                            </div>
                                            <div class="card-tools">
                                                {{-- <div class="dropdown"><a href="#"
                                                        class="btn btn-sm btn-icon btn-zoom me-n1"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <li>
                                                            <div class="dropdown-header pt-2 pb-0">
                                                                <h6 class="mb-0">Options</h6>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a href="#" class="dropdown-item">7 Days</a>
                                                        </li>
                                                        <li><a href="#" class="dropdown-item">15
                                                                Days</a></li>
                                                        <li><a href="#" class="dropdown-item">30
                                                                Days</a></li>
                                                    </ul>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-middle mb-0">
                                            <thead class="table-light table-head-sm">
                                                <tr>
                                                    <th class="tb-col"><span class="overline-title">User Name</span></th>
                                                    <th class="tb-col tb-col-md"><span class="overline-title">User
                                                            Email</span>
                                                    </th>
                                                    <th class="tb-col"><span class="overline-title">User Type</span></th>
                                                    <th class="tb-col tb-col-md"><span class="overline-title">Created
                                                            At</span></th>
                                                    <th class="tb-col tb-col-end" data-sortable="false"><span
                                                            class="overline-title">action</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td class="tb-col tb-col-md"><span>
                                                                {{ $user->name }}
                                                            </span></td>
                                                        <td class="tb-col tb-col-md"><span>
                                                                {{ $user->email }}
                                                            </span></td>
                                                        <td class="tb-col"><span class="badge text-bg-success-soft">
                                                                {{ $user->type }}
                                                            </span></td>
                                                        <td class="tb-col tb-col-md"><span>
                                                                {{ date('F j Y', strtotime($user->created_at)) }}
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
                                                                            {{-- <li><a href="edit-product.html"><em
                                                                                        class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                            </li>
                                                                            <li><a href="edit-product.html"><em
                                                                                        class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                            </li>
                                                                            <li><a href="products.html"><em
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
                    @else
                        <div class="row g-gs">
                            <div class="col-sm-12 col-xl-12 col-xxl-12">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="card-title-group align-items-start">
                                            <div class="card-title">
                                                <h4 class="title">Welcome to your dashboard</h4>
                                            </div>
                                            <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                                <em class="icon icon-md ni ni-user-alt-fill"></em>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-4">
                                            <div class="amount h1">Hello dear, {{ Auth::user()->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
