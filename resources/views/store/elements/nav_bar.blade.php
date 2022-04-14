@php
use App\Models\CategoryModel;
use App\Models\CategoryArticleModel;
use App\Helpers\URL;
use Illuminate\Http\Request;
$categoryModel = new CategoryModel();
$categoryArticleModel = new CategoryArticleModel();
$categoryItems = $categoryModel->listItems(null, ['task' => 'store-list-items']);
$categoryArticleItems = $categoryArticleModel->listItems(null, ['task' => 'store-list-items']);
$cartQuantity = 0;
if(!empty(session('cart'))) {
    $cart = session('cart');
    foreach($cart['quantity'] as $key => $value) {
        $cartQuantity += $value;
    }
}


@endphp
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Coffee<small>Blend</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Trang chủ</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Bài viết</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        @foreach ($categoryArticleItems as $item)
                            @php
                                $categoryArticleLink = URL::linkCategoryArticle($item['id'], $item['name']);
                            @endphp
                            <a class="dropdown-item" href="{{ $categoryArticleLink }}">{{ $item['name'] }}</a>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Giới thiệu</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Menu</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        @foreach ($categoryItems as $item)
                            @php
                                $categoryLink = URL::linkCategory($item['id'], $item['name']);
                            @endphp
                            <a class="dropdown-item" href="{{ $categoryLink }}">{{ $item['name'] }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item"><a href="{{ route('contact/index') }}" class="nav-link">Liên hệ</a>
                </li>
                @if (session('userInfo'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{ session('userInfo')['username'] }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{ route('auth/logout') }}">Đăng xuất</a>
                        </div>
                    </li>

                @else
                    <li class="nav-item"> <a class="nav-link" href="{{ route('auth/login') }}">Đăng nhập
                        </a>
                    </li>
                @endif
                <li class="nav-item cart"><a href="{{ route('cart/show') }}" class="nav-link"><span
                            class="icon icon-shopping_cart"></span><span
                            class="bag d-flex justify-content-center align-items-center"><small
                                id="cart_quantity">{{$cartQuantity}}</small></span></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
