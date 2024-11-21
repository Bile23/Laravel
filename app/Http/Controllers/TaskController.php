<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskManger;

class TaskController extends Controller
{
    public function store(Request $request){

        $data = $request->all();

        // dd($data );


        TaskManger::create([
            'title'=> $data['title'],
            'description'=> $data['description'],
        ]);

    }

    public function index(){
        
        $data = TaskManger::get();

        return response()->json(['data'=> $data]);
    }

       /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = TaskManger :: find($id);
        
        return response()->json(['data'=> $data]);
  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = TaskManger :: find($id);
        $data = $request->all();

        $task->update([
            'title'=> $data['title'],
            'description'=> $data['description'],
        ]);
        
        return response()->json(['data'=> 'record successfully created']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = TaskManger :: find($id);
        $task->delete();
        
        return response()->json(['data'=> 'record successfully deleted']);
  
    }
}
