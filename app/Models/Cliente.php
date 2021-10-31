<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'endereco',
        'observacao'
    ];

    /**
     * Definindo relação
     *
     * @return collection
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
