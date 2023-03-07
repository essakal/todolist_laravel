<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodoRequest;
use App\Models\TodoModel;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return "index todo";
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
        return "show todo";
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
