@extends('test.layout.layout')

@section('content')
  <h1 class="page-header">{{isset($dataedit)?'更新表单':'提交表单'}}</h1>
  {{Form::open(array(
    'url' =>isset($dataedit)?'tasks/'.$dataedit['id']:'tasks',
    'method' => isset($dataedit)?'PUT':'POST',
    'class'=>'form-horizontal'))
  }}
  <div class="row">
      @if($errors->any())
   <ul id="errors">
       @foreach($errors->all() as $error)
         <li>{{$error}}</li>
       @endforeach
   </ul>
 @endif
  </div>

  <div class="form-group">
   
    {{Form::label('title','标题:',array('class'=>'col-md-2 control-label'))}}
    <div class="col-md-10">
      {{Form::text('title',isset($dataedit)? $dataedit['title']:'',array('class'=>'col-md-2 form-control'))}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label('description','描述:',array('class'=>'col-md-2 control-lable'))}}
    <div class="col-md-10">
      {{Form::text('description',isset($dataedit)?$dataedit['description']:'',array('class'=>'col-md-2 form-control'))}}
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
      {{Form::submit(isset($dataedit)?'更新':'发布',array('class'=>'btn btn-default'))}}
    </div>
  </div>
  {{Form::close()}}
@stop
