<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Input;
use View;
use App\Task;

class TasksController extends Controller
{
    public function home(){
        return 'Hello world!';
    }
    public function index(){
        $data = Task::all();
        return View::make('test.index')->with('datas',$data);
    }
    public function create(){
        return View::make('test.form');
    }
    public function store(){
//        $task = new Task;
//        $task->title = Input::get('title');
//        $take->description = Input::get('description');
//        $task->save();
        
        Task::create(Input::all());
        
        return redirect('/');
    }
}
