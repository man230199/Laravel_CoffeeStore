@php
use App\Helpers\Form as FormTemplate;
use App\Helpers\Template;
$inputHiddenTask = Form::hidden('task', 'attribute');

$tmp = [];
$inputHiddenID = Form::hidden('id', @$item['id']);
$inputHiddenForm = Form::hidden('form', 'product_image');
$inputHiddenImages = Form::hidden('hidden_images[]','');

$elementsAttribute = [['element' => $inputHiddenID . $inputHiddenImages .  $inputHiddenForm . Form::submit('Save', ['class' => 'btn btn-success', 'id' => 'dropzone-btn-submit']), 'type' => 'btn-submit']];
@endphp

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            @include('admin.templates.x_title', ['title' => 'Hình ảnh sản phẩm'])
            <div class="x_content">
                {{ Form::open([
                    'method' => 'POST',
                    'url' => route("$controllerName/save"),
                    'accept-charset' => 'UTF-8',
                    'enctype' => 'multipart/form-data',
                    'class' => 'dropzone',
                    'id' => 'dropzone',
                ]) }}
                {!! FormTemplate::show($elementsAttribute) !!}
                {{ Form::close() }}
            
            </div>
        </div>
    </div>
</div>
