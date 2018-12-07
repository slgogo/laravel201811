@extends('layout.master')


@section('content')
<div class="container">
    <div class="row">
        <ul>
            <li>当前用户名：{{$data['username']}}</li>
            <li>用户年龄：{{$data['age']}}</li>
        </ul>
        <div class="data01">
          <ul>
              @foreach($data01 as $data_self)
                 <li>{{$data_self['test_title']}}</li>
                 <li>{{$data_self['vip']}}</li>
              @endforeach
          </ul>
          <div class="data02">
              <ul>
                 @foreach($data02 as $data02_self) 
                  <li>{{$data02_self['created_at']}} | {{$data02_self['test_title']}} | {{$data02_self['vip']}}</li>
                  @endforeach
              </ul>
          </div>
          
        </div>
    </div>
</div>

@endsection