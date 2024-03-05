<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cadastro');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $validated = $request->validate([
             'user' => 'required|unique:users,user',
             'email' => 'required|email|unique:users,email',
             'password' => 'required|min:8|confirmed',
             'access_level' => 'nullable',
         ]);


         $user = new User();
        $user->user = $validated['user'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);

        if (isset($validated['access_level' ])){
            $user->access_level = $validated['access_level'];
        }
        
        $user->save();
        
        return redirect('/login')->with('success', 'User registered successfully!');

       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
