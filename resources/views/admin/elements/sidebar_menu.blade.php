<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
        <img src="{{ asset('admin/img/img.jpg') }}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Welcome,</span>
        <h2>luutruonghailan</h2>
    </div>
</div>
<!-- /menu profile quick info -->
<br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Menu</h3>
        <ul class="nav side-menu">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="{{ route('user') }}"><i class="fa fa-user"></i> User</a></li>
            <li><a href="{{ route('categoryArticle') }}"><i class="fa fa fa-building-o"></i> Danh mục bài viết</a></li>
           
            <li><a><i class="fa fa fa-building-o"></i>Thông Tin Sản phẩm<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('category') }}">Danh Mục Sản Phẩm</a></li>
                    <li><a href="{{ route('product') }}">Thông Tin Sản phẩm</a></li>
                    <li><a href="{{ route('attribute') }}"> Thuộc Tính Sản Phẩm</a></li>
                </ul>
            </li>
            <li><a href="{{ route('shipping') }}"><i class="fa fa-newspaper-o"></i> Shipping</a></li>
            <li><a href="{{ route('article') }}"><i class="fa fa-newspaper-o"></i> Article</a></li>
            <li><a href="{{ route('slider') }}"><i class="fa fa-sliders"></i> Silders</a></li>
            <li><a href="{{ route('rss') }}"><i class="fa fa-newspaper-o"></i> Rss</a></li>
            {{-- <li><a href="http://127.0.0.1:8000/admin123/filemanager"><i class="fa fa-bars"></i> Gallery</a></li> --}}
            <li><a href="http://127.0.0.1:8000/adminstore/filemanager"><i class="fa fa-bars"></i> Gallery</a></li>
            <li><a href="{{ route('menu') }}"><i class="fa fa-bars"></i> Menu</a></li>
            <li><a><i class="fa fa-cogs"></i> Setting <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('setting', ['type' => 'setting-general']) }}">General</a></li>
                    <li><a href="{{ route('setting', ['type' => 'setting-mail']) }}">Mail</a></li>
                    <li><a href="{{ route('setting', ['type' => 'setting-bcc']) }}">Bcc</a></li>
                    <li><a href="{{ route('setting', ['type' => 'setting-social']) }}">Social</a></li>
                </ul>
            </li>
            <li><a href="{{ route('coupon') }}"><i class="fa fa-cogs"></i> Coupon</a></li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->
