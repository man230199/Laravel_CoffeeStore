 @php
     use App\Helpers\Form as FormTemplate;
     use App\Helpers\Template;
     $formInputAttr = config('coffee.template.form_input');
     $formLabelAttr = config('coffee.template.form_label');
     $formCkEditor = config('coffee.template.form_ckeditor');
     $inputHiddenLogo = Form::hidden('current_logo', $setting['logo']);
     $tagsInputHotline = '<input type="text" name="hotline" class="form-control" value="' . $setting['hotline'] . '" data-role="tagsinput">';
     $inputHiddenTask = Form::hidden('task', 'setting-general');
     $elements = [
         [
             'label' => Form::label('logo', 'Logo', $formLabelAttr),
             'element' => Form::file('logo', $formInputAttr),
             'thumb' => Template::showItemThumb($controllerName, $setting['logo'], $setting['logo']),
             'type' => 'thumb',
         ],
         [
             'label' => Form::label('hotline', 'Hotline', $formLabelAttr),
             'element' => $tagsInputHotline,
         ],
         [
             'label' => Form::label('hotline_description', 'Thông tin hotline', $formLabelAttr),
             'element' => Form::text('hotline_description', @$setting['hotline_description'], $formInputAttr),
         ],
         [
             'label' => Form::label('email', 'Email', $formLabelAttr),
             'element' => Form::text('email', $setting['email'], $formInputAttr),
         ],
         [
             'label' => Form::label('openday', 'Ngày làm việc', $formLabelAttr),
             'element' => Form::text('openday', @$setting['openday'], $formInputAttr),
         ],
         [
             'label' => Form::label('time', 'Thời gian làm việc', $formLabelAttr),
             'element' => Form::text('time', $setting['time'], $formInputAttr),
         ],
         [
             'label' => Form::label('copyright', 'Copyright', $formLabelAttr),
             'element' => Form::text('copyright', $setting['copyright'], $formInputAttr),
         ],
         [
             'label' => Form::label('address', 'Địa chỉ', $formLabelAttr),
             'element' => Form::text('address', $setting['address'], $formInputAttr),
         ],
         [
             'label' => Form::label('address_description', 'Thông tin địa chỉ', $formLabelAttr),
             'element' => Form::text('address_description', @$setting['address_description'], $formInputAttr),
         ],
         [
             'label' => Form::label('about', 'Giới thiệu', $formLabelAttr),
             'element' => Form::textArea('about', $setting['about'], $formCkEditor),
         ],
         [
             'label' => Form::label('map', 'Google Map', $formLabelAttr),
             'element' => Form::textArea('map', $setting['map'], $formInputAttr),
         ],
         [
             'element' => $inputHiddenTask . $inputHiddenLogo . Form::submit('Save', ['class' => 'btn btn-success']),
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
 {!! FormTemplate::show($elements) !!}
 {{ Form::close() }}
