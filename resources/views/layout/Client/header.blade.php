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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img style=" width: 35px;" src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png"
                                alt="">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="roomsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Phòng đã đặt
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
                    </li>

                </ul>

            </div>
        </nav>

    </nav>
</div>
