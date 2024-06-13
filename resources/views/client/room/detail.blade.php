@extends('layout.Client.master')
@section('title')
    Detail
@endsection
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <h2 class="mb-4">{{ $room->title }}</h2>
                            <div class="single-slider owl-carousel">
                                <div class="item">
                                    <div class="room-img"
                                        style="background-image: url('{{ asset('client/images/room-1.jpg') }}');"></div>
                                </div>
                                <div class="item">
                                    <div class="room-img"
                                        style="background-image: url('{{ asset('client/images/room-2.jpg') }}');"></div>
                                </div>
                                <div class="item">
                                    <div class="room-img"
                                        style="background-image: url('{{ asset('client/images/room-3.jpg') }}');"></div>
                                </div>
                            </div>
                            <h2 style="color: black;font-weight:600;">Price: $ {{ number_format($room->price) }}/ Day</h2>
                        </div>
                        <div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
                            <p>{{ $room->description }}</p>
                            <div class="d-md-flex mt-5 mb-5">
                                <ul class="list">
                                    <li style="color: black;font-weight:600;"><span>Max:</span> {{ $room->capacity }} người
                                    </li>
                                    <li style="color: black;font-weight:600;"><span>Size:</span> {{ $room->size }} m2</li>
                                </ul>
                                <ul class="list ml-md-5">
                                    <li style="color: black;font-weight:600;"><span>View:</span> {{ $room->view }}</li>
                                    <li style="color: black;font-weight:600;"><span>Floor:</span> {{ $room->floor }}</li>
                                </ul>
                            </div>
                            <p>{{ $room->imagfacilitiese }}</p>
                            <div class="row">
                                @if ($room->services && count($room->services) > 0)
                                    @foreach ($room->services as $item)
                                        <div class="col-md-6">
                                            <div class="pricing-entry d-flex ftco-animate fadeInUp ftco-animated">
                                                <div class="img"
                                                    style="background-image: url('{{ asset('client/images/menu-1.jpg') }}');">
                                                </div>
                                                <div class="desc pl-3">
                                                    <div class="d-flex text align-items-center">
                                                        <h3><span>{{ $item->title }}</span></h3>
                                                        <span class="price">${{ number_format($item->price) }}</span>
                                                    </div>
                                                    <div class="d-block">
                                                        <p>{{ $item->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                        <div class="col-md-12 room-single ftco-animate mb-5 mt-4">
                            <h3 class="mb-4">Take A Tour</h3>
                            <div class="block-16">
                                <figure>
                                    <img src="{{ asset('Client/images/room-4.jpg') }}" alt="Image placeholder"
                                        class="img-fluid">
                                    <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span
                                            class="icon-play"></span></a>
                                </figure>
                            </div>
                        </div>

                        {{-- ///vdvdv --}}

                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">

                    <div class="sidebar-box ftco-animate">
                        <div class="room-booking">
                            <h3>Your Reservation</h3>
                            <form method="POST" enctype="multipart/form-data"
                                action="{{ route('booking.addcart', $room->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="date-in">Check In:</label>
                                    <div class="input-group date">
                                        <input type="date" name="check_in_date" class="form-control">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date-out">Check Out:</label>
                                    <div class="input-group ">
                                        <input type="date" name="check_out_date" class="form-control">

                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="guest">Guests:</label>
                                    <input type="number" disabled class="form-control" name="guests"
                                        value="{{ $room->capacity }}" id="guests">
                                </div> --}}
                                <div class="form-group">
                                    <label for="guest">Adults:</label>
                                    <input type="number" class="form-control" name="adults" id="adults">
                                </div>
                                <div class="form-group">
                                    <label for="guest">Children:</label>
                                    <input type="number" class="form-control" name="children" id="children">
                                </div>
                                <div class="form-group">
                                    <h3>If you add more services?</h3>
                                    <div class="tagcloud">
                                        @foreach ($serice as $item)
                                            <a href="#" class="tag-cloud-link">{{ $item->title }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date-out">Description:</label>
                                    <div class="input-group">
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Check Availability</button>
                            </form>

                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url('{{ asset('client/images/image_1.jpg') }}');"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                        the blind texts</a>
                                </h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sidebar-box ftco-animate">
                        <h3>Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
                            voluptate
                            quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique,
                            inventore eos
                            fugit cupiditate numquam!</p>
                    </div>
                </div>
            </div>
        </div>

    </section> <!-- .section -->

    <section class="container">
        <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
            <h4 class="mb-4">Review &amp; Ratings</h4>
            <div class="rd-reviews">
                <div class="container">
                    @if ($room->rating && count($room->rating) > 0)
                        @foreach ($room->rating as $item)
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="ri-pic">
                                        <img style="height: 70px; width: 50%; border-radius: 35px;"
                                            src="{{ asset('client/images/menu-1.jpg') }}" alt="">

                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="ri-text">
                                        <h5>{{ $item->user->name }}</h5>
                                        <p>{{ Illuminate\Support\Str::limit($item->comment, 100) }}</p>
                                        <span>{{ $item->created_at }}</span>
                                        <div class="star">

                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($i <= $item->rating)
                                                    <a href="#"><i style="color: red"
                                                            class="icon-heart color-danger"></i></a> </a>
                                                @else
                                                    <a href="#"><i class="icon-heart color-danger"></i></a>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    @endif
                </div>

            </div>
            <div class="review-add">
                <h4>Add Review</h4>
                @if (!Auth::user())
                    <form action="#" class="ra-form">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email*">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <h6>Your Rating: </h6>
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Review" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit Now</button>
                            </div>
                        </div>
                    </form>
                @endif
           
                {{-- moi --}}

                <form action="{{ route('rate.', $room->id) }}" method="POST" class="ra-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="content">Description</label>
                                <textarea id="content" name="comment" class="form-control" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-5">
                                <label for="select-option">Select Option</label>
                                <select id="select-option" name="rating" class="form-control" required>
                                    <option name=""disabled selected>Feeling</option>
                                    <option value="good">Tốt</option>
                                    <option value="average">Tạm được</option>
                                    <option value="excellent">Tuyệt vời</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>



                {{-- end moi --}}
            </div>
        </div>
        <div class="col-md-12 room-single ftco-animate mb-5 mt-5">
            <h4 class="mb-4">Available Room</h4>
            <div class="row">
                @foreach ($ty_roo as $item)
                    <div class="col-sm col-md-4 ftco-animate">
                        <div class="room">
                            <a href="{{ route('rooms.detail', $item->id) }}"
                                class="img img-2 d-flex justify-content-center align-items-center"
                                style="background-image: url('{{ asset('client/images/room-1.jpg') }}');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3 text-center">
                                <h3 class="mb-3"><a
                                        href="{{ route('rooms.detail', $item->id) }}">{{ $item->title }}</a></h3>
                                <p><span class="price mr-2">$ {{ number_format($item->price) }}</span> <span
                                        class="per">per
                                        night</span>
                                </p>
                                <hr>
                                <p class="pt-1"><a href="{{ route('rooms.detail', $item->id) }}"
                                        class="btn-custom">View Room
                                        Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>

    </section>


@endsection
