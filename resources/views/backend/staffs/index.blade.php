@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">All Staffs</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Staffs</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                All Staffs
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li><a href="add-product.html" class="btn btn-primary btn-md d-md-none"><em
                                                class="icon ni ni-plus"></em><span>Add</span></a></li>
                                    <li><a href="{{ route('staffs.create') }}"
                                            class="btn btn-primary d-none d-md-inline-flex"><em
                                                class="icon ni ni-plus"></em><span>Add New Staff</span></a>
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
                                        <th class="tb-col"><span class="overline-title">User Name</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">User Email</span>
                                        </th>
                                        <th class="tb-col"><span class="overline-title">User Type</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Created At</span></th>
                                        <th class="tb-col tb-col-end" data-sortable="false"><span
                                                class="overline-title">action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($staffs as $user)
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
                                                @if ($user->type != 'admin')
                                                    <div class="dropdown"><a href="#"
                                                            class="btn btn-sm btn-icon btn-zoom me-n1"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-v"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                            <div class="dropdown-content py-1">
                                                                <ul
                                                                    class="link-list link-list-hover-bg-primary link-list-md">
                                                                    <li><a href="{{ route('staffs.delete', ['id'=>$user->id]) }}"><em
                                                                                class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                    </li>
                                                                    {{-- <li><a href="products.html"><em
                                                                        class="icon ni ni-eye"></em><span>View
                                                                            Details</span></a></li> --}}
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
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
