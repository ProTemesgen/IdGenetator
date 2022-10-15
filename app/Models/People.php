<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'people';

    protected $fillable = [
        'photo', 'Fname', 'Mname', 'Lname', 'phone', 'city', 'subCity', 'woreda', 'houseNo', 'role'
    ];
}
