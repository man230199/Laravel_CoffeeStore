@extends('store.main')
@section('content')
    @php
    use App\Helpers\Template as Template;
    $item['name'] = 'Checkout';
    $total = 0;
    @endphp
    @include('store.blocks.breadcrumb', ['item' => $item])
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 ftco-animate">
                    <form action="{{ route('cart/buy') }}" method="post" class="billing-form ftco-bg-dark p-3 p-md-5">
                        @csrf
                        <h3 class="mb-4 billing-heading">Thông tin đặt hàng</h3>
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fullname">Họ tên</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Nhập họ tên">
                                </div>
                            </div>
                            <div class="w-100"></div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Vui lòng chọn thành phố</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>

                                        <select name="city" id="" class="form-control">
                                            @foreach ($shippings as $item)
                                                <option value="{{ $item['city'] }}">{{ $item['city'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ">
                                </div>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Nhập Email">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <p><a><button type="submit" class="btn btn-primary py-3 px-4">ĐẶT HÀNG</button></a></p>
                            </div>
                        </div>
                        @foreach ($cartItems as $item)
                            @php
                                $total += $item['totalprice'];
                            @endphp
                            <input type="hidden" name="form[product_id][]" value="{{ $item['id'] }}">
                            <input type="hidden" name="form[product_name][]" value="{{ $item['name'] }}">
                            <input type="hidden" name="form[price][]" value="{{ $item['price'] }}">
                            <input type="hidden" name="form[quantity][]" value="{{ $item['quantity'] }}">
                            <input type="hidden" name="form[thumb][]" value="{{ $item['thumb'] }}">
                            <input type="hidden" name="form[total]" value="{{ $total}}">
                        @endforeach

                    </form><!-- END -->

                    <div class="row mt-5 pt-3 d-flex">
                        <div class="col-md-6 d-flex">
                            <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Cart Total</h3>
                                <p class="d-flex">
                                    <span>Subtotal</span>
                                    <span>$20.60</span>
                                </p>
                                <p class="d-flex">
                                    <span>Delivery</span>
                                    <span>$0.00</span>
                                </p>
                                <p class="d-flex">
                                    <span>Discount</span>
                                    <span>$3.00</span>
                                </p>
                                <hr>
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    <span>$17.60</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p><a href="#" class="btn btn-primary py-3 px-4">ĐẶT HÀNG</a></p>
                        </div>

                    </div>
                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section> <!-- .section -->
@endsection
