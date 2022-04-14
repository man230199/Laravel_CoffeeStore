@extends('store.main')
@section('content')


    @php
    use App\Helpers\URL;
    $productID = $productDetail['id'];
    $price = $productDetail['price'];
    $size = 0;
    $quantity = 1;
    $cartLink = URL::linkCart($productID, $price, $size, $quantity);
    @endphp
    @include('store.blocks.breadcrumb',['item' => $productDetail])
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{ asset('storage/images/product') }}/{{ $productDetail['thumb'] }}" class="image-popup">
                        <img src="{{ asset('images/product') }}/{{ $productDetail['thumb'] }}" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{ $productDetail['name'] }}</h3>
                    <p class="price"><span>{{ number_format($productDetail['price']) }} đ</span></p>
                    <p>{!! $productDetail['description'] !!}
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="size" id="size" class="form-control">
                                        @foreach ($attributeItems as $item)
                                            <option value="{{ $item['name'] }}" data-size="{{ $item['name'] }}"
                                                data-value="{{ $item['value'] }}">
                                                {{ $item['name'] }}</option>
                                        @endforeach

                                    </select>
                                    <input type="hidden" name="product_id" value="{{$productDetail['id']}}">
                                    <input type="hidden" name="price" value="{{$productDetail['price']}}">
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                            <span class="input-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn" id="quantity-btn" data-type="minus"
                                    data-field="">
                                    <i class="icon-minus"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity-input" name="quantity" class="form-control input-number"
                                value="1" min="1" max="100">
                            <span class="input-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" id="quantity-btn" data-type="plus"
                                    data-field="">
                                    <i class="icon-plus"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <p><a id="add-to-cart" data-url="{{ $cartLink }}"
                            class="btn btn-primary py-3 px-5">Add to Cart</a></p>
                </div>
            </div>
        </div>
    </section>
