@extends('backend.layout.main')

@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="row g-gs">
                        <div class="col-sm-6 col-xl-6 col-xxl-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start">
                                        <div class="card-title">
                                            <h4 class="title">Admins</h4>
                                        </div>
                                        <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                            <em class="icon icon-md ni ni-user-alt-fill"></em>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-4">
                                        <div class="amount h1">{{ $admins }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-6 col-xxl-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start">
                                        <div class="card-title">
                                            <h4 class="title">Buyers</h4>
                                        </div>
                                        <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                            <em class="icon icon-md ni ni-user-alt-fill"></em>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-4">
                                        <div class="amount h1">{{ $buyer }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-6 col-xxl-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group align-items-start">
                                        <div class="card-title">
                                            <h4 class="title">Sellers</h4>
                                        </div>
                                        <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                            <em class="icon icon-md ni ni-user-alt-fill"></em>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-4">
                                        <div class="amount h1">{{ $seller }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="card h-100">
                                <div class="card-body flex-grow-0 py-2">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">Top Referral Sources</h5>
                                        </div>
                                        <div class="card-tools">
                                            <div class="dropdown"><a href="#"
                                                    class="btn btn-sm btn-icon btn-zoom me-n1"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <li>
                                                        <div class="dropdown-header pt-2 pb-0">
                                                            <h6 class="mb-0">Options</h6>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a href="#" class="dropdown-item">7 Days</a>
                                                    </li>
                                                    <li><a href="#" class="dropdown-item">15
                                                            Days</a></li>
                                                    <li><a href="#" class="dropdown-item">30
                                                            Days</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-middle mb-0">
                                        <thead class="table-light table-head-sm">
                                            <tr>
                                                <th class="tb-col"><span class="overline-title">source</span></th>
                                                <th class="tb-col tb-col-end"><span class="overline-title">visitors</span>
                                                </th>
                                                <th class="tb-col tb-col-end"><span class="overline-title">revenues</span>
                                                </th>
                                                <th class="tb-col tb-col-end"><span class="overline-title">sales</span>
                                                </th>
                                                <th class="tb-col tb-col-end"><span
                                                        class="overline-title">conversion</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div
                                                            class="media media-md flex-shrink-0 media-middle media-circle text-bg-dark">
                                                            <em class="icon ni ni-github-circle"></em>
                                                        </div>
                                                        <div class="media-text"><span class="title">github.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="small">2.4K</span></td>
                                                <td class="tb-col tb-col-end"><span class="change up small">$3.877</span>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="small">267</span>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="text-info small">4.7%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div
                                                            class="media media-md flex-shrink-0 media-middle media-circle text-bg-info">
                                                            <em class="icon ni ni-twitter"></em>
                                                        </div>
                                                        <div class="media-text"><span class="title">twitter.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="small">2.2K</span></td>
                                                <td class="tb-col tb-col-end"><span class="change up small">$3.444</span>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="small">265</span>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="text-info small">4.5%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div
                                                            class="media media-md flex-shrink-0 media-middle media-circle text-bg-danger">
                                                            <em class="icon ni ni-google"></em>
                                                        </div>
                                                        <div class="media-text"><span class="title">google.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="small">2.1K</span></td>
                                                <td class="tb-col tb-col-end"><span class="change up small">$3.232</span>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="small">264</span>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="text-info small">4.3%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div
                                                            class="media media-md flex-shrink-0 media-middle media-circle text-bg-success">
                                                            <em class="icon ni ni-vimeo"></em>
                                                        </div>
                                                        <div class="media-text"><span class="title">vimeo.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="small">2.0K</span></td>
                                                <td class="tb-col tb-col-end"><span class="change up small">$3.212</span>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="small">261</span>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="text-info small">4.1%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tb-col">
                                                    <div class="media-group">
                                                        <div
                                                            class="media media-md flex-shrink-0 media-middle media-circle text-bg-warning">
                                                            <em class="icon ni ni-digital-ocean"></em>
                                                        </div>
                                                        <div class="media-text"><span
                                                                class="title">digital-ocean.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="small">1.8K</span></td>
                                                <td class="tb-col tb-col-end"><span class="change up small">$3.105</span>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="small">260</span>
                                                </td>
                                                <td class="tb-col tb-col-end"><span class="text-info small">3.1%</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">Sessions Device</h5>
                                        </div>
                                        <div class="card-tools"><em class="icon-hint icon ni ni-help-fill"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Sessions from device"></em></div>
                                    </div>
                                    <div class="nk-chart-analytics-session-device mt-4"><canvas data-nk-chart="doughnut"
                                            id="sessionsDevice"></canvas></div>
                                    <div class="chart-legend-group justify-content-around pt-4 flex-wrap gap g-2">
                                        <div class="chart-legend"><span class="dot bg-info"></span>
                                            <div class="chart-legend-text">
                                                <div class="title">Mobile</div>
                                            </div>
                                        </div>
                                        <div class="chart-legend"><span class="dot bg-warning"></span>
                                            <div class="chart-legend-text">
                                                <div class="title">Tablet</div>
                                            </div>
                                        </div>
                                        <div class="chart-legend"><span class="dot bg-success"></span>
                                            <div class="chart-legend-text">
                                                <div class="title">Desktop</div>
                                            </div>
                                        </div>
                                        <div class="chart-legend"><span class="dot bg-purple"></span>
                                            <div class="chart-legend-text">
                                                <div class="title">Others</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">Recent Activity</h5>
                                        </div>
                                    </div>
                                    <div class="nk-timeline nk-timeline-center mt-4">
                                        <div class="nk-timeline-group">
                                            <div class="nk-timeline-heading">
                                                <h6 class="overline-title">today</h6>
                                            </div>
                                            <ul class="nk-timeline-list">
                                                <li class="nk-timeline-item">
                                                    <div class="nk-timeline-item-inner">
                                                        <div class="nk-timeline-symbol">
                                                            <div
                                                                class="media media-md media-middle media-circle text-bg-info">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                        </div>
                                                        <div class="nk-timeline-content">
                                                            <p class="small"><strong>Nick Mark</strong>
                                                                mentioned <strong>Sara Smith</strong> in a
                                                                new post</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nk-timeline-item">
                                                    <div class="nk-timeline-item-inner">
                                                        <div class="nk-timeline-symbol">
                                                            <div
                                                                class="media media-md media-middle media-circle text-bg-warning">
                                                                <em class="icon ni ni-signout"></em>
                                                            </div>
                                                        </div>
                                                        <div class="nk-timeline-content">
                                                            <p class="small">The post <strong>Post
                                                                    Name</strong> was removed by
                                                                <strong>Nick Mark</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nk-timeline-item">
                                                    <div class="nk-timeline-item-inner">
                                                        <div class="nk-timeline-symbol">
                                                            <div
                                                                class="media media-md media-middle media-circle text-bg-success">
                                                                <em class="icon ni ni-file-text"></em>
                                                            </div>
                                                        </div>
                                                        <div class="nk-timeline-content">
                                                            <p class="small"><strong>Patrick
                                                                    Sullivan</strong> published a new
                                                                <strong>post</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-timeline-group">
                                            <div class="nk-timeline-heading">
                                                <h6 class="overline-title">yesterday</h6>
                                            </div>
                                            <ul class="nk-timeline-list">
                                                <li class="nk-timeline-item">
                                                    <div class="nk-timeline-item-inner">
                                                        <div class="nk-timeline-symbol">
                                                            <div
                                                                class="media media-md media-middle media-circle text-bg-info">
                                                                <em class="icon ni ni-shuffle"></em>
                                                            </div>
                                                        </div>
                                                        <div class="nk-timeline-content">
                                                            <p class="small"><strong>240+</strong> users
                                                                have subscribed to Newsletter #1 </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nk-timeline-item">
                                                    <div class="nk-timeline-item-inner">
                                                        <div class="nk-timeline-symbol">
                                                            <div
                                                                class="media media-md media-middle media-circle text-bg-success">
                                                                <em class="icon ni ni-signout"></em>
                                                            </div>
                                                        </div>
                                                        <div class="nk-timeline-content">
                                                            <p class="small">The post <strong>Post
                                                                    Name</strong> was suspended by
                                                                <strong>Nick Mark</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">Web Sessions by Region</h5>
                                        </div>
                                        <div class="card-tools"><em class="icon-hint icon ni ni-help-fill"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Web Sessions from region"></em></div>
                                    </div>
                                    <div class="nk-chart-analytics-session-region-map mt-3 mx-auto">
                                        <div class="js-svgmap js-svgmap-zoom-off" id="svgWorldMap">
                                        </div>
                                    </div>
                                    <div class="list-group-heading d-flex align-items-center justify-content-between">
                                        <h6 class="title">Top Region</h6>
                                        <h6 class="title">Sessions</h6>
                                    </div>
                                    <ul class="list-group list-group-borderless list-group-sm">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center smaller">
                                            <span class="title">United States</span><span class="text">8,465</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center smaller">
                                            <span class="title">United Kingdom</span><span class="text">6,423</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center smaller">
                                            <span class="title">Canada</span><span class="text">5,764</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center smaller">
                                            <span class="title">Germany</span><span class="text">1,374</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center smaller">
                                            <span class="title">Bangladesh</span><span class="text">890</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
