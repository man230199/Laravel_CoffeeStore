 @php
     use App\Helpers\Form as FormTemplate;
     use App\Helpers\Template;
     $formInputAttr = config('coffee.template.form_input');
    $formLabelAttr = config('coffee.template.form_label');
     $inputHiddenTask = Form::hidden('task', 'setting-social');
     $tagsInputFacebook = '<input type="text" name="facebook" class="form-control" value="'.$setting['facebook'].'" data-role="tagsinput">';
     $tagsInputYoutube = '<input type="text" name="youtube" class="form-control" value="'.$setting['youtube'].'" data-role="tagsinput">';
     $tagsInputInstagram = '<input type="text" name="instagram" class="form-control" value="'.$setting['instagram'].'" data-role="tagsinput">';
     $elementsBCC = [
         [
             'label' => Form::label('facebook', 'Facebook', $formLabelAttr),
             'element' => $tagsInputFacebook
         ],
         [
             'label' => Form::label('youtube', 'Youtube', $formLabelAttr),
             'element' => $tagsInputYoutube
         ],
         [
             'label' => Form::label('instagram', 'Instagram', $formLabelAttr),
             'element' =>$tagsInputInstagram
         ],
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
{{--  <input type="text" name="social" class="form-control" value="{{ $setting['social'] }}" data-role="tagsinput"> --}}
 {!! FormTemplate::show($elementsBCC) !!}

 {{ Form::close() }}
