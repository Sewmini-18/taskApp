<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaskModel;

class frontEndCtrlr extends Controller
{
    //

    public function IndexHome(){
        return view('home');
    }
    public function IndexAboutUs(){
        return view('about');
    }

    public function Indexdata(request $request)
    {
       //die($request->all());

       $task = new TaskModel;
     $this->validate($request,['task'=>'required||max:150|min:3']);


      
        $task->task = $request->task;
        $task->save();

        $data = TaskModel::all();
        //return view('task')->with('tasks',$data);
        //dd($data);
        return redirect()->back();
        
    
    }
    

    public function UpdateAsCompleted($id){
        $task = TaskModel::find($id);
        $task->IsCompleted=1;
        $task->save();

        return redirect()->back();

    }

    
    public function UpdateAsNotCompleted($id){
        $task = TaskModel::find($id);
        $task->IsCompleted=0;
        $task->save();

        return redirect()->back();

    }

    public function IndexDelete($id){
        $task = TaskModel::find($id);
        $task->delete();

        return redirect()->back();
    }

    public function IndexUpdateView($id){
        $task = TaskModel::find($id);
      
        return view('updateTask')->with('taskData',$task);
        
       
    }

    public function UpdateTask(Request $request){
     

        $id = $request->id;
        $task = $request->task;
        $this->validate($request,['task'=>'required||max:150|min:3']);
        $data = TaskModel::find($id);
        $data->task = $task;
        $data->save();
        $datas = TaskModel::all(); 
        return redirect('task');
        //return view('task')->with('tasks',$datas);
       

       
    }
}
