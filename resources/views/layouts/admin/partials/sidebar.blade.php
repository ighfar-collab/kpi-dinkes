<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">KPI Dinkes</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
           
            <li class="menu-header" >Master Data</li>
      
            <li class="active"><a class="nav-link" href="{{ route('bidang_kesehatan.index') }}"><i class="far fa-square"></i>
                    <span>Bidang Kesehatan</span></a></li>
                       <li class="active"><a class="nav-link" href="{{ route('bidang_pelayanan_kesehatan.index') }}"><i class="far fa-square"></i>
                    <span>Bidang Pelayanan Kesehatan</span></a></li>
                          <li class="active"><a class="nav-link" href="{{ route('bidang_pencegahan.index') }}"><i class="far fa-square"></i>
                    <span>Bidang Pencegahan Penyakit Menular</span></a></li>
                   <li class="active"><a class="nav-link" href="{{ route('sumber_daya.index') }}"><i class="far fa-square"></i>
                    <span>Bidang Sumber Daya Kesehatan</span></a></li>
                                       <li class="active"><a class="nav-link" href="{{ route('sekretariat.index') }}"><i class="far fa-square"></i>
                    <span>Sekretariat</span></a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i>
                    <span>Admin</span></a>
        
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>