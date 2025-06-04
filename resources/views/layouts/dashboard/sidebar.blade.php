<li class="sidebar-header">
    <h2>GEOMATIKA</h2>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.index') }}">
        <i class="align-middle" data-feather="sliders"></i> 
        <span class="align-middle">Dashboard</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.about-us.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.about-us.index') }}">
        <i class="align-middle" data-feather="info"></i> 
        <span class="align-middle">Tentang Kami</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('admin.tugas-akhir.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.tugas-akhir.index') }}">
        <i class="align-middle" data-feather="book-open"></i>
        <span class="align-middle">Tugas Akhir</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.partner.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.partner.index') }}">
        <i class="align-middle" data-feather="users"></i>
        <span class="align-middle">Partner</span>
    </a>
</li>



<li class="sidebar-item {{ request()->routeIs('alasan.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('alasan.index') }}">
        <i class="align-middle" data-feather="list"></i> 
        <span class="align-middle">Alasan</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.dosen.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.dosen.index') }}">
        <i class="align-middle" data-feather="users"></i> 
        <span class="align-middle">Dosen</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('visimisi.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('visimisi.index') }}">
        <i class="align-middle" data-feather="target"></i> 
        <span class="align-middle">Visi Misi</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.alasan-banner.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.alasan-banner.index') }}">
        <i class="align-middle" data-feather="image"></i> 
        <span class="align-middle">Banner Alasan</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.berita.index') }}">
        <i class="align-middle" data-feather="file-text"></i> 
        <span class="align-middle">Berita</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.output-lulusan.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.output-lulusan.index') }}">
        <i class="align-middle" data-feather="award"></i> 
        <span class="align-middle">Output Lulusan</span>
    </a>
</li>