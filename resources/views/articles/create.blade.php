@extends('layouts.master')

@section('title')
Formulaire
@endsection

@section('content')

<form action="articles/create" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto">
    {{ csrf_field() }}

@include( 'partials.article-form')

</form>

@endsection