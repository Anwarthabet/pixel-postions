<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public function Employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function jobs() :HasMany 
    {
        return $this->hasMany(Job::class);
        
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
