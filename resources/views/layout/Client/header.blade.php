<div class="">
    <nav class="navbar navbar-expand-lg navbar-light">

        <a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('client/image/Logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="accomodation.html">Accomodation</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="elements.html">Elemests</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
        </div>
        <nav style="border-radius:10px;margin-left:20px" class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Dropdown Menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">  <img style=" width: 35px;" src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png"
                            alt=""></a>
                        <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
                            <li class="nav-item"><a class="nav-link" href="blog.html">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog.html">Settings</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-single.html">Logout</a></li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="roomsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Shopping/Cart3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"/>
                                </g>
                            </svg><!--end::Svg Icon--></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="roomsDropdown">
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <div class="col-1">1</div>
                                    <div class="col-4">Phòng 1</div>
                                    <div class="col-3">
                                        <img src="path_to_image_1.jpg" alt="Hình ảnh phòng 1" class="img-thumbnail">
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <div class="col-1">2</div>
                                    <div class="col-4">Phòng 2</div>
                                    <div class="col-3">
                                        <img src="path_to_image_2.jpg" alt="Hình ảnh phòng 2" class="img-thumbnail">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li> --}}

                </ul>

            </div>
        </nav>

    </nav>
</div>
