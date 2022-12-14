<?php

namespace App\Http\Controllers;

use App\Models\Prawitama;
use Illuminate\Http\Request;

class PrawitamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan halaman utama
        return view('home.home');
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
     * @param  \App\Models\Prawitama  $prawitama
     * @return \Illuminate\Http\Response
     */
    public function show(Prawitama $prawitama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prawitama  $prawitama
     * @return \Illuminate\Http\Response
     */
    public function edit(Prawitama $prawitama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prawitama  $prawitama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prawitama $prawitama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prawitama  $prawitama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prawitama $prawitama)
    {
        //
    }

    public function info()
    {
        // ini halaman about prawitama
        return view('home.sejarah');
    }

    public function about()
    {
        // ini halaman Fact dan skill prawitama
        return view('home.about');
    }

    public function scout()
    {
        return view('home.pramuka');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function admin()
    {
        return view('dashboard.index');
    }
}
