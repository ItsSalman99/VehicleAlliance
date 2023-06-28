@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Fuel Requests</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">User Fuel Requests</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                All Fuel Requests
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
                                        <th class="tb-col"><span class="overline-title">#</span></th>
                                        <th class="tb-col tb-col-md">
                                          <span class="overline-title">
                                          	User
                                          </span>
                                        </th>
                                        <th class="tb-col"><span class="overline-title">Fuel</span></th>
                                        <th class="tb-col"><span class="overline-title">Total</span></th>
                                        <th class="tb-col"><span class="overline-title">Contact#</span></th>
                                        <th class="tb-col"><span class="overline-title">Address#</span></th>
                                        <th class="tb-col tb-col-md"><span class="overline-title">Created At</span></th>
                                        <th class="tb-col tb-col-end" data-sortable="false"><span
                                                class="overline-title">action</span></th>
                                      <th class="tb-col tb-col-end" data-sortable="false"><span
                                                class="overline-title">action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fuelrequests as $key => $fuelrequest)
                                  		<tr>
                                          
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $key + 1 }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $fuelrequest->user->name }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $fuelrequest->fuel->name }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                   Rs. {{ $fuelrequest->fuel->price }} Pkr
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $fuelrequest->contact }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ $fuelrequest->address }}
                                                </span></td>
                                            <td class="tb-col tb-col-md"><span>
                                                    {{ date('F j Y', strtotime($fuelrequest->created_at)) }}
                                                </span></td>
                                          @if($fuelrequest->status != 'Cancelled')
		                                  	<td class="tb-col tb-col-md">
                                              <a href="{{ route('fuelsrequests.delivered', ['id' => $fuelrequest->id]) }}" class="btn btn-primary">
                                                  Delivered
                                              </a>
                                          	</td>
                                          @else
                                          	<td class="tb-col tb-col-md">
                                              Cancelled
                                          	</td>
                                          @endif
                                           @if($fuelrequest->status != 'Delivered')
		                                  	<td class="tb-col tb-col-md">
                                              <a href="{{ route('fuelsrequests.cancel', ['id' => $fuelrequest->id]) }}" class="btn btn-primary">
                                                  Cancel
                                              </a>
                                          	</td>
                                          @else
                                          	<td class="tb-col tb-col-md">
                                              Delivered
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
    </div>
@endsection
