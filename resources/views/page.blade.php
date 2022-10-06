@extends('adminlte::master')

@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())

@section('body_data', $layoutHelper->makeBodyData())

@section('body')
    <div  style="background-image: url('images/background.gif') !important;
    background-attachment: fixed;
    background-size: 100% 100%;" class="dark-mode relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @yield('content')
    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
