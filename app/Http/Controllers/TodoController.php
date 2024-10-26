<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    public function detailTodo($id) {
        $todo = Todo::find($id);
        return view('todos.detail', ['todo' => $todo]);
    }

    public function halaman_create() {
        return view('todos.create');
    }

    public function create(Request $request){
        $data = $request->all();
        Todo::create($data);
        return redirect()->route('todos.index');
    }

    public function halaman_update($id) {
        $todo = Todo::find($id);
        return view('todos.update', ['todo' => $todo]);
    }

    public function update(Request $request, $id){

        $todo = Todo::find($id);
        $todo->judul = $request->input('judul');
        $todo->deskripsi = $request->input('deskripsi');
        $todo->save();

        return redirect()->route('todos.index');
    }

    public function delete($id) {
        Todo::destroy($id);
        return redirect()->route('todos.index');
    }
}
