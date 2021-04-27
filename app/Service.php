<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        //'customer_id' => 'required',
        'wakeup' => 'nullable',
        'bedtime' => 'nullable',
        'feeding' => 'nullable',
        'bathing' => 'nullable',
        'others' => 'nullable',
    );

    public function getData() 
    {
        $param = [$this->wakeup, $this->bedtime];
        return $param;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getCutsomerid()
    {
        return $this->customer_id;
    }

    public function getWakeup()
    {
        return $this->wakeup;
    }

    public function getBedtime()
    {
        return $this->bedtime;
    }

    public function getFeeding()
    {
        return $this->feeding;
    }

    public function getBathing()
    {
        return $this->bathing;
    }

    public function getOthers()
    {
        return $this->others;
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
