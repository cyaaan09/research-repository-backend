<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Research extends Model
{
    use HasFactory;
    
    public function levels(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    public function programs(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function researchTypes(): BelongsTo
    {
        return $this->belongsTo(ResearchType::class);
    }
    
    public function userPrograms(): HasOne
    {
        return $this->hasOne(UploadedFile::class);
    }

    public function userResearch(): BelongsTo
    {
        return $this->belongsTo(UserResearch::class);
    }
}
