@extends('store.main')
@php
use App\Helpers\Template;
use Illuminate\Support\Facades\Session;

@endphp

@if (!empty(Session::get('checkout_message')))
    <section class="ftco-section ftco-cart">
        <h3 style="text-align:center">{{Session::get('checkout_message')}}</h3>
    </section>
@endif

