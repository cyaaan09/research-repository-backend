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
    
    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function researchType(): BelongsTo
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
