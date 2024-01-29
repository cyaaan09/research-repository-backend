<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Level extends Model
{
    use HasFactory;

    public function research(): HasMany
    {
        return $this->hasMany(Research::class);
    }
    
    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }
}
