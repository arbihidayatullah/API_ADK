<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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
        try {
            $validator = Validator::make($request->all(), [
                'username' => 'required|min:3',
                'email' => 'required|unique:akuns',
                'phone_number' => 'required|unique:akuns',
                'password' => 'required|min:8',
            ]);

            if ($validator->fails()) {
                $error = $validator->errors()->all()[0];
                return response()->json(['status' => false, 'message' => $error, 'data' => []], 422);
            } else {
                $akun = new Akun;
                $akun->username = $request->username;
                $akun->email = $request->email;
                $akun->phone_number = $request->phone_number;
                $akun->password = Hash::make($request->password, ['rounds' => 12]);
                $akun->image = "images/default.png";
                $akun->save();
                return response()->json(['status' => true, 'message' => 'Profile Created!', 'data' => $akun], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage(), 'data' => []], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $row = Akun::firstWhere('username', $request->username);
        if (!$row) {
            $data = [
                'status' => false,
                'message' => 'Unregistered email!',
            ];
            return response()->json($data, 401);
        } else {
            if (!Hash::check($request->password, $row->password)) {
                $data = [
                    'status' => false,
                    'message' => 'Wrong Password!',
                ];
                return response()->json($data, 401);
            } else {
                $data = [
                    'status' => true,
                    'message' => 'Login Success!',
                    'data' => [
                        "id" => $row->id,
                        "username" => $row->username,
                        "email" => $row->email,
                        "phone_number" => $row->phone_number,
                        "image" => $row->image,
                    ],
                ];
                return response()->json($data, 200);
            }
        }
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
