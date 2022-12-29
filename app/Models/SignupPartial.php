<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignupPartial extends Model
{
    use HasFactory;

    protected $table = 'signup_partials';
    protected $primaryKey = 'id';
}
