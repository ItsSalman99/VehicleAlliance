<div class="nk-sidebar nk-sidebar-fixed is-theme" id="sidebar">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand"><a href="index.html" class="logo-link">
                <div class="logo-wrap">
                    <span class="text-white" style="font-size: 20px;">
                        Vehicle Alliance
                    </span>
                </div>
            </a>
            <div class="nk-compact-toggle me-n1"><button
                    class="btn btn-md btn-icon text-light btn-no-hover compact-toggle"><em
                        class="icon off ni ni-chevrons-left"></em><em
                        class="icon on ni ni-chevrons-right"></em></button></div>
            <div class="nk-sidebar-toggle me-n1"><button
                    class="btn btn-md btn-icon text-light btn-no-hover sidebar-toggle"><em
                        class="icon ni ni-arrow-left"></em></button></div>
        </div>
    </div>
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item"><a href="{{ route('dashboard') }}" class="nk-menu-link"><span
                                class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span><span
                                class="nk-menu-text">Dashboard</span></a></li>

                    @if (Auth::user()->type == 'admin')
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Application Settings</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Application Slider</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('slider.create') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Manage Slider</span></a></li>
                            </ul>
                        </li>

                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Users</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Users</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('users.index') }}" class="nk-menu-link"><span
                                            class="nk-menu-text">All Users</span></a></li>
                            </ul>
                        </li>
                        {{-- <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Users Subscription</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('subscriptions.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">All Subscribed Users</span></a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Manage Staffs</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Staffs</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('staffs.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">All Staffs</span></a></li>
                            </ul>
                        </li>
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Services</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Services</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('services.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">All Services</span></a></li>
                                <li class="nk-menu-item"><a href="{{ route('services.create') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Add Service</span></a></li>
                            </ul>
                        </li>

                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Services Appointments</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Services Appointments</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('appointments.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">All Appointmented
                                            Services</span></a></li>
                            </ul>
                        </li>

                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Orders</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Product Orders</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('orders.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">
                                            Manage Orders
                                        </span></a></li>
                            </ul>
                        </li>


                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Application Rewards</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Rewards</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('rewards.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">View</span></a></li>
                            </ul>
                        </li>


                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Poll</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">User Poll</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('poll.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">View</span></a></li>
                            </ul>
                        </li>

                  		<li class="nk-menu-heading">
                            <h6 class="overline-title">Fuel</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Fuel</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('fuels.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">View</span></a></li>
                                <li class="nk-menu-item"><a href="{{ route('fuels.create') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Add More</span></a></li>
                            </ul>
                        </li>
						<li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Fuel Requests</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('fuelsrequests.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">View</span></a></li>
                            </ul>
                        </li>

                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Estimation</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Vehicle</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('vehicle.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">All Vehicle</span></a></li>
                                <li class="nk-menu-item"><a href="{{ route('vehicle.create') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Add Vehicle</span></a></li>
                                <li class="nk-menu-item"><a href="{{ route('vehicle.issues.create') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">
                                            Vehicle Issues
                                        </span></a></li>
                                {{-- <li class="nk-menu-item"><a class="nk-menu-link"><span class="nk-menu-text">
                                            Vehicle Parts
                                        </span></a></li> --}}
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Estimation</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('estimation.issue') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Vehicle Service
                                            Estimation</span></a></li>
                                {{-- <li class="nk-menu-item"><a href="apps/kanban/kanban-basic.html"
                                        class="nk-menu-link"><span class="nk-menu-text">Vehicle Parts
                                            Estimation</span></a></li> --}}
                            </ul>
                        </li>
                    @elseif(Auth::user()->type == 'seller')
                        {{-- <li class="nk-menu-heading">
                            <h6 class="overline-title">Shop</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Shop</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('manage-shop') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Manage Shop</span></a></li>
                            </ul>
                        </li> --}}
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Proucts</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Products</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('product.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Manage Products</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">My Orders</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('orders.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Manage Order</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Vehicles Bidding</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Vehicles Bidding</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('biddings.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Manage Bidding</span></a>
                                </li>
                            </ul>
                        </li>

                    @elseif(Auth::user()->type == 'staff')
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">My Services Appointments</h6>
                        </li>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span
                                    class="nk-menu-text">Services Appointments</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('staff.appointments') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Manage Services
                                            Appointments</span></a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
