@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2 align-items-start">
                                <div class="nk-block-head-content">
                                    <div class="d-flex flex-column flex-md-row align-items-md-center">
                                        <div class="media media-huge media-circle"><img src="{{ $vehicle->img }}"
                                                class="img-thumbnail" alt="">
                                        </div>
                                        <div class="mt-3 mt-md-0 ms-md-3">
                                            <h3 class="title mb-1">
                                                Bidd#{{ $vehicle->id }}
                                            </h3>
                                            <span class="small">
                                                {{ $vehicle->name }}
                                            </span>
                                            <ul class="nk-list-option pt-1">
                                                <li><em class="icon ni ni-price"></em><span class="small">
                                                        {{ 'Rs. ' . $vehicle->min_price . ' to Rs. ' . $vehicle->max_price }}
                                                    </span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block ">
                        <h4 class="bio-block-title">Bidders</h4>
                        <table class="datatable-init table" data-nk-container="table-responsive">
                            <thead class="table-light">
                                <tr>
                                    <th class="tb-col"><span class="overline-title">#</span>
                                    </th>
                                    <th class="tb-col tb-col-md"><span class="overline-title">
                                            Customer
                                        </span>
                                    </th>
                                    <th class="tb-col"><span class="overline-title">Price</span>
                                    </th>
                                    <th class="tb-col tb-col-md"><span class="overline-title">Phone</span></th>
                                    <th class="tb-col tb-col-md"><span class="overline-title">Confirmed</span></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicle->user_bidings as $key => $item)
                                    <tr>
                                        <td class="tb-col tb-col-md"><span>
                                                #{{ $key + 1 }}
                                            </span></td>
                                        <td class="tb-col tb-col-md"><span>
                                                {{ $item->user->name }}
                                            </span></td>
                                        <td class="tb-col"><span class="badge text-bg-success-soft">
                                                Rs. {{ $item->price }}
                                            </span></td>
                                        <td class="tb-col"><span class="badge text-bg-success-soft">
                                                {{ $item->user->phone }}
                                            </span></td>
                                        @if ($vehicle->active == 1)
                                            @if ($item->confirmed == 1)
                                                <td class="tb-col">
                                                    Confirmed
                                                </td>
                                            @endif
                                        @else
                                            <td class="tb-col">
                                                <a href="{{ route('biddings.vehicles.confirm', ['id' => $item->id]) }}"
                                                    class="btn btn-success">
                                                    Confirm
                                                </a>
                                            </td>
                                        @endif

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
