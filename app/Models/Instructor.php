<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    //
    use HasFactory;
    protected $table = 'instructors';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone_number',
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;
}
