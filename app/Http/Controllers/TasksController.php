<?php

namespace App\Http\Controllers;

use App\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Tasks::all();
        return view('tasks.index')->withTasks($tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newtask = new Tasks();
        $newtask->title = request('title');
        $newtask->description = request('description');

        if( $newtask->save() ){
            return redirect('/tasks');
        } else {
            return false;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(Tasks $tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    // Tasks $tasks
    {
        // return $id;
        // $taskToEdit = Tasks::find($id);
        if( $taskToEdit = Tasks::find($id)) {
            // echo "Found data";
            // return $taskToEdit;
            return view( 'tasks.edit', compact('taskToEdit') );
        } else {
            printf("Error, No data");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    // Request $request, Tasks $tasks
    {
        // dd(request()->all());
        if( $taskToEdit = Tasks::find($id)) {
            $taskToEdit->title = request('title');
            $taskToEdit->description = request('description');
            if( $taskToEdit->save() ){
                return redirect('/tasks?status=successful');
            } else {
                dd('Update FAILED !');
            }
        } else{
            dd('Not Found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    // Tasks $tasks
    {
        if( Tasks::find($id)->delete() ) {
            return redirect('/tasks?status=deletesuccessful');
        } else {
            dd( 'Delete FAILED !' );
        }
    }
}
