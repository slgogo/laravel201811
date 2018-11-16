@extends('test.layout.layout')
   
   @section('content')
    <div class="container">
        <h1 class="pager-header">这是第一个标题</h1>
        <p><a href="<?php echo route('members.show',['id'=>14]); ?>">点击这里去ID:14。</a></p>
    </div>
    @stop
