@extends('store.main')
@section('content')
@php
    $item['name'] = 'Menu';
@endphp
@include('store.blocks.breadcrumb',['item' => $itemCategory])

@include('store.pages.category.list_products')
