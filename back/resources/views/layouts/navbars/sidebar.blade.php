<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="{{ ($activePage == 'profile' || $activePage == 'user-management') ? 'true' : 'false' }}">
          <i class="material-icons">supervisor_account</i>
          <p>{{ __('User Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' show' : '' }}" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'elements' || $activePage == 'categories') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#content" aria-expanded="{{ ($activePage == 'elements' || $activePage == 'categories') ? 'true' : 'false' }}">
          <i class="material-icons">settings_input_component</i>
          <p>{{ __('Components') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'elements' || $activePage == 'categories') ? ' show' : '' }}" id="content">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'categories' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('category.index') }}">
                <i class="material-icons">web_asset</i>
                <span class="sidebar-normal"> {{ __('Categories') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'elements' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('element.index') }}">
                <i class="material-icons">web</i>
                <span class="sidebar-normal">{{ __('Elements') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'jobtypes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('jobtype.index') }}">
          <i class="material-icons">work</i>
          <span class="sidebar-normal">{{ __('Jobtypes') }} </span>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'clients' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('client.index') }}">
          <i class="material-icons">how_to_reg</i>
          <span class="sidebar-normal">{{ __('Clients') }} </span>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'studio' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('studio.index') }}">
          <i class="material-icons">home</i>
          <span class="sidebar-normal">{{ __('Studio') }} </span>
        </a>
      </li>
      {{-- <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li> --}}
    </ul>
  </div>
</div>