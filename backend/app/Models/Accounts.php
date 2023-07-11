<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    # Account belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
