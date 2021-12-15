<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Diagnosa::all();
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
        $diagnosa = new Diagnosa;
        $diagnosa->nama = $request->nama;
        $diagnosa->tipe_id = $request->tipe_id;
        $diagnosa->save();

        return response()->json([
            'nama' => $diagnosa->nama,
            'tipe_id' => $diagnosa->tipe_id,
            'result' => 'Create data successfully!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function show(Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nama = $request->nama;
        $tipe_id = $request->tipe_id;

        $diagnosa = Diagnosa::find($id);
        $diagnosa->nama = $nama;
        $diagnosa->tipe_id = $tipe_id;
        $diagnosa->save();

        return response()->json([
            'nama' => $diagnosa->nama,
            'tipe_id' => $diagnosa->tipe_id,
            'result' => 'Data successfully updated!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $diagnosa = Diagnosa::find($id);
        $diagnosa->delete();
    }


    //---------------------------
    public function diagnosalist($id)
    {
        $diagnosalist = DB::table('diagnosas')
            ->select('id', 'nama', 'tipe_id', 'created_at', 'updated_at')
            ->where('tipe_id', $id)
            ->get();

        // echo "<pre>";
        // print_r($diagnosalist);
        return response()->json($diagnosalist);
    }
}
