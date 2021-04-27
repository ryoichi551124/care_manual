<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'age' => 'integer|min:0|max:120'
    );

    public function getData()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function services()
    {
        return $this->hasMany('App\Service');
    }

    public function service()
    {
        return $this->hasOne('App\Service');
    }
}
