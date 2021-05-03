
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route("adminIndex")}}">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                {{-- Admin --}}
                <li class="nav-item {{request()->is("admin*") ? "active" : ""}}">
                    <a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Ecommerce">Admin</span></a>
                    <ul class="menu-content">
                        <li><a href="{{route("adminIndex")}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Admin</span></a>
                        </li>
                        <li><a href="{{route("tambahAdmin")}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Tambah Admin</span></a>
                        </li>
                    </ul>
                </li>
                {{-- Admin --}}

                {{-- Informasi --}}
                    <li class=" nav-item {{request()->is("informasi*") ? "active" : ""}}">
                        <a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Ecommerce">Informasi</span></a>
                        <ul class="menu-content">
                            <li><a href="{{route("indexInformasi")}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Informasi</span></a>
                            </li>
                            <li><a href="{{route("tambahInformasi")}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Tambah Informasi</span></a>
                            </li>
                        </ul>
                    </li>
                {{-- Informasi --}}

                {{-- Daerah --}}
                    <li class=" nav-item {{request()->is("daerah*") ? "active" : ""}}">
                        <a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Ecommerce">Daerah</span></a>
                        <ul class="menu-content">
                            <li><a href="{{route("indexDaerah")}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Daerah</span></a>
                            </li>
                            <li><a href="{{route("tambahDaerah")}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Tambah Daerah</span></a>
                            </li>
                            <li><a href="{{route("cetakDaerah")}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Cetak Data Daerah</span></a>
                            </li>
                        </ul>
                    </li>
                {{-- Daerah --}}
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
