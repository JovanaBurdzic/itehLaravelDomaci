<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vlasnik;

class Grad extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'drzava',
        'brojStanovnika'
    ];

    public function vlasnici()
    {
        return $this->hasMany(Vlasnik::class);
    }
}
