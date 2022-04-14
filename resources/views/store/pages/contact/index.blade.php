@extends('store.main')
@section('content')

    @php
    $itemContact['name'] = 'Liên hệ';
    @endphp
    @include('store.blocks.breadcrumb', ['item' => $itemContact])

    <section class="ftco-section contact-section">
        <div class="container mt-5">
            <div class="row block-9">
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4">Thông tin liên hệ</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Địa chỉ:</span> {{ $itemContact['address'] }}</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Hotline:</span> <a href="tel://1234567920">+ {{ $itemContact['hotline'] }}</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">{{ $itemContact['email'] }}</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Website:</span> <a href="{{ route('home') }}">Coffee Blend</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate">
                    <form action="{{ route("$controllerName/sendContact") }}" method="post" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Họ và tên">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Số điện thoại">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control"
                                placeholder="Lời nhắn"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Gửi" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
