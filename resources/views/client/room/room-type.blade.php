<div class="row">
    @foreach ($items as $item)
        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
            <div class="room position-relative">
                <a href="{{ route('rooms.detail', $item->id) }}"
                    class="img d-flex justify-content-center align-items-center"
                    style="background-image: url('{{ asset('client/images/room-1.jpg') }}');">
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
                    <h3 class="mb-3"><a href="{{ route('rooms.detail', $item->id) }}">{{ $item->title }}</a></h3>
                    <p><span class="price mr-2">{{ number_format($item->price) }} $</span>
                    <ul class="list">
                        <li><span>Max:</span> {{ $item->capacity }}</li>
                        <li><span>Size:</span> {{ $item->size }} m2</li>
                        <li><span>View:</span> {{ $item->view }}</li>
                        <li><span>floor:</span> {{ $item->floor }}</li>
                    </ul>
                    <hr>
                    <p class="pt-1"><a href="{{ route('rooms.detail', $item->id) }}" class="btn-custom">Book Now <span
                                class="icon-long-arrow-right"></span></a>
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
