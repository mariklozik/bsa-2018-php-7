<?php
namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
//    public $name;
    protected $table = 'currency';

    public function money() {
        return $this->hasOne('Money');
    }

//    public function setName($name)
//    {
//        $this->name = $name;
//    }
}
