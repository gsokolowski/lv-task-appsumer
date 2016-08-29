<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    protected $fillable = ['number'];

    public function storeNumber() {
        $this->save(); // it is saved at this point in db
    }
}
