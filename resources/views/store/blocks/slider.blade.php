@php
use App\Helpers\Template;
use App\Models\SliderModel;
$sliderModel  = new SliderModel();
$sliderItems = $sliderModel->listItems(null, ['task' => 'store-list-items']);
@endphp
<section class="home-slider owl-carousel">
    @foreach ($sliderItems as $item)
        @php
            $thumb = Template::showItemBackground('slider', $item['thumb']);
        @endphp
        <div class="slider-item" style="background-image: url({{ $thumb }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">{{ $item['name'] }}</h1>
                        <p class="mb-4 mb-md-5">{!! $item['description'] !!}</p>
                        <a href="{{ route('product/list') }}"
                            class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                    </div>

                </div>
            </div>
        </div>
    @endforeach

</section>
