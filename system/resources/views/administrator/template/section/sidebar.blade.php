<?php 
  function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">
        
        </a>
      </div>
    </div>
    
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{url('admin/beranda')}}" class="nav-link {{checkRouteActive('admin/beranda')}}">
            <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/pemilih')}}" class="nav-link {{checkRouteActive('admin/pemilih')}}">
              <i class="nav-icon fa fa-user" ></i>
              <p>
                Data Pemilih
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/pendaftar')}}" class="nav-link {{checkRouteActive('admin/pendaftar')}}">
              <i class="nav-icon fa fa-user-plus" ></i>
              <p>
                Data Pendaftar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/kandidat')}}" class="nav-link {{checkRouteActive('admin/kandidat')}}">
              <i class="nav-icon fa fa-user-plus" ></i>
              <p>
                Data Kandidat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/admin')}}" class="nav-link {{checkRouteActive('admin/admin')}}">
              <i class="nav-icon fa fa-user" ></i>
              <p>
                Data Administrator
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
