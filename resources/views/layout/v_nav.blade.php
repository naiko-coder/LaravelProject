<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item">
      <a href="/dashboard" class="nav-link {{ request()->is('/dashboard') ? 'active' : '' }}">
        <i class="nav-icon fa fa-desktop"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>

    @if (auth()->user()->level=="Administrator")

    <li class="nav-item">
      <a href="/karyawan" class="nav-link {{ request()->is('karyawan') ? 'active' : '' }}">
        <i class="nav-icon fa fa-user"></i>
        <p>
          Data Karyawan
        </p>
      </a>
    </li>

    <li class="nav-item">
      <a href="/jabatan" class="nav-link {{ request()->is('jabatan') ? 'active' : '' }}">
        <i class="nav-icon fa fa-briefcase"></i>
        <p>
          Data Jabatan
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/unduhQR" class="nav-link {{ request()->is('unduhQR') ? 'active' : '' }}">
        <i class="nav-icon fa fa-download"></i>
        <p>
          Unduh QRCode
        </p>
      </a>
    </li>

    <li class="nav-item">
      <a href="/jadwal" class="nav-link {{ request()->is('jadwal') ? 'active' : '' }}">
        <i class="nav-icon fa fa-list"></i>
        <p>
          Jadwal Absensi
        </p>
      </a>
    </li>



    <li class="nav-item">
      <a href="/laporan" class="nav-link {{ request()->is('rekap') ? 'active' : '' }}">
        <i class="nav-icon fa fa-book"></i>
        <p>
          Laporan Absensi
        </p>
      </a>
    </li>

    <li class="nav-item">
      <a href="/users" class="nav-link {{ request()->is('users') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-plus"></i>
        <p>
          Users Management
        </p>
      </a>
    </li>
    <hr>

    <li class="nav-item">
      <a href="/temp_absen" class="nav-link {{ request()->is('temp_absen') ? 'active' : '' }}">
        <i class="nav-icon fas fa-address-book"></i>
        <p>
          Temp Absen
        </p>
      </a>
    </li>
    @endif
</nav>