@extends('layouts.base')

@section('title')
    TestSite
@endsection

@section('content')
    <div>
        <h3 class="random_text">Hi, {{ Auth::user()->name }}</h3>
    </div>
@endsection
