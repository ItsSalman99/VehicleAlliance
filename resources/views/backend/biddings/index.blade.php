@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Vehicles For Bidding</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">vehicles</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                Vehicles For Bidding
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li><a href="add-product.html" class="btn btn-primary btn-md d-md-none"><em
                                                class="icon ni ni-plus"></em><span>Add</span></a></li>
                                    <li><a href="{{ route('biddings.create') }}"
                                            class="btn btn-primary d-none d-md-inline-flex"><em
                                                class="icon ni ni-plus"></em><span>Add Vehicle</span></a>
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
                                        <th class="tb-col"><span class="overline-title">Vehicle Name</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Vehicle Price</span>
                                        </th>
                                        <th class="tb-col"><span class="overline-title">Engine Capacity</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Transmission Type</span>
                                        </th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Model</span></th>
                                        <th class="tb-col tb-col-end" data-sortable="false"><span
                                                class="overline-title">action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehicles as $vehicle)
                                        <tr>
                                            <td class="tb-col tb-col-md"><span>
                                                {{ $vehicle->name }}
                                            </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                {{ $vehicle->price }}
                                            </span></td>
                                            <td class="tb-col"><span>
                                                {{ $vehicle->engine_capacity }}
                                            </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                {{ $vehicle->transmission_type }}
                                            </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                {{ $vehicle->year_model }}
                                            </span></td>
                                            <td class="tb-col tb-col-end">
                                                <div class="dropdown"><a href="#"
                                                        class="btn btn-sm btn-icon btn-zoom me-n1"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <div class="dropdown-content py-1">
                                                            <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                                <li><a href="{{ route('vehicle.edit', ['id'=>$vehicle->id]) }}"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="{{ route('vehicle.delete', ['id'=>$vehicle->id]) }}"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
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
