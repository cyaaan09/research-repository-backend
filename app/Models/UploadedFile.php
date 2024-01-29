<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UploadedFile extends Model
{
    use HasFactory;

    public function research(): BelongsTo
    {
        return $this->belongsTo(Research::class);
    }
}
