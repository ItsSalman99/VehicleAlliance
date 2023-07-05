@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">All Users</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                All Users
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
                                                @if ($user->type != 'admin')
                                                    <div class="dropdown"><a href="#"
                                                            class="btn btn-sm btn-icon btn-zoom me-n1"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-v"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                            <div class="dropdown-content py-1">
                                                                <ul
                                                                    class="link-list link-list-hover-bg-primary link-list-md">
                                                                    <li><a
                                                                            href="{{ route('users.delete', ['id' => $user->id]) }}"><em
                                                                                class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                    </li>
                                                                    {{-- @if ($user->type == 'staff' || $user->type == 'seller')
                                                                        <li>
                                                                            <button onclick="" type="button"
                                                                                class="btn btn-primary btn-sm"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#assignStaffModal">
                                                                                Change Password
                                                                            </button>
                                                                        </li>
                                                                    @endif --}}
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


    <!-- Modal -->
    <div class="modal fade" id="assignStaffModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Assign To Staff</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="passwordForm" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="password" required class="form-control" id="">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Change Paassword</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @push('extra-js')
        <script>
            function getStaffs(id) {
                $('#passwordForm').attr('action', '/admin//user/change-password/' + id);

            }
        </script>
    @endpush
@endsection
