<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserResearch extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function research(): BelongsTo
    {
        return $this->belongsTo(Research::class);
    }

    public function userResearchRole(): BelongsTo
    {
        return $this->belongsTo(UserResearchRole::class);
    }
}
