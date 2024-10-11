@extends('layout.master')

@section('judul')
    Detail Category
@endsection

@section('content')

    <a href="/category" class="btn btn-secondary btn-sm my-2">Kembali</a>
    <h1>Ini Category {{$categories->name}}</h1>
@endsection
