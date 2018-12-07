@extends('test.layout.layout')
   
   @section('content')
    <div class="container">
        <h1 class="pager-header">这是第一个标题</h1>
        <p><a href="<?php echo route('members.show',['id'=>14]); ?>">点击这里去ID:14。</a></p>
        <div class="row">
            <h1 class="page-header">这是循环内容</h1>
            @if(isset($datas))
            @foreach($datas as $data_self)
              <ul>
                 <li>当前ID：{{$data_self->id}}</li>
                 <li>当前Title：{{$data_self->title}}</li>
                 <li>当前description：{{$data_self->description}}</li>
              </ul>
            @endforeach
            @endif
        </div>

    </div>
    @stop
