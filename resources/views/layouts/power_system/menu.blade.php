<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100" style="background: transparent!important;">
        <ul class="menu-inner overflow-auto" style="background: transparent!important;">
            <li class="menu-item {{request()->is('dashboard') ? 'active' : ''}}">
                <a href="{{route('dashboard')}}" class="menu-link ">
                    <i class="menu-icon tf-icons mdi mdi-chart-timeline-variant"></i>
                    <div data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>
            <li class="menu-item {{request()->is('numbers') ? 'active' : ''}}">
                <a href="{{route('numbers')}}" class="menu-link ">
                    <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                    <div data-i18n="Number List">Number List</div>
                </a>
            </li>
            <li class="menu-item {{request()->is('ra_dates') ? 'active' : ''}}">
                <a href="{{route('ra_dates')}}" class="menu-link ">
                    <i class="menu-icon tf-icons mdi mdi-calendar-blank-outline"></i>
                    <div data-i18n="RA Dates">RA Dates</div>
                </a>
            </li>
            @if(can_access('transactions'))
                <li class="menu-item {{request()->is('transactions') ? 'active' : ''}}">
                    <a href="{{route('transactions')}}" class="menu-link ">
                        <i class="menu-icon tf-icons mdi mdi-format-list-group"></i>
                        <div data-i18n="Transactions">Transactions</div>
                    </a>
                </li>
            @endif
            @if(can_access('users'))
                <li class="menu-item {{request()->is('users') ? 'active' : ''}}">
                    <a href="{{route('users')}}" class="menu-link ">
                        <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                        <div data-i18n="Users">Users</div>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</aside>
