@extends('admin.main')
@php
use App\Helpers\Template as Template;
$xhtmlButtonFilter = Template::showButtonFilter($controllerName, $itemsStatusCount, $params['filter']['status'], $params['search']);
$xhtmlAreaSeach = Template::showAreaSearch($controllerName, $params['search']);
foreach ($cityList as $key => $city) {
    $newCityList[$city['id']] = $city['city'];
}
$xhtmlCityFilter = Form::select('filter_city', ['default' => 'Vui lòng chọn địa điểm'] + $newCityList, null, ['class' => 'form-control', 'data-url' => route('article', ['category_id' => 'value_new'])]);

@endphp


@section('content')

    @include ('admin.templates.page_header', ['pageIndex' => true])
    @include ('admin.templates.coffee_store_notify')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                @include('admin.templates.x_title', ['title' => 'Bộ lọc'])
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-4">{!! $xhtmlButtonFilter !!}</div>
                        <div class="col-md-4">{!! $xhtmlCityFilter !!}</div>
                        <div class="col-md-4">{!! $xhtmlAreaSeach !!}</div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                @include('admin.templates.x_title', ['title' => 'Danh sách'])
                @include('admin.pages.shipping.list')
            </div>
        </div>
    </div>

    @if (count($items) > 0)
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    @include('admin.templates.x_title', ['title' => 'Phân trang'])
                    @include('admin.templates.pagination')
                </div>
            </div>
        </div>
    @endif
@endsection
