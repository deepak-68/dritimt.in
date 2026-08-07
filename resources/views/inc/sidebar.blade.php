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
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-fire"></i> <span>Setting</span></a>
          <ul class="dropdown-menu">
            <li class="{{ Route::is('setting.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('setting') }}">Profile</a></li>
            <li class="{{ Route::is('header.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('header') }}">Header</a></li>
            <li class="{{ Route::is('footer.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('footer') }}">Footer</a></li>
          </ul>
        </li>
       <li class="{{ Route::is('registration')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('registration') }}">Online Registration</a></li>
       <li class="{{ Route::is('contact')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
       <li class="{{ Route::is('grievancelist')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('grievancelist') }}">Grievance</a></li>
       <li class="{{ Route::is('student_request')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('student_request') }}">Student Request</a></li>
       <li class="{{ Route::is('event')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('event') }}">Events</a></li>
       <li class="dropdown {{ Route::is('users.*') || Route::is('roles.*') || Route::is('permissions.*') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>User</span></a>
          <ul class="dropdown-menu">
            @can('create-user')
            <li class="{{ Route::is('users.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('users.index') }}">Users List</a></li>
            @endcan
            @can('create-role')
            <li class="{{ Route::is('roles.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('roles.index') }}">Roles List</a></li>
            @endcan
            @can('create-permission')
            <li class="{{ Route::is('permissions.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('permissions.index') }}">Permissions List</a></li>
            @endcan
          </ul>
        </li>
    </aside>
</div>
