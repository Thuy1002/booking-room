@extends('layout.Client.master')

@section('title')
    Bài viết
@endsection

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                @foreach ($blogs as $item)
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{ route('blog.detail', $item->id) }}" class="block-20"
                                style="background-image: url('{{ $item->image_path ? asset('storage/' . $item->image_path) : '' }} ');">
                            </a>
                            <div class="text mt-3 d-block">
                                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control
                                        about
                                        the blind texts</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">Dec 6, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-between align-items-center flex-wrap">
                {{ $blogs->links('Admin.paginate') }}
            </div>
        </div>
    </section>
@endsection
