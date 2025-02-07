<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Log as AttributesLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        Log::info('IUNI LOG 1');

        $user = User::all();
        Log::info('IUNI LOG 2');

        Log::info('IUNI LOG 3');
        return response()->json($user);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'pondok_id' => 'required',
            'email' => 'required',
            'name' => 'required',
            'password' => 'required'
        ]);



        var_dump('OK INI RUNNING DSNI');



        $user = User::create([
            'pondok_id' => $request->pondok_id,
            'email' => $request->email,
            'name' => $request->name,
            'password' => $request->password
        ]);

       return response()->json([
           'message' => 'Data ' . $user->name . ' Berhasil Ditambahkan',
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 900);
        }

        return response()->json($user);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::info('Function Update Running');

        $user = User::findOrFail($id);

        Log::info('ini user yang akan di updated'.$user);

        Log::info($request->all());

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        Log::info('Ini Check point setelah if statement');

        $dataUser = $request->validate([
            'name' => 'required'
        ]);

        Log::info('Ini Check point setelah validate');

        $user->update($dataUser);

        Log::info('Ini Check point setelah User Update');

        return response()->json([
            'message' => 'Data ' . $user->name . ' Berhasil Update',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => $user->name .' deleted successfully']);
    }
}
