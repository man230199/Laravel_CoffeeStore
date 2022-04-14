@extends('admin.main')
@php
use App\Helpers\Form as FormTemplate;
use App\Helpers\Template;

$formInputAttr = config('zvn.template.form_input');
$formLabelAttr = config('zvn.template.form_label');
$formCkEditor = config('zvn.template.form_ckeditor');

@endphp

@section('content')
    @include ('admin.templates.page_header', ['pageIndex' => false])
    @include ('admin.templates.error')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="tab">
                    <a href="{{ route('setting') }}?type=setting-general" class="tablinks btn btn-info active">Cấu hình
                        chung</a>
                    <a href="{{ route('setting') }}?type=setting-mail" class="tablinks btn btn-info">Cấu hình mail</a>
                    <a href="{{ route('setting') }}?type=setting-bcc" class="tablinks btn btn-info">Cấu hình BCC</a>
                    <a href="{{ route('setting') }}?type=setting-social" class="tablinks btn btn-info">Cấu hình Social</a>
                    <a href="{{ route('setting') }}?type=setting-home-images" class="tablinks btn btn-info">Cấu hình hình ảnh trang chủ</a>
                </div>

                <div class="x_content">

                    <div class="setting-tab">
                        @php
                            $type = request()->get('type');
                            
                        @endphp

                        @switch($type)
                            @case('setting-general')
                                @include('admin.pages.setting.form-setting-general', ['setting' => $setting])
                            @break
                            @case('setting-mail')
                                @include('admin.pages.setting.form-setting-mail', ['setting' => $setting])
                            @break
                            @case('setting-bcc')
                                @include('admin.pages.setting.form-setting-bcc', ['setting' => $setting])
                            @break
                            @case('setting-social')
                                @include('admin.pages.setting.form-setting-social', ['setting' => $setting])
                            @break
                            @case('setting-home-images')
                                @include('admin.pages.setting.form-setting-home-images', ['setting' => $setting])
                            @break
                            @default

                        @endswitch

                        {{-- @foreach ($setting as $item)
                            @if ($item['key_value'] == 'setting-general')
                                @php
                                    $generalSettings = json_decode($item['value'], true);
                                    $inputHiddenID = Form::hidden('hidden_id', @$item['id']);
                                    $inputHiddenLogo = Form::hidden('current_logo', @$generalSettings['logo']);
                                    
                                @endphp
                                @include('admin.pages.setting.form_general')
                            @endif

                            @if ($item['key_value'] == 'setting-mail')
                                @php
                                    $inputHiddenID = Form::hidden('hidden_id', @$item['id']);
                                    $mailSetting = json_decode($item['value'], true);
                                @endphp
                                @include('admin.pages.setting.form_mail')
                            @endif

                            @if ($item['key_value'] == 'setting-bbc')
                                @php
                                    $inputHiddenID = Form::hidden('hidden_id', @$item['id']);
                                    $bbcSetting = $item['value'];
                                @endphp
                                @include ('admin.pages.setting.form_bbc')
                            @endif
                        @endforeach --}}


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
