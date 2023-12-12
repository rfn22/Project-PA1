<!-- Menu Wrapper -->
<div class="menu-wrapper">
    <div class="menu">
        <!-- Menu Container -->
        <ul>
            <li class="menu-title">Main</li>
            <li class="{{ request()->is('dashboard')?'active' : '' }}">
                <a href="{{ route('dashboard') }}"><i class="icon-screen-desktop"></i><span>Dashboard</span></a>
            </li>            
            <li class="has-sub  {{ request()->is('alumni') || request()->is('angkatan') ?'active' : '' }}">
                <a><i class="icon-people"></i><span>Alumni</span><i class="arrow"></i></a>
                <ul class="sub-menu">
                    <li class=" {{ request()->is('alumni')?'active' : '' }}">
                        <a href="{{ route('alumni.index') }}"><i class="icon-people"></i><span>Alumni</span></a>
                    </li>
                    <li class=" {{ request()->is('angkatan')?'active' : '' }}">
                        <a href="{{ route('angkatan.index') }}"><i class="icon-people"></i><span>Angkatan</span></a>
                    </li>
                </ul>
            </li>

            <li class="has-sub">
                <a><i class="icon-people"></i><span>Biodata</span><i class="arrow"></i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="user-grid.html"><span>Cetak Biodata</span></a>
                    </li>
                    <li>
                        <a href="user-details.html"><span>Edit Biodata</span></a>
                    </li>
                </ul>
            <li class="has-sub">
                <a><i class="fas fa-bullhorn"></i><span>Report</span></a>
                <li>
                    <a><i class="ti-layout-media-overlay-alt"></i><span>Artikel</span></a>
                </li>
            </ul>
    </div>
</div>