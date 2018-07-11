<?php
namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }
}