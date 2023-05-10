<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Auth;

class Session extends Model
{
    use HasFactory;
    public function auth(){
        return this->belongsTo(Auth::class);
    }
}
