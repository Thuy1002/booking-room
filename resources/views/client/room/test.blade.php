@extends('layout.Client.master')
@section('title')
    Rooms
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
            background-color: #bb620ab5;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            transform: rotate(45deg);
            transform-origin: top left;
        }
    </style>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div id="list-product" class="row">
                        @foreach ($room as $item)
                            @include('client.room.room-type', ['items' => [$item]])
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 sidebar">
                    <div class="sidebar-wrap bg-light ftco-animate">
                        <h3 class="heading mb-4">Advanced Search</h3>
                        <form action="#">
                            <div class="fields">
                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <div style="font-size: 20px;margin-top:16px;margin-right:70px;" class="icon">
                                            <span class="ion-ios-arrow-down"></span>
                                        </div>
                                        <label for="select-type">Loại phòng:</label>
                                        <select name="type" id="select-type" class="form-control">
                                            @foreach ($type as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <input class="form-control" type="number" name="" id=""
                                            placeholder="Capacity">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="range-slider">
                                        <span>
                                            <input type="number" value="25000" min="0" max="120000" /> -
                                            <input type="number" value="50000" min="0" max="120000" />
                                        </span>
                                        <input value="1000" min="0" max="120000" step="500" type="range" />
                                        <input value="50000" min="0" max="120000" step="500" type="range" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-wrap bg-light ftco-animate">
                        <h3 class="heading mb-4">Star Rating</h3>
                        <form method="post" class="star-rating">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                class="icon-star"></i><i class="icon-star"></i><i
                                                class="icon-star"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                class="icon-star"></i><i class="icon-star"></i><i
                                                class="icon-star-o"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                class="icon-star"></i><i class="icon-star-o"></i><i
                                                class="icon-star-o"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                class="icon-star-o"></i><i class="icon-star-o"></i><i
                                                class="icon-star-o"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i
                                                class="icon-star-o"></i><i class="icon-star-o"></i><i
                                                class="icon-star-o"></i></span></p>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        {{ $room->links('Admin.paginate') }}
    </div>
    <script>
        $(document).ready(function() {
            $('#select-type').on('change', function() {
                var selectedType = $(this).val();
                console.log("Selected ID:", selectedType);
                $.ajax({
                    url: '{{ route('rooms.select') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        type: selectedType
                    },
                    success: function(response) {
                        if (response.status) {
                            $('#list-product').html(response.html);
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('AJAX Error:', textStatus, errorThrown);
                    }
                });
            });
        });
    </script>
@endsection
