<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use Illuminate\Http\Request;
use File;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arsip = Arsip::all();
        return view('admin.arsip.arsip', compact('arsip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.arsip.create');
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
            'file_arsip' => 'required|mimes:pdf,docx,doc,xlsx,xls,pptx,ppt|max:22000',
            'name_arsip' => 'required'
        ]);

        $arsipFile = $request->file_arsip;
        $new_arsip = time() . ' - ' . $arsipFile->getClientOriginalName();

        $arsip = Arsip::create([
            "file_arsip" => $new_arsip,
            "name_arsip" => $request->name_arsip
        ]);

        $arsipFile->move('admin/arsip/', $new_arsip);
        return redirect('/arsip');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arsip = Arsip::findorfail($id);
        return view('admin.arsip.edit', compact('arsip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'file_arsip' => 'mimes:pdf,docx,doc,xlsx,xls,pptx,ppt|max:22000',
            'name_arsip' => 'required'
        ]);

        $arsip = Arsip::findorfail($id);

        if ($request->has('file_arsip')) {
            $path = "admin/arsip/";
            File::delete($path.$arsip->file_arsip);
            $fileArsip = $request->file_arsip;
            $new_arsip = time().' - '.$fileArsip->getClientOriginalName();
            $fileArsip->move('admin/arsip/', $new_arsip);
            $post_data = [
                "file_arsip" => $new_arsip,
                "name_arsip" => $request->name_arsip
            ];
        } else {
            $post_data = [
                "name_arsip" => $request->name_arsip
            ];
        }

        $arsip->update($post_data);
        return redirect('/arsip');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arsip = Arsip::findorfail($id);
        $arsip->delete();

        $path = "admin/arsip/";
        File::delete($path.$arsip->file_arsip);

        return redirect('/arsip');
    }
}
