<?php

namespace App\Http\Controllers;

use App\Models\todos;
use App\Http\Requests\todosrequest;
use Illuminate\Http\Request;

class todosCntroller extends Controller
{
    public function index ()
    {
        $todos=todos::all();
        return view('todos.index',[
            'todos'=>$todos
        ]);
    }
    public function crate ()
    {
        
        return view('todos.crate');
    }
  
    public function store (Request $request)
    {
        $request ->validate([
            'title'=>'required'
        ]);
        $todos=new todos();
        $todos->title=$request->title;
        $todos->des=$request->Description;
        $todos->is_done=0;
        $todos->save();

        return to_route('todos.index');
    }

    public function show ($id)
    {
        $todos=todos::find($id);
        return view('todos.show',[
            'todos'=>$todos
        ]);
     
        
    }
    public function edit ($id)
    {
       
        $todos=todos::find($id);

        return view('todos.edit',['todos'=>$todos]);
    }
  

    public function update(Request $request){
        $todos=todos::find($request->todo_id);

        $todos=new todos();
        $todos->title=$request->title;
        $todos->des=$request->Description;
        $todos->is_done=$request->is_done;
        $todos->save();

        return to_route('todos.index');
    }
    public function delete(Request $request){
        $todos=todos::find($request->todo_id);
        $todos->delete();
        return to_route('todos.index');
    }
}
