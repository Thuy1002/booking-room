@extends('layout.Client.master')
@section('title')
    AUGUSTINE
@endsection
@section('content')
<style>
    .room {
        position: relative;
        overflow: hidden;
    }

    .ribbon {
        width: 150px;
        height: 150px;
        overflow: hidden;
        position: absolute;
        top: -64px;
        right: -63px;
    }

    .ribbon span {
        position: absolute;
        display: block;
        width: 215px;
        padding: 10px 0;
        background-color:#bb620ab5;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        transform: rotate(45deg);
        transform-origin: top left;
    }
</style>
    <section class="ftco-booking">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="booking-form">
                        <div class="row">
                            <div class="col-md-3 d-flex">
                                <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                    <div class="wrap">
                                        <label for="#">Check-in Date</label>
                                        <input type="text" name="check_in_date" class="form-control checkin_date"
                                            placeholder="Check-in date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex">
                                <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                    <div class="wrap">
                                        <label for="#">Check-out Date</label>
                                        <input type="text" name="check_out_date" class="form-control checkout_date"
                                            placeholder="Check-out date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex">
                                <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                    <div class="wrap">
                                        <label for="#">Type Room</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="room" id="" class="form-control">
                                                    @foreach ($typ as $item)
                                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex">
                                <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                    <div class="wrap">
                                        <label for="#">Customer</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">1 Adult</option>
                                                    <option value="">2 Adult</option>
                                                    <option value="">3 Adult</option>
                                                    <option value="">4 Adult</option>
                                                    <option value="">5 Adult</option>
                                                    <option value="">6 Adult</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex">
                                <div class="form-group d-flex align-self-stretch">
                                    <input type="submit" value="Check Availability"
                                        class="btn btn-primary py-3 px-4 align-self-stretch">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftc-no-pb ftc-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image:  url('{{ asset('client/images/bg_2.jpg') }}');">

                    <a href="https://vimeo.com/45830194"
                        class="icon popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
                        <div class="ml-md-0">
                            <span class="subheading">Welcome to AUGUSTINE Hotel</span>
                            <h2 class="mb-4">Welcome To Our Hotel</h2>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                            would have been rewritten a thousand times and everything that was left from its origin
                            would be the word "and" and the Little Blind Text should turn around and return to its own,
                            safe country. But nothing the copy said could convince her and so it didn’t take long until
                            a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged
                            her into their agency, where they abused her for their.</p>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                            skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                            her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                            continued her way.</p>
                        <ul class="ftco-social d-flex">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
                            </li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-reception-bell"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">25/7 Front Desk</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-serving-dish"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Restaurant Bar</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-car"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Transfer Services</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-spa"></span>
                            </div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Spa Suites</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Rooms</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($room as $item)
                    <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                        <div class="room position-relative">
                            <a href="{{ route('rooms.detail', $item->id) }}"
                                class="img d-flex justify-content-center align-items-center"
                                style="background-image:url('{{ asset('client/images/room-1.jpg') }}');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                                @if ($item->status == 'occupied')
                                    <div class="ribbon">
                                        <span>Occupied</span>
                                    </div>
                                @endif
                            </a>
                            <div class="text p-3 text-center">
                                <h3 class="mb-3"><a
                                        href="{{ route('rooms.detail', $item->id) }}">{{ $item->title }}</a></h3>
                                <p><span class="price mr-2">{{ number_format($item->price) }} $</span> <span
                                        class="per">per night</span></p>
                                <hr>
                                <p class="pt-1"><a href="{{ route('rooms.detail', $item->id) }}"
                                        class="btn-custom">View Room Details <span
                                            class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image:  url('{{ asset('client/images/bg_1.jpg') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="50000">0</strong>
                                    <span>Happy Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="3000">0</strong>
                                    <span>Rooms</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="1000">0</strong>
                                    <span>Staffs</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Destination</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 ftco-animate">
                    <div class="row ftco-animate">
                        <div class="col-md-12">
                            <div class="carousel-testimony owl-carousel ftco-owl">
                                @foreach ($comment as $item)
                                    <div class="owl-item active" style="width: 750px; margin-right: 30px;">
                                        <div class="item">
                                            <img class="rounded-circle" style="width:15%;"
                                                src="{{ asset('client/images/person_2.jpg') }}" alt="">
                                            <div class="media-body">
                                                <p>{{ Str::limit($item->content, 150) }}</p>
                                                <a href="#">
                                                    <h4 class="sec_h4">{{ $item->user->name }}</h4>
                                                </a>
                                                <div class="star">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $item->rate)
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
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                @foreach ($blog as $item)
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20"
                                style="background-image: url('{{ asset('client/images/image_1.jpg') }}');">
                            </a>
                            <div class="text mt-3 d-block">
                                <h3 class="heading mt-3"><a href="#">{{ $item->content }}</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">{{ $item->created_at }}</a></div>
                                    <div><a href="#">{{ $item->user->name }}</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <section class="instagram">
        <div class="container-fluid">
            <div class="row no-gutters justify-content-center pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2><span>Instagram</span></h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-1.jpg" class="insta-img image-popup"
                        style="background-image:  url('{{ asset('client/images/insta-1.jpg') }}');">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-2.jpg" class="insta-img image-popup"
                        style="background-image:  url('{{ asset('client/images/insta-2.jpg') }}');">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-3.jpg" class="insta-img image-popup"
                        style="background-image:  url('{{ asset('client/images/insta-3.jpg') }}');">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-4.jpg" class="insta-img image-popup"
                        style="background-image:  url('{{ asset('client/images/insta-4.jpg') }}');">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-5.jpg" class="insta-img image-popup"
                        style="background-image:  url('{{ asset('client/images/insta-5.jpg') }}');">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
<script></script>
