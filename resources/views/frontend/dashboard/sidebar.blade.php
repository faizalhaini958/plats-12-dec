<div class="dashboard_sidebar">
    <span class="close_icon"><i class="far fa-times"></i></span>
    <a href="dsahboard.html" class="dash_logo"><img src="{{ asset(auth()->user()->avatar) }}" alt="logo"
        class="img-fluid"></a>
    <ul class="dashboard_link">
        @if (auth()->user()->user_type === 'admin')
        <li><a class="" href="{{ route('admin.dashboard.index') }}"><i class="fas fa-tachometer"></i>Dashboard Pengguna</a></li>

        @endif
      <li><a class="" href="{{ route('user.dashboard') }}"><i class="fas fa-tachometer"></i>Dashboard</a></li>
      <li><a href="{{ route('user.listing.index') }}"><i class="fas fa-list-ul"></i> Senarai Saya</a></li>
      <li><a href="{{ route('user.listing.create') }}"><i class="fal fa-plus-circle"></i> Tambah Senarai</a></li>

      <li><a href="{{ route('user.messages') }}"><i class="far fa-comments-alt"></i> Pengumuman</a></li>
      <li><a href="{{ route('user.profile.index') }}"><i class="far fa-user"></i> Profil Saya</a></li>
      <li>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            this.closest('form').submit();" ><i class="far fa-sign-out-alt"></i> Logout</a>
        </form>
    </li>
    </ul>
  </div>
