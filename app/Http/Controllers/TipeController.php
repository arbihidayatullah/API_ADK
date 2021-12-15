<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Echo_;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Tipe::all();
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
        $tipe = new Tipe;
        $tipe->nama = $request->nama;
        $tipe->image = $request->image;
        $tipe->save();

        return response()->json([
            'nama' => $tipe->nama,
            'image' => $tipe->image,
            'result' => 'Create data successfully!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function show(Tipe $tipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipe $tipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nama = $request->nama;
        $image = $request->image;

        $tipe = Tipe::find($id);
        $tipe->nama = $nama;
        $tipe->image = $image;
        $tipe->save();

        return response()->json([
            'nama' => $tipe->nama,
            'image' => $tipe->image,
            'result' => 'Data successfully updated!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tipe = Tipe::find($id);
        $tipe->delete();
    }



    //----------------------------
    /**
     *
     * @param  \App\Models\Tipe  $listtipe
     * @return \Illuminate\Http\Response
     */
    public function listTipe()
    {
        $listtipe = DB::select("CALL selectTipe()");

        echo "<pre>";
        print_r($listtipe);
    }

    public function tipelist($id)
    {
        $tipelist = DB::table('tipes')
            ->select('id', 'nama', 'image', 'created_at', 'updated_at')
            ->where('id', $id)
            ->first();

        // echo "<pre>";
        // print_r($tipelist);
        return response()->json($tipelist);
    }
}
