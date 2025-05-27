<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // add a Task
    public function store(Request $request)
    {
        try{
            $validated = $request->validate([
                'title' => 'required|string',
            ]);

            $task = Task::create([
                'title' => $validated['title'],
                'is_completed' => false,
                'created_at' => now(),
            ]);
            return sendResponseWithData('task', $task, true, 'Create Successfully', 201);
        }catch(\Throwable $th){
            return sendResponseWithMessage(false, $th->getMessage(), 500);
        }

    }
}
