 @php
     use App\Helpers\Form as FormTemplate;
     use App\Helpers\Template;
     $formInputAttr = config('coffee.template.form_input');
     $formLabelAttr = config('coffee.template.form_label');
     $inputHiddenTask = Form::hidden('task', 'setting-mail');
     $elementsMail = [
         [
             'label' => Form::label('username', 'UserName', $formLabelAttr),
             'element' => Form::text('username', $setting['username'], $formInputAttr),
         ],
         [
             'label' => Form::label('password', 'Password', $formLabelAttr),
             'element' => Form::text('password', $setting['password'], $formInputAttr),
         ],
         [
             'element' => $inputHiddenTask . Form::submit('Save', ['class' => 'btn btn-success']),
             'type' => 'btn-submit',
         ],
     ];
 @endphp

 <!-- Tab content -->

 {{ Form::open([
     'method' => 'POST',
     'url' => route("$controllerName/save"),
     'accept-charset' => 'UTF-8',
     'enctype' => 'multipart/form-data',
     'class' => 'form-horizontal form-label-left',
     'id' => 'main-form',
 ]) }}
 {!! FormTemplate::show($elementsMail) !!}
 {{ Form::close() }}
