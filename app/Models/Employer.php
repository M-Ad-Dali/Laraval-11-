<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany(Job::class); /* [تعريف العلاقة بين صاحب العمل والوظائف  عدة وظائف لصحب عمل واحد] [Many-to-One] */
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
