 @php
     use App\Helpers\Form as FormTemplate;
     use App\Helpers\Template;
     $inputHiddenTask = Form::hidden('task', 'setting-bcc');
     $elementsBCC = [
         [
             'element' => $inputHiddenTask . Form::submit('Save', ['class' => 'btn btn-success']),
             'type' => 'btn-submit',
         ],
     ];
 @endphp


 {{ Form::open([
     'method' => 'POST',
     'url' => route("$controllerName/save"),
     'accept-charset' => 'UTF-8',
     'enctype' => 'multipart/form-data',
     'class' => 'form-horizontal form-label-left',
     'id' => 'main-form',
 ]) }}
 <input type="text" name="bcc" class="form-control" value="{{ $setting['bcc'] }}" data-role="tagsinput">
 {!! FormTemplate::show($elementsBCC) !!}

 {{ Form::close() }}
