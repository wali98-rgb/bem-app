<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use Illuminate\Http\Request;

class DeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dept = Dept::all();
        return view('admin.dept.dept', compact('dept'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dept.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_dept' => 'required'
        ]);

        $dept = Dept::create([
            "name_dept" => $request->name_dept
        ]);

        return redirect('/dept');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dept = Dept::findorfail($id);
        return view('admin.dept.show', compact('dept'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dept = Dept::findorfail($id);
        return view('admin.dept.edit', compact('dept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_dept' => 'required'
        ]);

        $dept = Dept::findorfail($id);
        $dept->update([
            "name_dept" => $request->name_dept
        ]);

        return redirect('/dept');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dept = Dept::findorfail($id);
        $dept->delete();

        return redirect('/dept');
    }
}
