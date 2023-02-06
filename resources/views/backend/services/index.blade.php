@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">All Services</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Services</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                All Services
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
                                        <th class="tb-col tb-col-md"><span class="overline-title">Service Thumbnail</span>
                                        <th class="tb-col"><span class="overline-title">Service Name</span></th>
                                        </th>
                                        <th class="tb-col"><span class="overline-title">Price</span></th>
                                        <th class="tb-col"><span class="overline-title">Available Time</span></th>
                                        <th class="tb-col"><span class="overline-title">Available Date</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Created At</span></th>
                                        <th class="tb-col tb-col-end" data-sortable="false"><span
                                                class="overline-title">action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td class="tb-col tb-col-md" style="width: 200px">
                                                <img src="{{ $service->img }}" width="20%" height="20%" alt="">
                                            </td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $service->name }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    Pkr. {{ $service->price }}
                                                </span></td>
                                            <td class="tb-col"><span class="badge text-bg-success-soft">
                                                    {{ $service->available_stime . ' - ' . $service->available_etime }}
                                                </span></td>
                                            <td class="tb-col"><span class="badge text-bg-success-soft">
                                                    {{ $service->start_available_date . ' - ' . $service->end_available_date }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ date('F j Y', strtotime($service->created_at)) }}
                                                </span></td>
                                            <td class="tb-col tb-col-end">
                                                <div class="dropdown"><a href="#"
                                                        class="btn btn-sm btn-icon btn-zoom me-n1"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <div class="dropdown-content py-1">
                                                            <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                                <li><a href="{{ route('services.edit', ['id'=>$service->id]) }}"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                </li>
                                                                <li><a href="{{ route('services.delete', ['id'=>$service->id]) }}"><em
                                                                            class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                </li>
                                                                <li><a href="products.html"><em
                                                                            class="icon ni ni-eye"></em><span>View
                                                                            Details</span></a></li>
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
