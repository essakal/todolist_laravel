<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\TodoModel;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $data = TodoModel::select('*')->get();
        return view('todo.index', ['data'=>$data]);
    }

    public function create()
    {
        return view("todo.create");
    }

    public function store(CreateTodoRequest $request)
    {
        $data['todo'] = $request->todo;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        TodoModel::create($data);
        return redirect()->route("todo.index");
    }

    public function show(string $id)
    {
        $data = TodoModel::select('*')->find($id);
        // $data = 'salam';
        return view('todo.show', ['data'=> $data]);
    }

    public function edit(string $id)
    {
        $data = TodoModel::select('*')->find($id);
        return view("todo.edit", ['data'=>$data]);
    }

    public function update(UpdateTodoRequest $request, string $id)
    {
        $data['todo'] = $request->todo;
        $data['updated_at'] = date('Y-m-d H:i:s');
        TodoModel::where('id', $id)->update($data);
        return redirect()->route("todo.index");
    }

    public function destroy(string $id)
    {
        TodoModel::where('id', $id)->delete();
        return redirect()->route('todo.index');
    }
}
