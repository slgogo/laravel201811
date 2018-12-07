<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Input;
use View;
use App\Task;
use DB;
use findOrFail;

class TasksController extends Controller
{
    public function home(){
        return 'Hello world!';
    }
    public function index(){
        $data = Task::all();
        
        return View::make('test.index')->with('datas',$data);
    }
    public function number(){
//        $data01 = DB::table('task')
//            ->whereBetween('id',[2,5])
//            ->orderBy('id','desc')
//            ->where('')
//            ->select('title')
//            ->where('id','>','2')
//            ->inRandomOrder()
            $data02 = DB::table('task')
            ->where('id','>','2')
            ->count();
//            ->get();
        return View::make('test.number')->with('data02',$data02);
    }
    public function create(){
        
        return view('test.form');
    }

//    public function store(){
        public function store(Request $request){
//        $task = new Task;
//        $task->title = Input::get('title');
//        $take->description = Input::get('description');
//        $task->save();
        

//        Task::create(Input::all());
//        $task = $request->only(['title','description']);
//        $task = $request->all();
//        dd($task);
            
        Task::create($request->only('title','description'));
        return redirect('tasks'); 
    }
    public function edit($id){
        $dataedit = Task::find($id);
        return view('test.form',compact('dataedit'));
    }
    public function update($id){
//        $title = Input::get('title');
//        $description = Input::get('description');
        
        $datafrom = Task::create(Input::all());  //获取全部表单输入内容
        
        $dataup = Task::find($id); //找到要更新的id
        
        $dataup->title = $datafrom->title;  //找到获取的表单字段元素赋值给传入的id
        $dataup->description = $datafrom->description;
        $dataup->save(); //把存储的数据保存至数据库。
        
        return redirect('tasks');
    }
        public function show($id){
        $datashow = Task::find($id);  //获取全部数据，找到传入的id的数据
//        $datashow = Task::all()->find($id);  //获取全部数据，找到传入的id的数据
        return view('single',compact('datashow'));  //把找到的数据传给视图文件使用
    }
}
