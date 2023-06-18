<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'disciplina',
    ];

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
