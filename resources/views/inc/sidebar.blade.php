<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand mt-2">
        <a href="{{ route('home') }}"><img src="{{url('backend\assets\img/logo.gif')}}"></a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('home') }}">DR</a>
      </div>
      <ul class="sidebar-menu mt-4">
        <li class="{{ Route::is('home')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
        <li class="dropdown {{ Route::is('setting.*') || Route::is('header.*') || Route::is('footer.*') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i> <span>Setting</span></a>
          <ul class="dropdown-menu">
            <li class="{{ Route::is('setting.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('setting') }}"><i class="far fa-user"></i> Profile</a></li>
            <li class="{{ Route::is('header.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('header') }}"><i class="fas fa-heading"></i> Header</a></li>
            <li class="{{ Route::is('footer.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('footer') }}"><i class="fas fa-copyright"></i> Footer</a></li>
          </ul>
        </li>
       <li class="{{ Route::is('registration')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('registration') }}"><i class="fas fa-clipboard-list"></i> Online Registration</a></li>
       <li class="{{ Route::is('contact')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('contact') }}"><i class="fas fa-phone"></i> Contact</a></li>
       <li class="{{ Route::is('grievancelist')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('grievancelist') }}"><i class="fas fa-exclamation-circle"></i> Grievance</a></li>
       <li class="{{ Route::is('student_request')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('student_request') }}"><i class="fas fa-user-graduate"></i> Student Request</a></li>
       <li class="{{ Route::is('event')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('event') }}"><i class="fas fa-calendar-alt"></i> Events</a></li>
       <li class="{{ Route::is('blog*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('blog') }}"><i class="fas fa-blog"></i> Blogs</a></li>
       <li class="dropdown {{ Route::is('users.*') || Route::is('roles.*') || Route::is('permissions.*') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>User</span></a>
          <ul class="dropdown-menu">
            @can('create-user')
            <li class="{{ Route::is('users.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-user"></i> Users List</a></li>
            @endcan
            @can('create-role')
            <li class="{{ Route::is('roles.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('roles.index') }}"><i class="fas fa-user-tag"></i> Roles List</a></li>
            @endcan
            @can('create-permission')
            <li class="{{ Route::is('permissions.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('permissions.index') }}"><i class="fas fa-key"></i> Permissions List</a></li>
            @endcan
          </ul>
        </li>
    </aside>
</div>
