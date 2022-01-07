<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campsite extends Model
{
    //
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'campsite_name' => 'required',
        'area' => 'required',
    );
    
}
