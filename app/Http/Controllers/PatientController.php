<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Requests\StorePatientRequest;
use App\Models\Patient;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class PatientController extends Controller
{
    public function store(StorePatientRequest $request)
    {
        try {
            $data = $request->only(["name", "cpf", "email", "password", "phone"]);

            $data["password"] = Hash::make($data["password"]);

            $user = User::create([
                "name" => $data["name"],
                "email" => $data["email"],
                "password" => $data["password"],
                "role" => "paciente"
            ]);

            if (!is_null($user)) {
                Patient::create([
                    "user_id" => $user->id,
                    "name" => $user->name,
                    "cpf" => clear_cpf($data["cpf"]),
                    "phone" => clear_telephone_number($data["phone"]),
                    "email" => $user->email
                ]);

                Auth::login($user);
                return redirect()->route('home.index');
            }
        } catch (Exception $e) {
            Log::error($e);
            return back()
                ->withErrors("Não foi passível realizar o seu cadastro, tente novamente!");
        }
    }
}
