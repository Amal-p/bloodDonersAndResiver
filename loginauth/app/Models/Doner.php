<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doner extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'age',
        'blood_group',
        'city',
        'state',
        'zip',
        'mobile',
        'email',
        'id_proof',
        'verify'
    ];
}
