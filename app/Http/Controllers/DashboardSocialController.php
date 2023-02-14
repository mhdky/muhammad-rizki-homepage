<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class DashboardSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.medsos.index', [
            'title' => 'Admin Dashboard - Media Sosial',
            'medsos' => Social::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit(Social $social)
    {
        return view('admin.medsos.edit', [
            'title' => 'Admin Dashboard',
            'medsos' => $social
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {
        $validateData = $request->validate([
            'instagram' => 'required|url',
            'linkedin' => 'required|url',
            'github' => 'required|url',
            'email' => 'required',
            'cv' => 'required',
        ]);

        Social::where('id', $social->id)->update($validateData);

        return redirect('/admin/social')->with('berhasil', 'Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        //
    }
}
