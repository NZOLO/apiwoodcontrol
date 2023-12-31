<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validations extends Model
{
    use HasFactory;

    protected $fillable = [
        'agentID',
        'bordereauID',
        'statut',
    ];
}
