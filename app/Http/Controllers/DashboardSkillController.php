<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class DashboardSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.skill.index', [
            'title' => 'Admin Dashboard - Skill',
            'skill' => Skill::first(),
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('admin.skill.edit', [
            'title' => 'Admin Dashboard - Edit Skills',
            'skill' => $skill
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $validateData = $request->validate([
            'programming_language' => 'required|min:10',
            'backend' => 'required|min:10',
            'frontend' => 'required|min:10',
            'database' => 'required|min:10',
            'other' => 'required|min:10',
            'programming_language_two' => 'required|min:10',
            'backend_two' => 'required|min:10',
            'frontend_two' => 'required|min:10',
            'database_two' => 'required|min:10',
            'other_two' => 'required|min:10',
        ]);

        Skill::where('id', $skill->id)->update($validateData);

        return redirect('/admin/skill')->with('berhasil', 'Skills berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
