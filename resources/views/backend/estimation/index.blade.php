@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">All Estimations</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Estimation</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                All Estimation
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
                                        <th class="tb-col"><span class="overline-title">Vehicle Name</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Vehicle Model</span>
                                        </th>
                                        <th class="tb-col"><span class="overline-title">Issue</span></th>
                                        <th class="tb-col"><span class="overline-title">Min. Estimation Price</span></th>
                                        <th class="tb-col"><span class="overline-title">Max. Estimation Price</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Created At</span></th>
                                        <th class="tb-col tb-col-end" data-sortable="false"><span
                                                class="overline-title">action</span></th>
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
                                            <td class="tb-col tb-col-end">
                                                <div class="dropdown"><a href="#"
                                                        class="btn btn-sm btn-icon btn-zoom me-n1"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <div class="dropdown-content py-1">
                                                            <ul class="link-list link-list-hover-bg-primary link-list-md">

                                                                <li>
                                                                    <a
                                                                        href="{{ route('estimation.issue.delete', ['id' => $estimation->id]) }}"><em
                                                                            class="icon ni ni-trash"></em><span>
                                                                                Delete
                                                                        </span></a>
                                                                </li>
                                                                {{-- <li><a href="edit-product.html"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="edit-product.html"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li> --}}
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
