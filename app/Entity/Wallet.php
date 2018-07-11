<?php
namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table = 'wallet';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function money()
    {
        return $this->hasMany(Money::class);
    }

}
