@extends('store.main')
@php
use App\Helpers\Template;
use Illuminate\Support\Facades\Session;

@endphp


<section class="ftco-section ftco-cart">
    @if (!empty(Session::get('cart')))
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
                    <div class="cart-list">

                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($cartItems as $item)
                                    @php
                                        $total += $item['totalprice'];
                                        $thumb = Template::showItemBackground('product', $item['thumb']);
                                    @endphp

                                    <tr class="text-center">
                                        <td class="product-remove"><a href="#"><span class="icon-close"></span></a>
                                        </td>

                                        <td class="image-prod">
                                            <div class="img"
                                                style="background-image:url({{ $thumb }});">
                                            </div>
                                        </td>

                                        <td class="product-name">
                                            <h3>{{ $item['name'] }}</h3></br>
                                            <h5>Size: {{ $item['size'] }}</h5>

                                        </td>

                                        <td class="price">{{ number_format($item['price']) }} đ</td>

                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="text" name="quantity"
                                                    class="quantity form-control input-number"
                                                    value="{{ $item['quantity'] }}" min="1" max="100">
                                            </div>
                                        </td>

                                        <td class="total">{{ number_format($item['totalprice']) }} đ</td>
                                    </tr><!-- END TR-->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group" style="padding-top:10px">
                        <input type="text" class="form-control" name="coupon" placeholder="Nhập mã khuyến mãi">
                        <p class="text-center"><a id="coupon_accept" data-url="{{route("cart/coupon")}}" class="btn btn-primary py-3 px-4">ÁP
                                DỤNG</a></p>
                        @foreach ($coupons as $coupon)
                            <input type="hidden" name="value_price" value="{{ $coupon['value_price'] }}">
                            <input type="hidden" name="value_percent" value="{{ $coupon['value_percent'] }}">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate fadeInUp ftco-animated">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>

                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span id="total_price">{{ number_format($total) }} đ</span>
                        </p>
                    </div>
                    <p class="text-center"><a href="{{ route("$controllerName/checkout") }}"
                            class="btn btn-primary py-3 px-4">Proceed to
                            Checkout</a></p>
                </div>
            </div>
        </div>
    @else
        <h6 style="text-align:center">Không có sản phẩm nào trong giỏ hàng</h6>
    @endif
</section>


