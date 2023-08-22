<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo demo">

      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase">Forte</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item">
      <a href="{{ route('home') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Konten</span>
    </li>
    @can('delete-blog-posts')
    <li class="menu-item   ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bx-carousel"></i>
        <div data-i18n="Layouts">Slider</div>
      </a>
      <ul class="menu-sub ">
        <li class="menu-item">
          <a href="{{ route('slider.index') }}" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="" class="menu-link">
            <div data-i18n="Without navbar">Create</div>
          </a>
        </li>
      </ul>
    </li>
    @endcan

    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bx bx-globe"></i>
        <div data-i18n="Layouts">Product</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="{{route('product.index')}}" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="{{route('product.create')}}" class="menu-link">
            <div data-i18n="Without navbar">Create</div>
          </a>
        </li>
      </ul>
    </li>


    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bxs-compass"></i>
        <div data-i18n="Layouts">News</div>
      </a>
      <ul class="menu-sub ">
        <li class="menu-item ">
          <a href="{{route('news.index')}}" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="{{route('news.create')}}" class="menu-link">
            <div data-i18n="Without navbar">Create</div>
          </a>
        </li>
      </ul>
    </li>








    <li class="menu-item   ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon bx bx-diamond"></i>
        <div data-i18n="Layouts">Contact</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="{{route('contact.index')}}" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>
      </ul>
    </li>






    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">User</span>
    </li>



    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-group"></i>
        <div data-i18n="Layouts">User</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="" class="menu-link">
            <div data-i18n="Without menu">List</div>
          </a>
        </li>

        <li class="menu-item">
          <a href="" class="menu-link">
            <div data-i18n="Without navbar">Create</div>
          </a>
        </li>

      </ul>
    </li>





    <li class="menu-header small text-uppercase"><span class="menu-header-text">Email</span></li>


    <li class="menu-item active">
      <a href="" class="menu-link">
        <i class="menu-icon bx bx-envelope"></i>
        <div data-i18n="Tables">Choose Hidden Gem </div>
      </a>
    </li>
    <li class="menu-item active">
      <a href="{{route('contact.index')}}" class="menu-link">
        <i class="menu-icon bx bx-envelope"></i>
        <div data-i18n="Tables">Contact</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="" class="menu-link">
        <i class="menu-icon bx bx-envelope"></i>
        <div data-i18n="Tables">Create Email </div>
      </a>
    </li>
  </ul>
</aside>
<!-- / Menu -->
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>