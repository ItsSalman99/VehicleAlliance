<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Multi-purpose admin dashboard template that especially build for programmers.">
    <title>Dashboard - {{ config('app.name') }} </title>
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/css/style8a4f.css') }}">

</head>

<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <div class="nk-app-root">
        <div class="nk-main">
            @include('backend.partials.sidebar')
            <div class="nk-wrap">
                @include('backend.partials.header')
                @yield('content')

                @include('backend.partials.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/backend/assets/js/bundle.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/scripts.js') }}"></script>
    <div class="offcanvas offcanvas-end offcanvas-size-lg" id="notificationOffcanvas">
        <div class="offcanvas-header border-bottom border-light">
            <h5 class="offcanvas-title" id="offcanvasTopLabel">Recent Notification</h5><button type="button"
                class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" data-simplebar>
            <ul class="nk-schedule">
                <li class="nk-schedule-item">
                    <div class="nk-schedule-item-inner">
                        <div class="nk-schedule-symbol active"></div>
                        <div class="nk-schedule-content"><span class="smaller">2:12 PM</span>
                            <div class="h6">Added 3 New Images</div>
                            <ul class="d-flex flex-wrap gap g-2 py-2">
                                <li>
                                    <div class="media media-xxl"><img src="images/product/a.jpg" alt=""
                                            class="img-thumbnail"></div>
                                </li>
                                <li>
                                    <div class="media media-xxl"><img src="images/product/b.jpg" alt=""
                                            class="img-thumbnail"></div>
                                </li>
                                <li>
                                    <div class="media media-xxl"><img src="images/product/c.jpg" alt=""
                                            class="img-thumbnail"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nk-schedule-item">
                    <div class="nk-schedule-item-inner">
                        <div class="nk-schedule-symbol active"></div>
                        <div class="nk-schedule-content"><span class="smaller">4:23 PM</span>
                            <div class="h6">Invitation for creative designs pattern</div>
                        </div>
                    </div>
                </li>
                <li class="nk-schedule-item">
                    <div class="nk-schedule-item-inner">
                        <div class="nk-schedule-symbol active"></div>
                        <div class="nk-schedule-content nk-schedule-content-no-border"><span class="smaller">10:30
                                PM</span>
                            <div class="h6">Task report - uploaded weekly reports</div>
                            <div class="list-group-dotted mt-3">
                                <div class="list-group-wrap">
                                    <div class="p-3">
                                        <div class="media-group">
                                            <div class="media rounded-0"><img src="images/icon/file-type-pdf.svg"
                                                    alt="">
                                            </div>
                                            <div class="media-text ms-1"><a href="#" class="title">Modern
                                                    Designs
                                                    Pattern</a><span class="text smaller">1.6.mb</span></div>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="media-group">
                                            <div class="media rounded-0"><img src="images/icon/file-type-doc.svg"
                                                    alt="">
                                            </div>
                                            <div class="media-text ms-1"><a href="#" class="title">Cpanel
                                                    Upload
                                                    Guidelines</a><span class="text smaller">18kb</span></div>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="media-group">
                                            <div class="media rounded-0"><img src="images/icon/file-type-code.svg"
                                                    alt="">
                                            </div>
                                            <div class="media-text ms-1"><a href="#" class="title">Weekly
                                                    Finance
                                                    Reports</a><span class="text smaller">10mb</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nk-schedule-item">
                    <div class="nk-schedule-item-inner">
                        <div class="nk-schedule-symbol active"></div>
                        <div class="nk-schedule-content"><span class="smaller">3:23 PM</span>
                            <div class="h6">Assigned you to new database design project</div>
                        </div>
                    </div>
                </li>
                <li class="nk-schedule-item">
                    <div class="nk-schedule-item-inner">
                        <div class="nk-schedule-symbol active"></div>
                        <div class="nk-schedule-content nk-schedule-content-no-border flex-grow-1"><span
                                class="smaller">5:05 PM</span>
                            <div class="h6">You have received a new order</div>
                            <div class="alert alert-info mt-2" role="alert">
                                <div class="d-flex"><em class="icon icon-lg ni ni-file-code opacity-75"></em>
                                    <div class="ms-2 d-flex flex-wrap flex-grow-1 justify-content-between">
                                        <div>
                                            <h6 class="alert-heading mb-0">Business Template - UI/UX design</h6><span
                                                class="smaller">Shared information with your team to understand and
                                                contribute to your project.</span>
                                        </div>
                                        <div class="d-block mt-1"><a href="#" class="btn btn-md btn-info"><em
                                                    class="icon ni ni-download"></em><span>Download</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nk-schedule-item">
                    <div class="nk-schedule-item-inner">
                        <div class="nk-schedule-symbol active"></div>
                        <div class="nk-schedule-content"><span class="smaller">2:45 PM</span>
                            <div class="h6">Project status updated successfully</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/charts/analytics-chart.js"></script>
    @include('sweetalert::alert')

    @stack('extra-js')

</body>

</html>
