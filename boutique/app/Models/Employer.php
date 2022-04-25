<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;


    protected $fillable = [
      'Nom',
        'Prénom',
        'age',
        'code_employer'

    ];

    public function  proprio(){
        return $this->belongsTo(User::class,'user_id');
    }
}
