<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosDavid extends Model implements Authenticatable
{
    protected $table = 'usuarios_david';
    
    protected $fillable = [
        'id', 'nome', 'email', 'senha'
    ];

    protected $primaryKey = 'id';
    protected $password = 'senha';

    public function getAuthIdentifierName()
    {
        return 'id'; // Nome do campo que é a chave primária do usuário
    }

    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }

    public function getAuthPassword()
    {
        return $this->senha; // Nome do campo que armazena a senha do usuário
    }

    public function getRememberToken()
    {
        return null; // Não utilizado
    }

    public function setRememberToken($value)
    {
        // Não utilizado
    }

    public function getRememberTokenName()
    {
        return null; // Não utilizado
    }
}
