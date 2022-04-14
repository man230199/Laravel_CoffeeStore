@extends('admin.main')
@php
use App\Helpers\Form as FormTemplate;
use App\Helpers\Template;

$formInputAttr = config('coffee.template.form_input');
$formLabelAttr = config('coffee.template.form_label');
$formCkeditor = config('coffee.template.form_ckeditor');
$statusValue = ['default' => 'Select status', 'active' => config('coffee.template.status.active.name'), 'inactive' => config('coffee.template.status.inactive.name')];

$inputHiddenID = Form::hidden('id', @$item['id']);
$inputHiddenForm = Form::hidden('form', 'product');
$inputHiddenThumb = Form::hidden('thumb_current', @$item['thumb']);

$elements = [
    [
        'label' => Form::label('name', 'Name', $formLabelAttr),
        'element' => Form::text('name', @$item['name'], $formInputAttr),
    ],
    [
        'label' => Form::label('short_description', 'Short Description', $formLabelAttr),
        'element' => Form::textArea('short_description', @$item['short_description'], $formCkeditor),
    ],
    [
        'label' => Form::label('description', 'Description', $formLabelAttr),
        'element' => Form::textArea('description', @$item['description'], $formCkeditor),
    ],
    [
        'label' => Form::label('price', 'Price', $formLabelAttr),
        'element' => Form::number('price', @$item['price'], $formCkeditor),
    ],

    [
        'label' => Form::label('status', 'Status', $formLabelAttr),
        'element' => Form::select('status', $statusValue, @$item['status'], $formInputAttr),
    ],
    [
        'label' => Form::label('category_product_id', 'Category', $formLabelAttr),
        'element' => Form::select('category_product_id', $categories, @$item['category_product_id'], $formInputAttr),
    ],
    [
        'label' => Form::label('thumb', 'Thumb', $formLabelAttr),
        'element' => Form::file('thumb', $formInputAttr),
        'thumb' => !empty(@$item['id']) ? Template::showItemThumb($controllerName, @$item['thumb'], @$item['name']) : null,
        'type' => 'thumb',
    ],
    // [
    //     'label' => Form::label('thumb', 'Thumb', $formLabelAttr),
    //     // 'element' => Form::file('thumb', $formInputAttr),
    //     'thumb' => !empty(@$item['id']) ? Template::showItemThumb($controllerName, @$item['thumb'], @$item['name']) : null,
    //     'type' => 'drop-thumb',
    // ],
    [
        'element' => $inputHiddenID . $inputHiddenForm . $inputHiddenThumb . Form::submit('Save', ['class' => 'btn btn-success']),
        'type' => 'btn-submit',
    ],
];
@endphp

@section('content')
    @include ('admin.templates.page_header', ['pageIndex' => false])
    @include ('admin.templates.error')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                @include('admin.templates.x_title', ['title' => 'Thông tin sản phẩm'])
                <div class="x_content">
                    {{ Form::open([
                        'method' => 'POST',
                        'url' => route("$controllerName/save"),
                        'accept-charset' => 'UTF-8',
                        'enctype' => 'multipart/form-data',
                        'class' => 'form-horizontal form-label-left',
                        'id' => 'main-form',
                    ]) }}
                    {!! FormTemplate::show($elements) !!}
                    {{ Form::close() }}

                    <div class="dz-preview dz-file-preview">
                        <div class="dz-details">
                            <div class="dz-filename"><span data-dz-name></span></div>
                            <div class="dz-size" data-dz-size></div>
                            <img data-dz-thumbnail />
                        </div>
                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                        <div class="dz-success-mark"><span>✔</span></div>
                        <div class="dz-error-mark"><span>✘</span></div>
                        <div class="dz-error-message"><span data-dz-errormessage></span></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
  {{--   @if (isset($id))
        @include('admin.pages.product.form_attribute')
        @include('admin.pages.product.form_image')
    @endif --}}


@endsection
