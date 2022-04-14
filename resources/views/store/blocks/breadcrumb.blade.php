@php
use App\Helpers\URL;
@endphp
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{ asset('store/images/bg_3.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">{{ $item['name'] }}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Trang
                                chủ</a></span>/
                        @if (isset($breadcrumbs))
                            @foreach ($breadcrumbs as $id => $breadcrumb)
                                @php
                                    $link = URL::linkCategory($id, $breadcrumb);
                                @endphp

                                <a href="{{ $link }}"> <span>{{ $breadcrumb }}</span></a>
                            @endforeach
                        @else
                            <a href="#"> <span>{{ $item['name'] }}</span></a>
                        @endif
                    </p>


                </div>
            </div>
        </div>
    </div>
</section>
