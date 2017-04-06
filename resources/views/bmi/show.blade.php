@extends('layouts.master')


@section('title')
    Show BMI
@endsection


@push('head')
    <link href="/css/bmi/show.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')
    @if($title)
        <h1>Show BMI: {{ $title }}</h1>
    @else
        <h1>No BMI calculated</h1>
    @endif
@endsection


    @push('body')
    <script src="/js/books/show.js"></script>
@endpush