<?php

namespace App\Http\Controllers;

use App\Models\Kategori_uraian;
use Illuminate\Http\Request;

class KategoriUraianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Kategori_uraian::all();
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
        $kategori = new Kategori_uraian;
        $kategori->kategori_uraian = $request->kategori_uraian;
        $kategori->save();

        return response()->json([
            'kategori_uraian' => $kategori->kategori_uraian
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori_uraian  $kategori_uraian
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori_uraian $kategori_uraian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori_uraian  $kategori_uraian
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori_uraian $kategori_uraian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori_uraian  $kategori_uraian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori_uraian $kategori_uraian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori_uraian  $kategori_uraian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori_uraian $kategori_uraian)
    {
        //
    }
}
