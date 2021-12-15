<?php

namespace App\Http\Controllers;

use App\Models\Riwayat_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $data = Riwayat_data::where('user_id', $id)->get();
        return response()->json(["message" => "success", "history" => $data]);
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
     * @param  \App\Models\Riwayat_data  $riwayat_data
     * @return \Illuminate\Http\Response
     */
    public function show(Riwayat_data $riwayat_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Riwayat_data  $riwayat_data
     * @return \Illuminate\Http\Response
     */
    public function edit(Riwayat_data $riwayat_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Riwayat_data  $riwayat_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Riwayat_data $riwayat_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Riwayat_data  $riwayat_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Riwayat_data $riwayat_data)
    {
        //
    }

    public function listRiwayatGejala($akun)
    {
        $riwayatgejala = DB::select("CALL selectDataRiwayatGejala(" . $akun . ")");

        // echo "<pre>";
        // print_r($riwayatgejala);
        return response()->json($riwayatgejala);
    }
}
