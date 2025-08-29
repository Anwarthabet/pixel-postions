<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    protected $fillable = [
        'name',
        'logo',
        'user_id',
        'email',
        'website'

    ];
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
