<?php

namespace App\Http\Controllers;

use App\Models\todo_list;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
    $todo_arr = todo_list::all();
    return response()->view('view_list',['todo_arr'=>$todo_arr,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('create_list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $todo=new todo_list();
        $todo->name=$request->input('name');
        $todo->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(todo_list $todo_list): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo_list $todo_list,$id): Response
    {
        $todo = todo_list::find($id);
    return response()->view('edit_list',['todo_arr'=>$todo,]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todo_list $todo_list,$id): RedirectResponse
    {
        $todo=todo_list::find($id);
        $todo->name=$request->input('name');
        $todo->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo_list $todo_list,$id): RedirectResponse
    {
    $todo = todo_list::find($id);
    $todo->delete();
    return redirect('/');
    }
}
