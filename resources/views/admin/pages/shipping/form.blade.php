@extends('admin.main')
@php
    use App\Helpers\Form as FormTemplate;
    use App\Helpers\Template;
    use App\Helpers\BackendFunction;

    $formInputAttr = config('coffee.template.form_input');
    $formLabelAttr = config('coffee.template.form_label');

    $statusValue        = ['default' => 'Select status', 'active' => config('coffee.template.status.active.name'), 'inactive' => config('coffee.template.status.inactive.name')];

    $inputHiddenID      = Form::hidden('id', @$item['id']);

    $elements = [
        [
            'label'   => Form::label('city', 'Thành phố', $formLabelAttr),
            'element' => Form::text('city', @$item['city'], $formInputAttr ),     
        ],
        [
            'label'   => Form::label('shipping', 'Phí Ship', $formLabelAttr),
            'element' => Form::text('shipping', @$item['shipping'], $formInputAttr ),     
        ],
        
        [
            'label'   => Form::label('status', 'Status', $formLabelAttr),
            'element' => Form::select('status', $statusValue, @$item['status'], $formInputAttr)
        ],
       
        [
            'element' => $inputHiddenID . Form::submit('Save', ['class'=>'btn btn-success']),
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
