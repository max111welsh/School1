<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public function proprio(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function modifProprio(User $user){
        $this->proprio()->associate($user);
        $this->save();
    }
    use HasFactory;
}
