@extends('layouts.master')

@section('title', 'About')

@section('content')
<h1 id="demo" onmouseover="myFunction()">About Page</h1>
@include('partials.contact_form',['name'=>'Mahmud'])
@endsection

@section('script')
    <script type="text/javascript">
        function myFunction() {
          document.getElementById("demo").style.background = "red";
        }
    </script>
@endsection