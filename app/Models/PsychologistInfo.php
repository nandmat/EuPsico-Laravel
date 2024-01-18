<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Psychologist;

class PsychologistInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'psychologist_id',
        'zip_code',
        'street',
        'neighborhood',
        'city',
        'state',
        'number'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function psychologist()
    {
        return $this->belongsTo(Psychologist::class);
    }
}
