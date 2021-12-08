<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Akun::all();
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
        $akun = new Akun;
        $akun->username = $request->username;
        $akun->email = $request->email;
        $akun->phone_number = $request->phone_number;
        $akun->password = $request->password;
        $akun->image = $request->image;
        $akun->save();

        return response()->json([
            'username' => $akun->username,
            'email' => $akun->email,
            'phone_number' => $akun->phone_number,
            'password' => $akun->password,
            'image' => $akun->image,
            'result' => 'Create data successfully!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(Akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit(Akun $akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $username = $request->username;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $password = $request->password;
        $image = $request->image;

        $akun = Akun::find($id);
        $akun->username = $username;
        $akun->email = $email;
        $akun->phone_number = $phone_number;
        $akun->password = $password;
        $akun->image = $image;
        $akun->save();

        return response()->json([
            'username' => $akun->username,
            'email' => $akun->email,
            'phone_number' => $akun->phone_number,
            'password' => $akun->password,
            'image' => $akun->image,
            'result' => 'data successfully updated!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $akun = Akun::find($id);
        $akun->delete();

        return 'data successfully deleted!';
    }
}
