<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\error;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            
            'email' => 'required|email',
            'password' => 'required',
            
        ]);

        
        $user = User::where('email', $validated['email'])->first();

        if($user && Hash::check($validated['password'], $user->password)) {
            Auth::login($user);
            //Auth::logout($user);
            
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login.index')->withErrors([
                'loginError' => 'Credenciais inválidas. Por favor, verifique seu e-mail ou senha.'
            ]);
        }
        

        
    }


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
