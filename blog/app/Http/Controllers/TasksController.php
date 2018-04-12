<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::all();
        $name="Martin";
        $manames=[
        'Martin',
        'Viktorov',
        'Dekov',
        ];
        //връшаме файла съдържащ и променлива $tasks == 'tasks' като в файла намиращ се в pages/tasks също трябва да се казва $tasks
        return view('pages/tasks/index',compact('tasks','name','manames'));;
    }
    //Without Route Model Binding
    // public function show($vaza){
    //     $asd = Task::find($vaza);
    //     //$asd=DB::table('tasks')->find($vaza);
    //     //dd($asd);
    //     Ще върне json
    //     return $asd ;
    //     return view('pages/tasks/show',compact('asd'));
    // }
    //Route Model Binding  <HERE>
    public function show(Task $asd){ //Task::find($wildcard);
        //return $asd;
        return view('pages/tasks/show',compact('asd'));
    }
}
