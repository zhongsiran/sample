@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            你现在所看到的是 <a href="https://laravel-china.org/courses/laravel-essential-training-5.1">Laravel 入门教程</a> 的示例项目主页。
        </p>
        <p>
            Get start here.
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{route('signup')}}">Register Now</a>
        </p>
    </div>
@stop