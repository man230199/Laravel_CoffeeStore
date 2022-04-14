@extends('admin.main')
@php
use App\Helpers\Template as Template;
use App\Models\CategoryModel;
$xhtmlButtonFilter = Template::showButtonFilter($controllerName, $itemsStatusCount, $params['filter']['status'], $params['search']);
$xhtmlCategoryFilter = '';
foreach ($items as $key => $val) {
    $categoryID = $val['category_id'];

    $node = CategoryModel::find($categoryID);
  /*   $xhtmlCategoryFilter = Template::showCustomItemSelect($controllerName, $categoryID, '', 'category', $categories,'filter_category'); */
    $xhtmlCategoryFilter = Form::select('filter_selectbox',['default' => 'Select Category'] + $categories->toArray(),null,['class' => 'form-control', 'data-url' => route('article', ['category_article_id' => 'value_new'])]);

}

$xhtmlAreaSeach = Template::showAreaSearch($controllerName, $params['search']);
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
                        <div class="col-md-4">{!! $xhtmlCategoryFilter !!}</div>
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
                @include('admin.pages.article.list')
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
