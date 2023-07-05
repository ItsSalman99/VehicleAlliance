@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">All Appointments</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Appointments</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                All Appointments
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
                                        <th class="tb-col"><span class="overline-title">
                                                #
                                            </span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">
                                                Service
                                            </span>
                                        </th>
                                        <th class="tb-col"><span class="overline-title">
                                                Price
                                            </span></th>
                                        <th class="tb-col"><span class="overline-title">
                                                User
                                            </span></th>
                                        <th class="tb-col"><span class="overline-title">
                                                User Contact
                                            </span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Created At</span></th>
                                        <th class="tb-col tb-col-end" data-sortable="false"><span
                                                class="overline-title">action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $key => $appointments)
                                        <tr>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $key + 1 }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $appointments->service->name }}
                                                </span></td>
                                            <td class="tb-col"><span class="badge text-bg-success-soft">
                                                    {{ $appointments->service->price }}
                                                </span></td>
                                            <td class="tb-col"><span class="badge text-bg-success-soft">
                                                    {{ $appointments->user->name }}
                                                </span></td>
                                            <td class="tb-col"><span class="badge text-bg-success-soft">
                                                    {{ $appointments->user->phone }}
                                                </span></td>
                                            <td class="tb-col"><span class="badge text-bg-success-soft">
                                                    {{ $appointments->status }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ date('F j Y', strtotime($appointments->created_at)) }}
                                                </span></td>
                                            <td class="tb-col tb-col-end">
                                                @if (count($appointments->staffappointment) == 0)
                                                    <button onclick="getStaffs({{ $appointments->id }})" type="button"
                                                        class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#assignStaffModal">
                                                        Assign
                                                    </button>
                                                @else
                                                    <button type="button" class="btn btn-success btn-sm" disabled>
                                                        Already Assigned
                                                    </button>
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
                    <form id="staffForm" method="POST">
                        @csrf
                        <input type="text" hidden name="appointments_id" id="appointments_id">
                        <div>
                            <select id="staffs" class="form-control" name="staffs">

                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Assign Staff</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @push('extra-js')
        <script>
            function getStaffs(id) {
                $('#staffForm').attr('action', '/admin/appointments/assign');

                $.ajax({
                    url: '/admin/getAllStaffs',
                    method: 'GET',
                    success: function(response) {
                        $('#appointments_id').val(id)
                        $('#staffs').empty();
                        $('#staffs').append('<option>Select Staff</option>')
                        $.each(response.data, function(key, value) {
                            $('#staffs').append('<option value="' + value.id + '">' + value.name +
                                '</option>')
                        })
                    }
                })
            }
        </script>
    @endpush
@endsection
