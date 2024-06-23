<style>
    .dropdown-menu {
        max-width: 300px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        padding: 10px;
        border-radius: 5px;
    }

    .dropdown-item {
        white-space: normal;
        overflow: hidden;
        text-overflow: ellipsis;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        background-color: #f9f9f9;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    .custom-dropdown-menu {
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .notification-item {
        border-bottom: 1px solid #eaeaea;
        padding: 10px;
        display: flex;
        align-items: center;
    }

    .notification-item:last-child {
        border-bottom: none;
    }

    .notification-content {
        margin-left: 10px;
    }

    .notification-title {
        font-size: 16px;
        font-weight: bold;
        color: #007bff;
    }

    .discount-code {
        display: block;
        font-size: 14px;
        margin-top: 5px;
    }

    .description,
    .start-date,
    .end-date {
        margin: 3px 0;
        color: #555;
        font-size: 13px;
    }

    .no-notifications {
        display: block;
        padding: 10px;
        text-align: center;
        color: #555;
        text-decoration: none;
    }

    .no-notifications:hover {
        text-decoration: underline;
    }
</style>
<div style="display:flex;" class="container">

    <a class="navbar-brand" href="index.html">AUGUSTINE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{ route('client') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ route('rooms.list') }}" class="nav-link">Rooms</a></li>
            <li class="nav-item"><a href="restaurant.html" class="nav-link">Restaurant</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            @if (Auth::user())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a style="color: #4a86ef;font-weight:600;" class="dropdown-item" href="#">Profile</a>
                        <a style="color: #4a86ef;font-weight:600;" class="dropdown-item"
                            href="{{ route('booking.list') }}">Rooms</a>
                        <a style="font-weight:600;" class="dropdown-item text-danger"
                            href="{{ route('auth.logout') }}">Logout</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <div class="dropdown">
                        <button style="margin-top: 10px;" class="btn btn-secondary dropdown-toggle" type="button"
                            id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Thông báo
                            <span class="badge badge-light">{{ auth()->user()->unreadNotifications->count() }}</span>
                        </button>
                        <div style="width: 400px;" class="dropdown-menu custom-dropdown-menu"
                            aria-labelledby="notificationDropdown">
                            @forelse(auth()->user()->unreadNotifications as $notification)
                                @if ($notification->type === 'App\Notifications\DiscountCreated')
                                    <div class="notification-item">
                                        <div class="notification-content">
                                            <span class="notification-title">AUGUSTINE</span>
                                            <span class="discount-code">Mã giảm giá:
                                                <strong>{{ $notification->data['discount_code'] }}</strong></span>
                                            <p class="description">Mô tả: {{ $notification->data['description'] }}</p>
                                            <p class="start-date">Ngày bắt đầu: {{ $notification->data['start'] }}</p>
                                            <p class="end-date">Ngày kết thúc: {{ $notification->data['end'] }}</p>
                                        </div>
                                    </div>
                                @endif
                            @empty
                                <a class="no-notifications" href="#">Không có thông báo mới</a>
                            @endforelse
                        </div>
                    </div>




                </li>
            @else
                <li class="nav-item"><a href="{{ route('auth.login') }}" class="nav-link">Login</a></li>
            @endif

        </ul>
    </div>
</div>
