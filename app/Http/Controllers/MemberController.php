<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Dept;
use App\Models\Prodi;
use App\Models\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member_bem = User::where('level', 'bem')
            ->orderBy('name')
            ->get();
        
        $member_mhs = User::where('level', 'mahasiswa')
            ->orderBy('name')
            ->get();

        return view('admin.member.member', compact('member_bem', 'member_mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = Prodi::all();
        $dept = Dept::all();
        return view('admin.member.create', compact('dept', 'prodi'));
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
            'photo' => 'required|mimes:jpeg,jpg,png|max:2200',
            'name' => 'required',
            'dept' => 'required',
            'prodi' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
            'job_title' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required'
        ]);

        $photo = $request->photo;
        $new_photo = time() . ' - ' . $photo->getClientOriginalName();

        $member = User::create([
            "photo" => $new_photo,
            'name' => $request->name,
            'dept' => $request->dept,
            'prodi' => $request->prodi,
            'no_hp' => $request->no_hp,
            'address' => $request->address,
            'job_title' => $request->job_title,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'level' => $request->level
        ]);

        $photo->move('img/photo_profile/', $new_photo);
        return redirect('/member');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = User::findorfail($id);
        return view('admin.member.show', compact('member'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = User::findorfail($id);

        return view('admin.member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'required|mimes:jpeg,jpg,png|max:2200',
            'name' => 'required',
            'dept' => 'required',
            'prodi' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
            'job_title' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required'
        ]);

        $member = User::findorfail($id);

        if ($request->has('photo')){
            $path = "img/photo_profile/";
            File::delete($path . $member->photo);
            $photo = $request->photo;
            $new_photo = time() . ' - ' . $photo->getClientOriginalName();
            $photo->move('img/photo_profile/', $new_photo);
            $post_data = [
                "photo" => $new_photo,
                'name' => $request->name,
                'dept' => $request->dept,
                'prodi' => $request->prodi,
                'no_hp' => $request->no_hp,
                'address' => $request->address,
                'job_title' => $request->job_title,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'level' => $request->level
            ];
        }else{
            $post_data = [
                'name' => $request->name,
                'dept' => $request->dept,
                'prodi' => $request->prodi,
                'no_hp' => $request->no_hp,
                'address' => $request->address,
                'job_title' => $request->job_title,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'level' => $request->level
            ];
        }

        $member->update($post_data);
        return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = User::findorfail($id);
        $member->delete();

        $path = "img/photo_profile/";
        File::delete($path . $member->photo);

        return redirect()->route('admin.member.member'); 
    }
}
