<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    public function store(Request $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->save();
        return redirect()->back();
    }

    public function show($id)
    {
        $tasks = Task::find($id);
        return view('tasks.show', compact('tasks'));
    }

    public function edit($id)
    {
        $tasks = Task::find($id);
        return view('edit', compact('tasks'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->name = $request->input('name');
        $task->update();

       return redirect('')->with('Updated successfully!');
    }

    public function destroy($id)
    {
        Task::destroy($id);
        return redirect()->back();
    }

}