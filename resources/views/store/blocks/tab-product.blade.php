@php
use App\Helpers\URL;
use App\Helpers\Template;
use App\Models\CategoryModel;
use App\Models\ProductModel;
$productModel = new ProductModel();
$categoryModel = new CategoryModel();
$categoryItems = $categoryModel->listItems(null, ['task' => 'store-home-list-items']);
$cateID = array_unique(array_column($categoryItems, 'id'));
foreach ($cateID as $id) {
    $productItemsByCategory['products'][$id] = $productModel->listItems(['category_product_id' => $id], ['task' => 'store-list-items-in-category']);
}
@endphp
<section class="ftco-menu">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Khám Phá</span>
                <h2 class="mb-4">Các Món Ngon </h2>
                <p>Tại đây bạn sẽ được thưởng thức các thức uống cực kì ngon miệng và phù hợp với khẩu vị với các bạn
                    tuổi Teen. Hãy cùng khám phá xem tại đây có những gì nhé!</p>
            </div>
        </div>
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            @foreach ($categoryItems as $index => $item)
                                @php
                                    $activeClass = $index == 0 ? 'active' : '';
                                    $categoryID = $item['id'];
                                @endphp
                                <a class="nav-link {{ $activeClass }}" id="v-pills-{{ $categoryID }}-tab"
                                    data-toggle="pill" href="#v-pills-{{ $categoryID }}" role="tab"
                                    aria-controls="v-pills-{{ $categoryID }}" aria-selected="true">
                                    {{ $item['name'] }}
                                </a>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">

                        <div class="tab-content ftco-animate" id="v-pills-tabContent">

                            @foreach ($categoryItems as $index => $category)
                                @php
                                    $activeClass = $index == 0 ? 'show active' : '';
                                    $categoryID = $category['id'];
                                    $categoryLink = URL::linkCategory($categoryID, $category['name']);
                                @endphp
                                <div class="tab-pane fade {{ $activeClass }}" id="v-pills-{{ $categoryID }}"
                                    role="tabpanel" aria-labelledby="v-pills-{{ $categoryID }}-tab">
                                    <div class="row">
                                        @foreach ($productItemsByCategory['products'][$categoryID] as $index => $item)
                                            @if ($item['category_product_id'] == $category['id'] && $index < 3)
                                                @php
                                                    $thumbProduct = Template::showItemBackground('product', $item['thumb'], $item['thumb']);
                                                    $productLink = URL::linkProduct($item['id'], $item['name']);
                                                @endphp
                                                <div class="col-md-4 text-center">
                                                    <div class="menu-wrap">
                                                        <a href="{{ $productLink }}" class="menu-img img mb-4"
                                                            style="background-image: url({{ $thumbProduct }});"></a>
                                                        <div class="text">
                                                            <h3><a
                                                                    href="{{ $productLink }}">{{ $item['name'] }}</a>
                                                            </h3>
                                                            <p>{!! $item['short_description'] !!}</p>
                                                            <p class="price">
                                                                <span>{{ number_format($item['price']) }} đ</span>
                                                            </p>
                                                            <p><a href="#"
                                                                    class="btn btn-primary btn-outline-primary">Add
                                                                    to
                                                                    cart</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <a href="{{ $categoryLink }}"
                                        class="btn btn-primary btn-outline-primary center-btn px-4 py-3">Xem tất cả</a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
