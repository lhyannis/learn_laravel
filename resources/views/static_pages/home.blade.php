@extends('common.base')
@section('title', '主页')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      你现在所看到的是 <a href="https://github.com/lhyannis/learn_laravel">Laravel 学习</a> 的项目主页。
    </p>
    <p>
      一切，将从这里开始。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ Route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
@stop
