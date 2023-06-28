@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Fuels</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Fuels</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                All Fuels
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
                                        <th class="tb-col"><span class="overline-title">Name</span></th>
                                        <th class="tb-col"><span class="overline-title">Price</span></th>
                                      	<th class="tb-col tb-col-md"><span class="overline-title">Created At</span></th>
                                        {{-- <th class="tb-col tb-col-end" data-sortable="false"><span
                                                class="overline-title">action</span></th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fuels as $fuel)
                                        <tr>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $fuel->name }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $fuel->price }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ date('F j Y', strtotime($fuel->created_at)) }}
                                                </span></td>

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
