@extends('admin.main')
@php
    use App\Helpers\Form as FormTemplate;
    use App\Helpers\Template;

    $formInputAttr = config('coffee.template.form_input');
    $formLabelAttr = config('coffee.template.form_label');
    $formCkeditor = config('coffee.template.form_ckeditor');
    $statusValue      = ['default' => 'Select status', 'active' => config('coffee.template.status.active.name'), 'inactive' => config('coffee.template.status.inactive.name')];

    $inputHiddenID    = Form::hidden('id', @$item['id']);
    $inputHiddenThumb = Form::hidden('thumb_current', @$item['thumb']);

    $elements = [
        [
            'label'   => Form::label('name', 'Name', $formLabelAttr),
            'element' => Form::text('name', @$item['name'], $formInputAttr )
        ],[
            'label'   => Form::label('description', 'Description', $formLabelAttr),
            'element' => Form::textArea('description', @$item['description'],  $formCkeditor )
        ],[
            'label'   => Form::label('status', 'Status', $formLabelAttr),
            'element' => Form::select('status', $statusValue, @$item['status'], $formInputAttr)
        ],[
            'label'   => Form::label('link', 'Link', $formLabelAttr),
            'element' => Form::text('link', @$item['link'],  $formInputAttr )
        ],[
            'label'   => Form::label('thumb', 'Thumb', $formLabelAttr),
            'element' => Form::file('thumb', $formInputAttr ),
            'thumb'   => (!empty(@$item['id'])) ? Template::showItemThumb($controllerName, @$item['thumb'], @$item['name']) : null ,
            'type'    => "thumb"
        ],[
            'element' => $inputHiddenID . $inputHiddenThumb . Form::submit('Save', ['class'=>'btn btn-success']),
            'type'    => "btn-submit"
        ]
    ];
@endphp

@section('content')
    @include ('admin.templates.page_header', ['pageIndex' => false])
    @include ('admin.templates.error')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                @include('admin.templates.x_title', ['title' => 'Form'])
                <div class="x_content">
                    {{ Form::open([
                        'method'         => 'POST', 
                        'url'            => route("$controllerName/save"),
                        'accept-charset' => 'UTF-8',
                        'enctype'        => 'multipart/form-data',
                        'class'          => 'form-horizontal form-label-left',
                        'id'             => 'main-form' ])  }}
                        {!! FormTemplate::show($elements)  !!}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
