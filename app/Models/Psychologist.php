<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\PsychologistInfo;

class Psychologist extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "photo_perfil",
        "crp",
        "cpf",
        "email",
        "price",
        "session_time",
        "experience",
        "specialty",
        "graduation",
        "approaches",
        "resume",
        "user_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function psychologistInfo()
    {
        return $this->hasOne(PsychologistInfo::class);
    }
}
