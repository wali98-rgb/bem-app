<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use App\Models\Prodi;
use App\Models\Regis;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = Prodi::all();
        $dept = Dept::all();
        
        return view('auth.registration.regis', compact('dept', 'prodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'prodi' => 'required',
            'dept' => 'required',
            'password' => 'required',
            'no_hp' => 'required'
        ]);

        $regis = User::create([
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "prodi" => $request->prodi,
            "dept" => $request->dept,
            "password" => $request->password,
            "no_hp" => $request->no_hp
        ]);

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regis  $regis
     * @return \Illuminate\Http\Response
     */
    public function show(Regis $regis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regis  $regis
     * @return \Illuminate\Http\Response
     */
    public function edit(Regis $regis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regis  $regis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regis $regis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regis  $regis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regis $regis)
    {
        //
    }
}
