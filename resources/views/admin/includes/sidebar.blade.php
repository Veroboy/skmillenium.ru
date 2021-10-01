
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <a href="{{ route('admin.main.index') }}" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Millenium</span>
  </a>

  <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
      </div>

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
          <a href="{{ route('admin.user.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                  Пользователи
              </p>
          </a>
      </li>

      <li class="nav-item">
          <a href="{{ route('admin.post.index') }}" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                  Посты
              </p>
          </a>
      </li>

        <li class="nav-item">
          <a href="{{ route('admin.category.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th-list"></i>
            <p>
              Категории
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin.tag.index') }}" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Теги
            </p>
          </a>
        </li>

          <li class="nav-item">
              <a href="{{ route('admin.partner.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                      Партнеры
                  </p>
              </a>
          </li>

          <li class="nav-item">
              <a href="{{ route('admin.menu.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-bars"></i>
                  <p>
                      Меню
                  </p>
              </a>
          </li>
      </ul>

  </div>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
