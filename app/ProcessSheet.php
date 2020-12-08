<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcessSheet extends Model
{
    protected $guarded = array('id');
    
    //
    public static $rules = array(
        'work_type' => 'required',
        'category' => 'required',
        'norm' => 'required',
        'workload' => 'required',
        'unit' => 'required',
        'quantity' => 'required',
    );
    
    // Constructionモデルに関連付けを行う
    public function histories()
    {
      return $this->hasMany('App\Construction');

    }
}
