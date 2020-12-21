<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcessSheet extends Model
{
    protected $guarded = array('id');
    
    //
    public static $rules = array(
        'constructions_id' => 'required',
        'work_type' => 'required',
        'category' => 'required',
        'norm' => 'required',
        'workload' => 'required',
        'unit' => 'required',
        'quantity' => 'required',
    );
    

}
