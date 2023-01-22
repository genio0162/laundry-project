<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo"><img src="../../assets/img/logo/logo.png" alt=""></span>

      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a href="/dashboard" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

@if (auth()->user()->role->id == 2)
<li class="menu-item {{ Request::is('member*') ? 'active' : '' }}">
  <a href="/member/{{ auth()->user()->id }}/edit" class="menu-link">
    <i class="menu-icon tf-icons bx bx-user"></i>
    <div data-i18n="Analytics">Profile Saya</div>
  </a>
</li>

<li class="menu-item {{ Request::is('laundry*') ? 'active' : '' }}">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon tf-icons fa-solid fa-clipboard-user"></i>
    <div data-i18n="Layouts">Laundry Saya</div>
  </a>

   <ul class="menu-sub">
    <li class="menu-item">
      <a href="layouts-without-menu.html" class="menu-link">
        <div data-i18n="Without menu">Pembayaran</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="/laundry" class="menu-link">
        <div data-i18n="Without navbar">Lihat daftar laundry saya</div>
      </a>
    </li>
</li>
@endif

@can('admin')
<li class="menu-item {{ Request::is('customers*') ? 'active' : '' }}">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon tf-icons fa-solid fa-user-pen"></i>
    <div data-i18n="Layouts">Kelola Customer</div>
  </a>

   <ul class="menu-sub">
    <li class="menu-item {{ Request::is('customers') ? 'active' : '' }}">
      <a href="/customers" class="menu-link">
        <div data-i18n="Without menu">Data Customer</div>
      </a>
    </li>
    <li class="menu-item {{ Request::is('customers/create') ? 'active' : '' }}">
      <a href="/customers/create" class="menu-link">
        <div data-i18n="Without menu">Tambah Data Customer</div>
      </a>
    </li>
  </ul>
</li>
<li class="menu-item {{ Request::is('laundries*') ? 'active' : '' }}">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon tf-icons fa-solid fa-user-pen"></i>
    <div data-i18n="Layouts">Kelola Laundry</div>
  </a>

   <ul class="menu-sub">
    <li class="menu-item {{ Request::is('laundries') ? 'active' : '' }}">
      <a href="/laundries" class="menu-link">
        <div data-i18n="Without navbar">Data Laundry</div>
      </a>
    </li>
    <li class="menu-item {{ Request::is('laundries/create') ? 'active' : '' }}">
      <a href="/laundries/create" class="menu-link">
        <div data-i18n="Without navbar">Tambah data Laundry</div>
      </a>
    </li>
  </ul>
</li>

<li class="menu-item">
  <a href="javascript:void(0);" class="menu-link">
    <i class="menu-icon tf-icons fa-solid fa-clipboard-user"></i>
    <div data-i18n="Layouts">Laporan</div>
  </a>
</li>
@endcan

      <!-- Layouts -->



    </ul>
  </aside>