
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard') ? 'active': ""}}" href="{{route('dashboard')}}">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('profile') ? 'active': ""}}" href="{{route('profile')}}">Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('portfolio') ? 'active': ""}}" href="{{route('portfolio')}}">Portfolio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('notification') ? 'active': ""}}" href="{{route('notification')}}">Notifications</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('messages') ? 'active': ""}}" href="{{route('messages')}}">Messages</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('bookmarks') ? 'active': ""}}" href="{{route('bookmarks')}}">Bookmarks</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('job') ? 'active': ""}}" href="{{route('job-personal')}}">Jobs</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('bids') ? 'active': ""}}" href="{{route('bids')}}">Bids</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('reviews') ? 'active': ""}}" href="{{route('reviews')}}">Reviews</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('payments') ? 'active': "" }}" href="{{route('payments')}}">Payment</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('setting') ? 'active': "" }}" href="{{route('setting')}}"><i class="fas fa-cog"></i></a>
    </li>
</ul>