@extends('layouts.app')

@section('page')

    {{--Region Content--}}
    @yield('content')

@endsection

include

@section('styles')
    {{ Html::style(mix('assets/auth/css/auth.css')) }}
@endsection
