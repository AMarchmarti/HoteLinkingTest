<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';

    public $primaryKey = 'id';
    public $name = 'Offer_name';

    public $timestamps = true;



}
