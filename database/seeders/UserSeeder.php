<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Psychologist;
use App\Models\PsychologistInfo;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quantity = 30;

        $experiences = [
            "Transtorno Obsessivo Compulsivo (TOC)",
            "Transtorno Bipolar",
            "Ansiedade Generalizada",
            "Depressão"
        ];

        $specialties = [
            "Psicologia infantil",
            "Psicologia para Adolescentes",
            "Psicologia Adulto"
        ];

        $approaches = [
            1, 2, 3, 4, 5, 6, 7, 8
        ];

        $i = 1;

        while ($i < $quantity) {
            $roles = ["paciente", "psicologo", "admin"];
            $userRoleIndex = array_rand($roles);
            $userRole = $roles[$userRoleIndex];

            $especialtyIndex = array_rand($specialties);
            $especialty = $specialties[$especialtyIndex];

            $user = User::create([
                "name" => fake()->unique()->name(),
                "email" => fake()->safeEmail(),
                "password" => Hash::make("12345678"),
                'role' => $userRole
            ]);

            switch ($user->role) {
                case "paciente":
                    Patient::create([
                        "name" => $user->name,
                        "email" => $user->email,
                        "cpf" => $this->cpf_generate(),
                        "phone" => $this->phone_generate(),
                        "user_id" => $user->id
                    ]);
                    break;
                case "psicologo":
                    $experienceIndex = array_rand($experiences);
                    $experience = $experiences[$experienceIndex];
                    $psychologist = Psychologist::create([
                        "name" => $user->name,
                        "crp" => Str::random(8),
                        "cpf" => $this->cpf_generate(),
                        "email" => $user->email,
                        "price" => 120.0,
                        "session_time" => 50,
                        "experience" => $experience,
                        "specialty" => $especialty,
                        "graduation" => "Psicologia",
                        "approaches" => json_encode([
                            array_rand($approaches),
                            array_rand($approaches),
                        ]),
                        "resume" => fake()->text(70),
                        "user_id" => $user->id,
                        "phone" => $this->phone_generate()
                    ]);

                    $address = generateRandomAddress();

                    PsychologistInfo::create([
                        "psychologist_id" => $psychologist->id,
                        "zip_code" => $address['zipCode'],
                        "street" => $address['street'],
                        "neighborhood" => $address['neighborhood'],
                        "city" => $address['city'],
                        'state' => $address['state'],
                        'number' => generateRandomNumber(3, new Str)

                    ]);
                    break;
            }
            $i++;
        }
    }

    public function cpf_generate()
    {
        $num = array();
        $num[9] = $num[10] = $num[11] = 0;
        for ($w = 0; $w > -2; $w--) {
            for ($i = $w; $i < 9; $i++) {
                $x = ($i - 10) * -1;
                $w == 0 ? $num[$i] = rand(0, 9) : '';
                echo ($w == 0 ? $num[$i] : '');
                ($w == -1 && $i == $w && $num[11] == 0) ?
                    $num[11] += $num[10] * 2    :
                    $num[10 - $w] += $num[$i - $w] * $x;
            }
            $num[10 - $w] = (($num[10 - $w] % 11) < 2 ? 0 : (11 - ($num[10 - $w] % 11)));
            echo $num[10 - $w];
        }
        return $num[0] . $num[1] . $num[2] . $num[3] . $num[4] . $num[5] . $num[6] . $num[7] . $num[8] . $num[10] . $num[11];
    }

    function phone_generate()
    {
        $areaCode = '0' . rand(10, 99);
        $prefix = rand(1000, 9999);
        $line = rand(1000, 9999);

        $phone = $areaCode . $prefix . $line;

        return $phone;
    }
}
