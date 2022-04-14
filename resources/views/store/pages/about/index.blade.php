@extends('store.main')
@section('content')
    @php
    $item['name'] = 'Giới thiệu';
    @endphp
    @include('store.blocks.breadcrumb',['item' => $item])
    @include('store.blocks.about-story')
    @include('store.blocks.discover-menu')
@endsection
