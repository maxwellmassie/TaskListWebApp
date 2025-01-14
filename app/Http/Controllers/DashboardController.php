<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('home', compact('tasks'));
    }

    public function addTugas(Request $request)
    {
        // dd($request->all());

        request()->validate([
            'tugas' => 'required',
            'deadline' => 'required',
            'catatan' => 'required',
        ]);

        Task::create([
            'tugas' => $request->tugas,
            'kelompok' => $request->kelompok,
            'deadline' => $request->deadline,
            'catatan' => $request->catatan,
        ]);

        return redirect()->route('dashboard');
    }

    public function editTugas($id)
    {
        $task = Task::find($id);
        return view('edit', compact('task'));
    }
    
    public function updateTugas(Request $request, $id)
    {
        $task = Task::find($id);
        $task->tugas = $request->tugas;
        $task->kelompok = $request->kelompok;
        $task->deadline = $request->deadline;
        $task->catatan = $request->catatan;
        $task->save();
        return redirect()->route('dashboard');
    }

    public function deleteTugas($id)
    {
        Task::find($id)->delete();
        return redirect()->route('dashboard');
    }
}
