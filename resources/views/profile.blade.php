@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
    <p>NIM   : {{$nim}}</p>
    <p>Nama  : Arya Wicaksana H</p>
    <p>Kelas : TI-2E</p>
@stop

@section('footer')
    <p class=text-center>
        2141720207 | <a href="https://github.com/AryaWicaksanaH?tab=repositories">Arya Wicaksana H</a>
    </p>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop