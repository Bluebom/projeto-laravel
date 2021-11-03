<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'data_contratacao'
    ];

    /**
     * Define a relação com endereço
     *
     * @return void
     */
    public function address()
    {
        return $this->hasOne(Address::class);
    }


}
