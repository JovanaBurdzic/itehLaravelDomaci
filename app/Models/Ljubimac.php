<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vlasnik;

class Ljubimac extends Model
{
    use HasFactory;

    public function vlasnik()
    {
        return $this->belongsTo(Vlasnik::class);
    }
}
