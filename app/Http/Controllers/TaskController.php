<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Services\TaskService;
use Exception;

class TaskController extends Controller
{

    public function filterByStatus(Request $request)
    {
        try {
            $PAGE_SIZE = 10;
            return Task::where('status', $request->status)->with('user')->paginate($PAGE_SIZE);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required',
            'description' => 'required',
            'status' => '',
            'priority' => '',
            'due_date' => 'nullable|date',
            'file_path' => 'nullable|string',
            'file_name' => 'nullable|string',
        ]);

        try {
            $task = TaskService::make($validated)->save();
            if (!$task) {
                throw new Exception('Task not created');
            }
            return response()->json(['message' => 'Task created successfully.', 'success' => true], 201);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => '',
            'priority' => '',
            'due_date' => 'nullable|date',
            'file_path' => 'nullable|string',
            'file_name' => 'nullable|string',
        ]);

        try {
            $task->update($validated);
            return response()->json(['message' => 'Task updated successfully.', 'success' => true], 201);
            // return TaskService::make($validated)->update();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy(Task $task)
    {
        try {
            $task->delete();
            return response()->json(['message' => 'Task removed successfully.', 'success' => true], 200);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
