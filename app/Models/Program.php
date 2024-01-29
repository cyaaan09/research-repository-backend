<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }
    
    public function userPrograms(): HasMany
    {
        return $this->hasMany(UserProgram::class);
    }

    public function research(): HasMany
    {
        return $this->hasMany(Research::class);
    }
}
