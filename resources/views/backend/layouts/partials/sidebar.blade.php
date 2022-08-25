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
                <a data-toggle="ajax" href="{{ route('dashboards') }}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>
            <li class="navigation-header">
                <span>Master Data</span>
            </li>
            @canany(['read-achievement-levels', 'read-achievement-types'])
                <li class="nav-item"><a href="#"><i class="feather icon-award"></i><span class="menu-title"
                            data-i18n="Prestasi">Prestasi</span></a>
                    <ul class="menu-content">
                        @can('read-achievement-types')
                            <li><a href="{{ route('achievement-types') }}" data-toggle="ajax">
                                    <i class="feather icon-circle"></i><span class="menu-item" data-i18n="Jenis Prestasi">Jenis
                                        Prestasi</span></a>
                            </li>
                        @endcan
                        @can('read-achievement-levels')
                            <li><a href="{{ route('achievement-levels') }}" data-toggle="ajax">
                                    <i class="feather icon-circle"></i><span class="menu-item"
                                        data-i18n="Tingkat Prestasi">Tingkat Prestasi</span></a>
                            </li>
                        @endcan
                        <li><a href="{{route('achievements')}}" data-toggle="ajax">
                                <i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Prestasi Mahasiswa">Prestasi Mahasiswa</span></a>
                        </li>
                    </ul>
                </li>
            @endcanany
            @canany(['read-document-types'])
                <li class="nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title"
                            data-i18n="Arsip Dokumen">Arsip Dokumen</span></a>
                    <ul class="menu-content">
                        @can('read-document-types')
                            <li><a href="{{ route('document-types') }}" data-toggle="ajax">
                                    <i class="feather icon-circle"></i><span class="menu-item" data-i18n="Jenis Arsip">Jenis
                                        Arsip</span></a>
                            </li>
                        @endcan
                        <li><a href="#" data-toggle="ajax">
                                <i class="feather icon-circle"></i><span class="menu-item" data-i18n="Dokumen Arsip">Dokumen
                                    Arsip</span></a>
                        </li>
                    </ul>
                </li>
            @endcanany
            @canany(['read-employees', 'read-employee-types'])
                <li class="nav-item"><a href="#"><i class="feather icon-users"></i><span class="menu-title"
                            data-i18n="Staff Dosen">Staff Dosen</span></a>
                    <ul class="menu-content">
                        @can('read-employee-types')
                            <li><a href="{{ route('employee-types') }}" data-toggle="ajax">
                                    <i class="feather icon-circle"></i><span class="menu-item" data-i18n="Jenis Staff">Jenis
                                        Staff</span></a>
                            </li>
                        @endcan
                        @can('read-employees')
                            <li><a href="{{ route('employees') }}" data-toggle="ajax">
                                    <i class="feather icon-circle"></i><span class="menu-item"
                                        data-i18n="Staff">Staff</span></a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcanany
            @canany(['read-cooperation-types', 'read-cooperation-fields'])
                <li class="nav-item"><a href="#"><i class="feather icon-briefcase"></i><span class="menu-title"
                            data-i18n="Kerja Sama Industri">Kerja Sama Industri</span></a>
                    <ul class="menu-content">
                        <li><a href="#" data-toggle="ajax">
                                <i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Industri">Industri</span></a>
                        </li>
                        @can('read-cooperation-fields')
                            <li><a href="{{ route('cooperation-fields') }}" data-toggle="ajax">
                                    <i class="feather icon-circle"></i><span class="menu-item"
                                        data-i18n="Bidang Kerjasama">Bidang Kerjasama</span></a>
                            </li>
                        @endcan
                        @can('read-cooperation-types')
                            <li><a href="{{ route('cooperation-types') }}" data-toggle="ajax">
                                    <i class="feather icon-circle"></i><span class="menu-item" data-i18n="Jenis Kerjasama">Jenis
                                        Kerjasama</span></a>
                            </li>
                        @endcan
                        <li><a href="#" data-toggle="ajax">
                                <i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Kerjasama Industri">Kerjasama Industri</span></a>
                        </li>
                    </ul>
                </li>
            @endcanany
            <li class=" nav-item">
                <a data-toggle="ajax" href="#">
                    <i class="feather icon-calendar"></i>
                    <span class="menu-item" data-i18n="Event">Event</span>
                </a>
            </li>
            <li class="navigation-header">
                <span>Site</span>
            </li>
            <li class=" nav-item">
                <a data-toggle="ajax" href="#">
                    <i class="feather icon-menu"></i>
                    <span class="menu-item" data-i18n="Menu">Menu</span>
                </a>
            </li>
            <li class=" nav-item">
                <a data-toggle="ajax" href="#">
                    <i class="feather icon-layout"></i>
                    <span class="menu-item" data-i18n="Page Generator">Page Generator</span>
                </a>
            </li>
            <li class=" nav-item">
                <a data-toggle="ajax" href="#">
                    <i class="feather icon-search"></i>
                    <span class="menu-item" data-i18n="SEO">SEO</span>
                </a>
            </li>
            @canany(['read-users', 'read-roles'])
            @endcanany
            <li class="nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                        data-i18n="Manajemen User">Manajemen User</span></a>
                <ul class="menu-content">
                    @can('read-roles')
                        <li><a href="{{ route('roles') }}" data-toggle="ajax">
                                <i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Roles">Roles</span></a>
                        </li>
                    @endcan
                    @can('read-users')
                        <li><a href="{{ route('users') }}" data-toggle="ajax">
                                <i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="User">User</span></a>
                        </li>
                    @endcan
                </ul>
            </li>
            <li class="navigation-header">
                <span>Setting</span>
            </li>
            @can('read-settings')
                <li class=" nav-item">
                    <a data-toggle="ajax" href="{{ route('settings') }}">
                        <i class="feather icon-settings"></i>
                        <span class="menu-item" data-i18n="Pengaturan">Pengaturan</span>
                    </a>
                </li>
            @endcan
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
