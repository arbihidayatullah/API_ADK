<?php

namespace App\Http\Controllers;

use App\Models\Uraian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UraianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Uraian::all();
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
        $uraian = new Uraian();
        $uraian->nama = $request->nama;
        $uraian->intervensi_id = $request->intervensi_id;
        $uraian->save();

        return response()->json([
            'nama' => $uraian->nama,
            'intervensi_id' => $uraian->intervensi_id,
            'result' => 'Create data successfully!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Uraian  $uraian
     * @return \Illuminate\Http\Response
     */
    public function show(Uraian $uraian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uraian  $uraian
     * @return \Illuminate\Http\Response
     */
    public function edit(Uraian $uraian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uraian  $uraian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nama = $request->nama;
        $intervensi_id = $request->intervensi_id;

        $uraian = Uraian::find($id);
        $uraian->nama = $nama;
        $uraian->intervensi_id = $intervensi_id;
        $uraian->save();

        return response()->json([
            'nama' => $uraian->nama,
            'intervensi_id' => $uraian->intervensi_id,
            'result' => 'Data successfully updated!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uraian  $uraian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $uraian = Uraian::find($id);
        $uraian->delete();
    }

    //---------------------------
    public function uraianlist($id)
    {
        $uraianlist = Uraian::
            where('intervensi_id', $id)
            ->get();

        return response()->json($uraianlist);
    }
}