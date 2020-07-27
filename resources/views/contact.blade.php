@extends('layouts.master')
@section('title', 'Contact')
@section('style')
    <style type="text/css">
        body{
            background: #f6f6f6;
        }
    </style>
@endsection
@section('content')
    {{--
        @component('alert')
            <strong>Whoops!</strong> Something went wrong!
        @endcomponent

        @componentFirst(['custom.alert','alert'])
            <strong>Whoops!</strong> Something went wrong!
        @endcomponent

        @component('alert')
            @slot('title')
                Forbidden
            @endslot
            you are not allowed to access this resource!
        @endcomponent 
                    --}}
<h1>Contact Page</h1>
@include('partials.contact_form',["name"=>"Hero"])
@endsection