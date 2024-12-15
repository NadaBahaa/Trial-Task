<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
   
    public function index()
    {
        $tasks = Task::whereNull('deleted_at')->get();
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:Pending,Completed',
        ]);
    
        $task = Task::create(array_merge(
            $validated,
            ['created_by' => auth()->id()]
        ));
    
        return response()->json($task, 201);
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(['message' => 'Task deleted successfully']);
    }
    public function details($id)
    {
        $task = Task::findOrFail($id);
        $status = 400;
        if(isset($task)){
            $status = 200;
        }
        return response()->json($task, $status);

    }
    
}
