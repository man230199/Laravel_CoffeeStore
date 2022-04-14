@php
use App\Helpers\URL;
use App\Helpers\Template;
use App\Models\ProductModel;
$productModel = new ProductModel();
$bestSellerItems = $productModel->listItems(null, ['task' => 'store-best-seller-items']);
@endphp
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Khám Phá</span>
                <h2 class="mb-4">Best Coffee Sellers</h2>
                <p>Hãy cùng Coffee Blend khám phá những món best-seller được đông đảo các bạn trẻ đánh giá rất cao này
                    nhé</p>
            </div>
        </div>
        <div class="row">
            @foreach ($bestSellerItems as $item)
                @php
                    $thumbBestSeller = Template::showItemBackground('product', $item['thumb'], $item['thumb']);
                    $productLink = URL::linkProduct($item['id'], $item['name']);
                @endphp
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="{{ $productLink }}" class="img"
                            style="background-image: url({{ $thumbBestSeller }});"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="{{ $productLink }}">{{ $item['name'] }}</a></h3>

                            @if (strlen($item['short_description']) > 10)
                                <p>{!! substr($item['short_description'], 0, 50) !!}</p>
                            @endif
                            <p class="price"><span>{{ number_format($item['price']) }} đ</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
