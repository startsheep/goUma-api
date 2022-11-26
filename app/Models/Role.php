<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ADMIN = 1;

    const MERCHANT = 2;

    const CUSTOMER = 3;

    const DOCTOR = 4;
}
