@extends('admin.main')
@section('content')
    <div class="page-header zvn-page-header clearfix">
        <div class="zvn-page-header-title">
            <h3>Dashboard</h3>
        </div>
    </div>
    <div class="">
        <div class="row" style="display: inline-block;">
            <div class="top_tiles">
                @foreach ($tablesInfo as $item)
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6" style="width:300px">
                        <div class="tile-stats">
                            <div class="icon"><i class="{{ $item['icon'] }}"></i></div>
                            <h3>{{ $item['count'] }}</h3>
                            <div class="count">{{ $item['name'] }}</div>
                            <a href="{{ $item['route'] }}">Xem chi tiết</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
