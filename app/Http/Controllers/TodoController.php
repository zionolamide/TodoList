<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    //
    
    //to add data to db
    function addData(Request $req)
    {
        $todo = new Todo;
        $todo->name=$req->name;
        $todo->save();
        return redirect('todo');
    }

    //to list data from db
    function list(Request $req)
    {
        $data = Todo::all();
        return view('todo',['todos'=>$data]);
    }

     //delete data from db
    function delete($id)
    {
        $data = Todo::find($id);
        $data->delete();
        return redirect('todo');
    }
    

    function showData($id)
    {
        $data = Todo::find($id);
        return view('edit',['data'=>$data]);
    }

    function update(Request $req)
    {
        $data = Todo::find($req->id);
        $data->name=$req->name;
        $data->save();
        return redirect('todo');
    }
    
}
