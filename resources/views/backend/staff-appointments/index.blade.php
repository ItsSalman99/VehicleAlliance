@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">My Services Appointments</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Appointments</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                My Services Appointments
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
                                                Buyer
                                            </span></th>
                                        <th class="tb-col"><span class="overline-title">
                                                Buyer Contact
                                            </span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Created At</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $key => $appointments)
                                        <tr>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $key + 1 }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $appointments->appointment->service->name }}
                                                </span></td>
                                            <td class="tb-col"><span class="badge text-bg-success-soft">
                                                    {{ $appointments->appointment->service->price }}
                                                </span></td>

                                            <td class="tb-col"><span class="badge text-bg-success-soft">
                                                    {{ $appointments->appointment->user->name }}
                                                </span></td>
                                            <td class="tb-col"><span class="badge text-bg-success-soft">
                                                    {{ $appointments->appointment->user->phone }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ date('F j Y', strtotime($appointments->created_at)) }}
                                                </span></td>
                                            <td class="tb-col tb-col-end">
                                                <div class="d-flex gap-4 justify-content-end">
                                                    @if ($appointments->status != 'Cancel' && $appointments->status != 'Completed')
                                                        <div>
                                                            <form method="POST"
                                                                action="{{ route('staff.appointments.status', ['id' => $appointments->id]) }}">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-soft btn-outline-primary">
                                                                    <span>
                                                                        {{ $appointments->status }}
                                                                    </span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div>
                                                            <form method="POST"
                                                                action="{{ route('staff.appointments.cancel', ['id' => $appointments->id]) }}">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-soft btn-outline-danger">
                                                                    <span>
                                                                        Cancel
                                                                    </span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    @elseif($appointments->status === 'Completed')
                                                        <div>
                                                            <span class="badge text-bg-success-soft">
                                                                Completed
                                                            </span>
                                                        </div>
                                                    @else
                                                        <div>
                                                            <span class="badge text-bg-success-soft">
                                                                Canceled
                                                            </span>
                                                        </div>
                                                    @endif
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
