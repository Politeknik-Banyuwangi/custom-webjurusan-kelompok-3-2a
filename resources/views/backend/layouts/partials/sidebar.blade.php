<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('storage/images/logo.png') }}" class="brand-logo" />
                    <h2 class="brand-text mb-0">TI POLIWANGI</h2>
                </a>
            </li>
        </ul>
    </div>
    <div class="main-menu-content mt-2">
        <ul class="navigation navigation-main mb-3" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a data-toggle="ajax" href="{{ route('admin.dashboards') }}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>
            <li class="navigation-header">
                <span>General</span>
            </li>
            <li class="navigation-header">
                <span>Setting</span>
            </li>
            <li class=" nav-item">
                <a data-toggle="ajax" href="#">
                    <i class="feather icon-settings"></i>
                    <span class="menu-item" data-i18n="Pengaturan">Pengaturan</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
