@php
use App\Helpers\URL;
use App\Helpers\Template;
@endphp
<section class="ftco-menu mb-5 pb-5">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5 fadeInUp ftco-animated">
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="tab-content ftco-animate fadeInUp ftco-animated" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel"
                                aria-labelledby="v-pills-0-tab">
                                <div class="row">
                                    @foreach ($itemCategory['products'] as $item)
                                        @php
                                            $thumbProduct = Template::showItemBackground('product', $item['thumb'], $item['thumb']);
                                            $productLink = URL::linkProduct($item['id'], $item['name']);
                                        @endphp
                                        <div class="col-md-3">
                                            <div class="menu-entry">
                                                <a href="{{ $productLink }}" class="img"
                                                    style="background-image: url({{ $thumbProduct }});"></a>
                                                <div class="text text-center pt-4">
                                                    <h3><a href="{{ $productLink }}">{{ $item['name'] }}</a></h3>

                                                    <p class="price">
                                                        <span>{{ number_format($item['price']) }}
                                                            đ</span>
                                                    </p>
                                                    <p><a href="cart.html"
                                                            class="btn btn-primary btn-outline-primary">Add
                                                            to Cart</a></p>
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
        </div>
    </div>
</section>
