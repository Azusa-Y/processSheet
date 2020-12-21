<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Construction extends Model
{
    protected $guarded = array('id');
    
    //
    public static $rules = array(
        'construction_name' => 'required',
        'construction_place' => 'required',
        'construction_start_period' => 'required',
        'construction_end_period' => 'required',
        'ordering_party' => 'required',
    );
    
        // Constructionモデルに関連付けを行う
    public function processsheets()
    {
      return $this->hasMany('App\ProcessSheet');

    }
}
