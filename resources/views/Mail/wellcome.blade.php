<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="{{asset('mail/wellcome.css')}}">
    <style>
        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 0;
        }

        .hotel-logo {
            width: 30%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Email Header -->
        <div class="header">
            <a href="">
                <img class="hotel-logo" src="{{asset('mail/img.jpg')}}" alt="Augustine Logo" />
            </a>
        </div>
        <!-- End Email Header -->

        <!-- Email Content -->
        <div class="content">
            <table>
                <tr>
                    <td>
                        <p>Xin chào {{$user->name}},</p>
                        <p>Chúc mừng! Bạn đã đăng ký thành công tài khoản trên trang web đặt phòng khách sạn AUGUSTINE.
                        </p>
                        <p>
                            Để hoàn tất quá trình đăng ký, vui lòng xác nhận email của bạn. Điều này sẽ chỉ mất vài
                            giây.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="call-to-action" href="{{route('auth.login')}}">Xác nhận Email</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Nếu bạn không biết tại sao bạn nhận được email này, vui lòng liên hệ với chúng tôi tại đây.
                        </p>
                        <p>
                            Trân trọng, <br />
                            Đội ngũ AUGUSTINE.
                        </p>
                    </td>
                </tr>
            </table>
        </div>
        <!-- End Email Content -->

        <!-- Email Footer -->
        <div class="footer">
            <table>
                <tr>
                    <td class="w-full">
                        <p>
                            Email này được gửi đến <a class="underline"
                                href="mailto:email@email.com">{{$user->email}}</a>.
                            Nếu bạn không muốn nhận loại email này, bạn có thể <a href="#">hủy đăng ký</a> hoặc <a
                                href="#">quản lý các tùy chọn email của bạn</a>.
                        </p>
                        <p>2055 Limestone Rd, 200-C, Wilmington, Delaware 19808, United States</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <img class="augustine-logo"
                                        src="https://yourwebsite.com/path/to/augustine-logo-light.png"
                                        alt="Augustine Logo" />
                                </td>
                                <td>
                                    <table class="social-icons">
                                        <tr>
                                            <td>
                                                <a href="https://instagram.com">
                                                    <img class="social-icon"
                                                        src="https://yourwebsite.com/path/to/instagram-icon.png"
                                                        alt="Instagram" />
                                                </a>
                                            </td>
                                            <td>
                                                <a href="https://linkedin.com">
                                                    <img class="social-icon"
                                                        src="https://yourwebsite.com/path/to/linkedin-icon.png"
                                                        alt="LinkedIn" />
                                                </a>
                                            </td>
                                            <td>
                                                <a href="https://twitter.com">
                                                    <img class="social-icon"
                                                        src="https://yourwebsite.com/path/to/twitter-icon.png"
                                                        alt="Twitter" />
                                                </a>
                                            </td>
                                            <td>
                                                <a href="https://facebook.com">
                                                    <img class="social-icon"
                                                        src="https://yourwebsite.com/path/to/facebook-icon.png"
                                                        alt="Facebook" />
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <!-- End Email Footer -->
    </div>
</body>

</html>