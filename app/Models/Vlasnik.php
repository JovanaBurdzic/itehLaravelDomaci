<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grad;
use App\Models\Ljubimac;

class Vlasnik extends Model
{
    use HasFactory;

    public function grad()
    {
        return $this->belongsTo(Grad::class);
    }

    public function ljubimci()
    {
        return $this->hasMany(Ljubimac::class);
    }
}
