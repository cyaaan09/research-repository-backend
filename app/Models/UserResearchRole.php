<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserResearchRole extends Model
{
    use HasFactory;

    public function userResearch(): HasMany
    {
        return $this->hasMany(UserResearch::class);
    }
}
