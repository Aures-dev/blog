@extends('layouts.master')

@section('title')
Formulaire
@endsection

@section('content')

<form action="articles/create" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

@include( 'partials.article-form')

</form>

@endsection