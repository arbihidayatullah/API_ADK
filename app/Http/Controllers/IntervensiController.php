<?php

namespace App\Http\Controllers;

use App\Models\Intervensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IntervensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Intervensi::all();
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
        $intervensi = new Intervensi;
        $intervensi->nama = $request->nama;
        $intervensi->diagnosa_id = $request->diagnosa_id;
        $intervensi->save();

        return response()->json([
            'nama' => $intervensi->nama,
            'diagnosa_id' => $intervensi->diagnosa_id,
            'result' => 'Create data successfully!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Intervensi  $intervensi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Intervensi::where('diagnosa_id', $id)->get();
        return response()->json([
            'message' => 'success',
            'data' => $data,
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Intervensi  $intervensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Intervensi $intervensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Intervensi  $intervensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nama = $request->nama;
        $diagnosa_id = $request->diagnosa_id;

        $intervensi = Intervensi::find($id);
        $intervensi->nama = $nama;
        $intervensi->diagnosa_id = $diagnosa_id;
        $intervensi->save();

        return response()->json([
            'nama' => $intervensi->nama,
            'diagnosa_id' => $intervensi->diagnosa_id,
            'result' => 'Data successfully updated!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Intervensi  $intervensi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $intervensi = Intervensi::find($id);
        $intervensi->delete();
    }

    //---------------------------
    public function intervensilist($id)
    {
        $intervensilist = DB::table('intervensis')
            ->select('id', 'nama', 'diagnosa_id', 'created_at', 'updated_at')
            ->where('diagnosa_id', $id)
            ->get();

        // echo "<pre>";
        // print_r($intervensilist);
        return response()->json($intervensilist);
    }
}