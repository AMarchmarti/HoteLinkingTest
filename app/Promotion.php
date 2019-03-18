<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotions';

    public $primaryKey = 'id';
    public $user_id;
    public $offer_id;
    public $code;
    public $status = false;


    public function user(){
        return $this->belongsTo('App\User');
    }
}
