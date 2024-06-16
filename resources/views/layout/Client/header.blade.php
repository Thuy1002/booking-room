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


    .custom-notification-item {
        white-space: normal;
        overflow: hidden;
        text-overflow: ellipsis;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        background-color: #f9f9f9;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    .custom-notification-item:last-child {
        border-bottom: none;
    }

    .custom-notification-title {
        white-space: normal;
    }

    .custom-discount-code {
        color: #007bff;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .custom-description,
    .custom-start-date,
    .custom-end-date {
        margin-top: 5px;
        color: #555;
    }

    .custom-no-notifications {
        display: block;
        padding: 10px;
        text-align: center;
        color: #007bff;
        text-decoration: none;
    }

    .custom-no-notifications:hover {
        background-color: #f0f0f0;
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
                        <button style="margin-top: 10px;"  class="btn btn-secondary dropdown-toggle" type="button" id="notificationDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Thông báo
                            <span class="badge badge-light">{{ auth()->user()->unreadNotifications->count() }}</span>
                        </button>
                        <div style="width:600px;" class="dropdown-menu custom-dropdown-menu" aria-labelledby="notificationDropdown">
                            @forelse(auth()->user()->unreadNotifications as $notification)
                                @if ($notification->type === 'App\Notifications\DiscountCreated')
                                    <div class="custom-notification-item">
                                        <div class="custom-notification-title">
                                            Bạn có mã giảm giá sắp tới từ AUGUSTINE:
                                        </div>
                                        <div class="custom-discount-code">
                                            Mã giảm giá: {{ $notification->data['discount_code'] }}
                                        </div>
                                        <div class="custom-description">
                                            Mô tả: {{ $notification->data['description'] }}
                                        </div>
                                        <div class="custom-start-date">
                                            Ngày bắt đầu: {{ $notification->data['start'] }}
                                        </div>
                                        <div class="custom-end-date">
                                            Ngày kết thúc: {{ $notification->data['end'] }}
                                        </div>
                                    </div>
                                @endif
                            @empty
                                <a class="custom-no-notifications" href="#">Không có thông báo mới</a>
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
