<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Formation;

class Cours extends Model
{
    use HasFactory;

    protected $fillable = [
        'matiere',
        'heure_debut',
        'heure_fin',
        'date',
        'user_id',
        'formation_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function formation(): BelongsTo
    {
        return $this->belongsTo(Formation::class, 'formation_id');
    }
}
