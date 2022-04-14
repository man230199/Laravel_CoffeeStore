@extends('admin.main')
@php
    use App\Helpers\Form as FormTemplate;
    use App\Helpers\Template;
    use App\Helpers\BackendFunction;

    $formInputAttr = config('coffee.template.form_input');
    $formLabelAttr = config('coffee.template.form_label');
    $datetime = '<span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>';

    $statusValue        = ['default' => 'Select status', 'active' => config('coffee.template.status.active.name'), 'inactive' => config('coffee.template.status.inactive.name')];

    $inputHiddenID      = Form::hidden('id', @$item['id']);
    
    $randomCode = BackendFunction::randomString(6);
    $code = (isset($item['id'])) ? $item['code'] : $randomCode; 

    $elements = [
        [
            'label'   => Form::label('code', 'Code', $formLabelAttr),
            'element' => Form::text('code', $code, $formInputAttr ),
            'type'     => 'input-generate'         
        ],
        [
            'label'   => Form::label('value_percent', 'Giá trị %', $formLabelAttr),
            'element' => Form::number('value_percent', @$item['value_percent'], $formInputAttr )
        ],
        [
            'label'   => Form::label('value_price', 'Giá trị thật', $formLabelAttr),
            'element' => Form::number('value_price', @$item['value_price'], $formInputAttr )
        ],
        [
            'label'   => Form::label('start_date', 'Ngày bắt đầu', $formLabelAttr),
            'element' => Form::text('start_date', @$item['start_date'], $formInputAttr ),
            'type'     => 'datetime'          
        ],
        [
            'label'   => Form::label('end_date', 'Ngày kết thúc', $formLabelAttr),
            'element' => Form::text('end_date', @$item['end_date'], $formInputAttr),
            'type'     => 'datetime'
        ],
        [
            'label'   => Form::label('min_total', 'Tổng nhỏ nhất', $formLabelAttr),
            'element' => Form::text('min_total', @$item['min_total'], $formInputAttr )
        ],
        [
            'label'   => Form::label('max_total', 'Tổng lớn nhất', $formLabelAttr),
            'element' => Form::text('max_total', @$item['max_total'], $formInputAttr )
        ],
        [
            'label'   => Form::label('total_uses', 'Số lần dùng', $formLabelAttr),
            'element' => Form::text('total_uses', @$item['total_uses'], $formInputAttr )
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
