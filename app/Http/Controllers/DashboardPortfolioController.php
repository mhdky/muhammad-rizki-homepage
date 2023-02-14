<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.portfolio.index', [
            'title' => 'Admin Dashboard - Portfolio',
            'portfolios' => Portfolio::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.add', [
            'title' => 'Admin Dashboard - Add Portfolio'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $validateData = $request->validate([
            'web_name' => 'required|min:3|max:100',
            'technology_one' => 'required|min:3',
            'technology_two' => 'required|min:3',
            'description' => 'required|min:3',
            'status' => 'required|min:3|max:13',
            'web_link' => '',
            'web_repo' => '',
            'img_url' => 'required|image|file|max:1024',
            'poster' => 'required|image|file|max:800',
        ]);

        if($request->file('poster') || $request->file('img_url')) {
            $validateData['poster'] = $request->file('poster')->store('img-storage');
            $validateData['img_url'] = $request->file('img_url')->store('img-storage');
        }
        // if($request->file('img_url')) {
        //     $validateData['img_url'] = $request->file('img_url')->store('img-storage');
        // }

        Portfolio::create($validateData);

        return redirect('/admin/portfolio')->with('berhasil', 'Portfolio berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', [
            'title' => 'Admin Dashboard - Edit Portfolio',
            'portfolio' => $portfolio
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $validateData = $request->validate([
            'web_name' => 'required|min:3|max:100',
            'technology_one' => 'required|min:3',
            'technology_two' => 'required|min:3',
            'description' => 'required|min:3',
            'status' => 'required|min:3|max:13',
            'web_link' => '',
            'web_repo' => '',
            'img_url' => 'image|file|max:1024',
            'poster' => 'image|file|max:800',
        ]);

        if($request->file('poster')) {
            
            if ($request->oldPoster) {
                Storage::delete($request->oldPoster); 
            } 

            $validateData['poster'] = $request->file('poster')->store('img-storage');
        }

        if($request->file('img_url')) {

            if ($request->oldImg_url) {
                Storage::delete($request->oldImg_url);
            } 

            $validateData['img_url'] = $request->file('img_url')->store('img-storage');
        }

        Portfolio::where('id', $portfolio->id)->update($validateData);

        return redirect('/admin/portfolio')->with('berhasil', 'Portfolio berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->poster) {
            Storage::delete($portfolio->poster);
        } 

        if ($portfolio->img_url) {
            Storage::delete($portfolio->img_url);
        } 
        
        Portfolio::destroy($portfolio->id);
        return redirect('/admin/portfolio')->with('berhasil', 'Portfolio berhasil dihapus');
    }
}
