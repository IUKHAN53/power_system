<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="container-xxl">
        <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
            <a href="{{route('dashboard')}}" class="app-brand-link gap-2">
                <span class="app-brand-text demo menu-text fw-bold">Power System</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                <i class="mdi mdi-close align-middle"></i>
            </a>
        </div>
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
            </a>
        </div>
        <div class="content-wrapper">
        </div>
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item dropdown-language dropdown me-1 me-xl-0">
                    <a
                        class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                        href="javascript:void(0);"
                        data-bs-toggle="dropdown">
                        <i class="mdi mdi-translate mdi-24px"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                                <span class="align-middle">English</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                                <span class="align-middle">French</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                                <span class="align-middle">German</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                                <span class="align-middle">Portuguese</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item me-1 me-xl-0">
                    <a
                        class="nav-link btn btn-text-secondary rounded-pill btn-icon style-switcher-toggle hide-arrow"
                        href="javascript:void(0);">
                        <i class="mdi mdi-24px"></i>
                    </a>
                </li>
                <!--/ Style Switcher -->

                <!-- Quick links  -->
                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">
                    <a
                        class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                        href="javascript:void(0);"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                        aria-expanded="false">
                        <i class="mdi mdi-view-grid-plus-outline mdi-24px"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0">
                        <div class="dropdown-menu-header border-bottom">
                            <div class="dropdown-header d-flex align-items-center py-3">
                                <h5 class="text-body mb-0 me-auto">Calculator</h5>
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-shortcuts-add text-muted"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="Add shortcuts"
                                ><i class="mdi mdi-view-grid-plus-outline mdi-24px"></i
                                    ></a>
                            </div>
                        </div>
                        <div class="dropdown-shortcuts-list scrollable-container">
                            <div class="text-nowrap">
                                <table class="table table-striped table-hover table-bordered table-sm">
                                    <tbody>
                                    <tr>
                                        <td style="width:33.3%">Text A</td>
                                        <td style="width:33.3%"><input type="text" class="form-control"
                                                                       value="1.00%"></td>
                                        <td style="width:33.3%">0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Text B</td>
                                        <td><input type="text" class="form-control" value="1.00%"></td>
                                        <td>0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Text C</td>
                                        <td><input type="text" class="form-control" value="1.00%"></td>
                                        <td>0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Text D</td>
                                        <td><input type="text" class="form-control" value="1.00%"></td>
                                        <td>0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Text E</td>
                                        <td><input type="text" class="form-control" value="1.00%"></td>
                                        <td>0.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <button class="btn btn-warning btn-xs">Reset</button>
                                        </td>
                                        <td class="text-center"><input type="text" class="form-control"
                                                                       value="43.25"></td>
                                        <td class="text-center">
                                            <button class="btn btn-info btn-xs">Calc</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <div class="row">
                                                <div class="col-lg-6 text-center">
                                                    <button class="btn btn-danger btn-sm col-lg-8">-</button>
                                                </div>
                                                <div class="col-lg-6 text-center">
                                                    <button class="btn btn-info btn-sm col-lg-8">+</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Quick links -->

                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                    <a
                        class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                        href="javascript:void(0);"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                        aria-expanded="false">
                        <i class="mdi mdi-bell-outline mdi-24px"></i>
                        <span
                            class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end py-0">
                        <li class="dropdown-menu-header border-bottom">
                            <div class="dropdown-header d-flex align-items-center py-3">
                                <h6 class="mb-0 me-auto">Notification</h6>
                                <span class="badge rounded-pill bg-label-primary">8 New</span>
                            </div>
                        </li>
                        <li class="dropdown-notifications-list scrollable-container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <img src="../../assets/img/avatars/1.png" alt
                                                     class="w-px-40 h-auto rounded-circle"/>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">Congratulation Lettie 🎉</h6>
                                            <small class="text-truncate text-body">Won the monthly best seller
                                                gold badge</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">1h ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <span
                                                    class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">Charles Franklin</h6>
                                            <small class="text-truncate text-body">Accepted your
                                                connection</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">12hr ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <img src="../../assets/img/avatars/2.png" alt
                                                     class="w-px-40 h-auto rounded-circle"/>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">New Message ✉️</h6>
                                            <small class="text-truncate text-body">You have new message from
                                                Natalie</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">1h ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <span class="avatar-initial rounded-circle bg-label-success"
                                                ><i class="mdi mdi-cart-outline"></i
                                                    ></span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">Whoo! You have new order 🛒</h6>
                                            <small class="text-truncate text-body">ACME Inc. made new order
                                                $1,154</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">1 day ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <img src="../../assets/img/avatars/9.png" alt
                                                     class="w-px-40 h-auto rounded-circle"/>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">Application has been approved 🚀</h6>
                                            <small class="text-truncate text-body"
                                            >Your ABC project application has been approved.</small
                                            >
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">2 days ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <span class="avatar-initial rounded-circle bg-label-success"
                                                ><i class="mdi mdi-chart-pie-outline"></i
                                                    ></span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">Monthly report is generated</h6>
                                            <small class="text-truncate text-body">July monthly financial report
                                                is generated </small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <img src="../../assets/img/avatars/5.png" alt
                                                     class="w-px-40 h-auto rounded-circle"/>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">Send connection request</h6>
                                            <small class="text-truncate text-body">Peter sent you connection
                                                request</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">4 days ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <img src="../../assets/img/avatars/6.png" alt
                                                     class="w-px-40 h-auto rounded-circle"/>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">New message from Jane</h6>
                                            <small class="text-truncate text-body">Your have new message from
                                                Jane</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">5 days ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <span class="avatar-initial rounded-circle bg-label-warning"
                                                ><i class="mdi mdi-alert-circle-outline"></i
                                                    ></span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1">CPU is running high</h6>
                                            <small class="text-truncate text-body"
                                            >CPU Utilization Percent is currently at 88.63%,</small
                                            >
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">5 days ago</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-menu-footer border-top p-2">
                            <a href="javascript:void(0);" class="btn btn-info d-flex justify-content-center">
                                View all notifications
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                       data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="../../assets/img/avatars/1.png" alt
                                 class="w-px-40 h-auto rounded-circle"/>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="../../assets/img/avatars/1.png" alt
                                                 class="w-px-40 h-auto rounded-circle"/>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block">{{auth()->user()->name}}</span>
                                        <small class="text-muted">{{\App\Models\User::ROLES[auth()->user()->role]}}</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-profile-user.html">
                                <i class="mdi mdi-account-outline me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <i class="mdi mdi-cog-outline me-2"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-billing.html">
                                <span class="d-flex align-items-center align-middle">
                                    <i class="flex-shrink-0 mdi mdi-credit-card-outline me-2"></i>
                                    <span class="flex-grow-1 align-middle">Billing</span>
                                    <span
                                        class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-help-center-landing.html">
                                <i class="mdi mdi-lifebuoy me-2"></i>
                                <span class="align-middle">Help</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-faq.html">
                                <i class="mdi mdi-help-circle-outline me-2"></i>
                                <span class="align-middle">FAQ</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-pricing.html">
                                <i class="mdi mdi-currency-usd me-2"></i>
                                <span class="align-middle">Pricing</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                    <i class="mdi mdi-logout me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>
    </div>
</nav>
