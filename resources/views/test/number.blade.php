@extends('test.layout.layout')


      <h1 class="page-header">这是循环内容</h1>
            @if(isset($data01))
            @foreach($data01 as $data_self)
              <ul>
                 <li>当前ID：{{$data_self->id}}</li>
                 <li>当前Title：{{$data_self->title}}</li>
                 <li>当前description：{{$data_self->description}}</li>
              </ul>
            @endforeach
            @endif
            <div>{{$data02}}</div>