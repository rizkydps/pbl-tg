<header id="header" class="header sticky-top" >

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">admintg @politanisamarinda.ac.id</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(0541) 260421, 260680</span></i>
        </div>
        {{-- <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div> --}}
      </div>
    </div><!-- End Top Bar -->
    <div class="branding">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
        
          <h1 class="sitename">TEKNOLOGI GEOMATIKA<br></h1>
        </a>
        <nav id="navmenu" class="navmenu">
  <ul>
    <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
        <li><a href="{{ route('visi-misi.show') }}">Visi & Misi</a></li>
        <li><a href="{{ route('dosen.index') }}">Dosen,PLP & Admin</a></li>
        <li><a href="{{ route('akreditasi') }}">Akreditasi</a></li>
        <li class="dropdown"><a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Lab Geodesi</a></li>
            <li><a href="{{ route('lab.sig') }}">Lab Inderaja dan SIG</a></li>
            <li><a href="{{ route('lab.geo') }}">Lab Geomatika</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="{{ route('berita-lainnya') }}">Berita</a></li>
    <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
        <li><a href="{{ route('output-lulusan.index') }}">Output Lulusan</a></li>
      </ul>
    </li>
    <li class="dropdown"><a href="#"><span>Repository</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
        <!-- ✅ Perbaikan: Link ke halaman tugas akhir yang benar -->
        <li><a href="{{ route('tugas-akhir.index') }}">Data Tugas Akhir</a></li>
      </ul>
    </li>
    <li class="dropdown"><a href="#"><span>Kemahasiswaan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
        <li><a href="https://arcg.is/1XKHy1">Tracer Study</a></li>
        <li><a href="HIMA TG">Himpunan Mahasiswa TG</a></li>
        <li><a href="#">IKA Alumni</a></li>
      </ul>
    </li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

      </div>

    </div>

  </header>
