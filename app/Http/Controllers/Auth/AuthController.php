<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function cadastrarPacienteView()
    {
        return view('auth.cadastro.paciente');
    }

    public function auth(Request $request)
    {

        try {

            $user = User::where('email', $request->email)->first();

            if (!$user) {
                return back()
                    ->withInput()
                    ->with('erro', 'Usuário ou senha inválidos!');
            }

            if (!Hash::check($request->password, $user->password)) {
                return back()
                    ->withInput()
                    ->with('erro', 'Usuário ou senha inválidos!');
            }

            Auth::login($user, true);
            $request->session()->regenerate();
            return redirect('/');
        } catch (Exception $e) {
            Log::error($e);
            return back()->with('erro', 'Não foi possível fazer o login!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
