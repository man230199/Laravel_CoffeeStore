 @php
     use App\Helpers\Form as FormTemplate;
     use App\Helpers\Template;
     $formInputAttr = config('coffee.template.form_input');
     $formLabelAttr = config('coffee.template.form_label');
     $inputHiddenStoryImage= Form::hidden('current_story_image', @$setting['story_image']);
     $hiddenStatisticBackground= Form::hidden('current_statistic_background', @$setting['statistic_background']);
     $inputHiddenTask = Form::hidden('task', 'setting-home-images');
     $elements = [
         [
             'label' => Form::label('story_image', 'Hình ảnh story', $formLabelAttr),
             'element' => Form::file('story_image', $formInputAttr),
             'thumb' => Template::showItemThumb($controllerName, @$setting['story_image'], @$setting['story_image']),
             'type' => 'thumb',
         ],
         [
             'label' => Form::label('statistic_background', 'Hình ảnh thống kê', $formLabelAttr),
             'element' => Form::file('statistic_background', $formInputAttr),
             'thumb' => Template::showItemThumb($controllerName, @$setting['statistic_background'], @$setting['statistic_background']),
             'type' => 'thumb',
         ],
         [
             'element' => $inputHiddenTask . $inputHiddenStoryImage . $hiddenStatisticBackground . Form::submit('Save', ['class' => 'btn btn-success']),
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
