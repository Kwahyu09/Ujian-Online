    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-0 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/">
              <img id="logo" width="60px" src="/assets/images/smk.png" alt="Logo SMK N 4 Kota Bengkulu">
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mt-0 mb-3">
              <li class="nav-item w-100">
                <a class="nav-link text-center {{ ($title === "Home") ? 'active' : '' }}" href="/">
                    <span>Sistem Ujian</span> <br>
                    <span>SMK N 4 Kota Bengkulu</span> <br>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
              <li class="nav-item w-100">
                  <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Beranda</span>
              </a>
            </li>
          </ul>
          @if (Auth::user()->role == 'Admin')
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Data</span>
          </p> 
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link {{ ($title === "Staff") ? 'active' : '' }}" href="/staf">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Staf</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link {{ ($title === "Guru") ? 'active' : '' }}" href="/guru">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Guru</span>
              </a>
            </li>
          </ul>
          @endif
          @if (Auth::user()->role == 'Staf')
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link {{ ($title === "Guru") ? 'active' : '' }}" href="/guru">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Guru</span>
              </a>
            </li>
          </ul>
          @endif
          @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'Staf')
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link {{ Request::is('/mapel*') ? 'active' : '' }}" href="/mapel">
                <i class="fe fe-book-open fe-16"></i>
                <span class="ml-3 item-text">Mata Pelajaran</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link {{ ($title === "Kelas") ? 'active' : '' }}" href="/kelas">
                <i class="fe fe-file-text fe-16"></i>
                <span class="ml-3 item-text">Kelas</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link {{ ($title === "Kelas Siswa") ? 'active' : '' }}" href="/kelassiswa">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Siswa</span>
              </a>
            </li>
          </ul>
          @endif
          @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'Guru')
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Ujian</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link {{ ($title === "Mata Pelajaran") ? 'active' : '' }}" href="/mapelgrup">
                <i class="fe fe-folder fe-16"></i>
                <span class="ml-3 item-text">Grup Soal</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link {{ ($title === "Ujian") ? 'active' : '' }}" href="/ujian">
                <i class="fe fe-file-text fe-16"></i>
                <span class="ml-3 item-text">Ujian</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link {{ ($title === "Ujian Hasil") ? 'active' : '' }}" href="/ujianhasil">
                <i class="fe fe-file-text fe-16"></i>
                <span class="ml-3 item-text">Laporan Nilai</span>
              </a>
            </li>
          </ul>
          @endif
        </nav>
      </aside>