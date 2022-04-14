@php
use App\Helpers\Template;
use App\Helpers\URL;
use App\Models\ProductModel;
$productModel = new ProductModel();
$bestSellerItems = $productModel->listItems(null, ['task' => 'store-best-seller-items']);
@endphp
<section class="ftco-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 pr-md-5">
                <div class="heading-section text-md-right ftco-animate">
                    <span class="subheading">Khám Phá</span>
                    <h2 class="mb-4">Các món ngon</h2>
                    <p class="mb-4">Hãy đến với Coffee Blend để tận hưởng không gian thoáng mát cùng vị ngon
                        tuyệt vời từ những ly trà và cà phê tuyệt hảo, hay cùng bạn bè sẻ chia những món tráng miệng
                        ngon tuyệt vời từ Coffee Blend nhé</p>
                    <p><a href="{{ route('product/list') }}" class="btn btn-primary btn-outline-primary px-4 py-3">Xem
                            Menu</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    @foreach ($bestSellerItems as $item)
                        @php
                            $linkProduct = URL::linkProduct($item['id'], $item['name']);
                            $thumbBestSeller = Template::showItemBackground('product', $item['thumb'], $item['thumb']);
                        @endphp
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="{{ $linkProduct }}" class="img"
                                    style="background-image: url({{ $thumbBestSeller }});"></a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
