@php
use App\Helpers\Form as FormTemplate;
use App\Helpers\Template;
$inputHiddenTask = Form::hidden('task', 'attribute');

$tmp = [];
$inputHiddenID = Form::hidden('id', @$item['id']);
$inputHiddenForm = Form::hidden('form', 'product_attribute');
/* 
$tmp = [];
foreach ($attributeItems as $attr) {
    $tmp[$attr['attribute_name']]['id'] = $attr['attribute_id'];
    foreach ($productAttribute as $val) {
        $tmp[$val['attribute_name']]['value'][] = @$val['value'];
    }
}

$output = [];
foreach ($tmp as $name => $values) {
    $output[] = [
        'attribute_id' => $values['id'],
        'name' => $name,
        'values' => @$values['value'],
    ];
}
 */
$elementsAttribute = [];
foreach ($attributeItems as $key => $values) {
    $elementsAttribute[] = [
        'label' => Form::label('attribute_id', $values['name'], $formLabelAttr),
        'element' => '<input type="text" name="attribute_id[' . $values['id'] . ']" class="form-control" value="' . $values['value'] . '" data-role="tagsinput">',
    ];
}

$elementsAttribute[] = [
    'element' => $inputHiddenID . $inputHiddenForm . Form::submit('Save', ['class' => 'btn btn-success']),
    'type' => 'btn-submit',
];
@endphp

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            @include('admin.templates.x_title', ['title' => 'Thuộc tính sản phẩm'])
            <div class="x_content">
                {{ Form::open([
                    'method' => 'POST',
                    'url' => route("$controllerName/save"),
                    'accept-charset' => 'UTF-8',
                    'enctype' => 'multipart/form-data',
                    'class' => 'form-horizontal form-label-left',
                    'id' => 'main-form',
                ]) }}
                {!! FormTemplate::show($elementsAttribute) !!}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
