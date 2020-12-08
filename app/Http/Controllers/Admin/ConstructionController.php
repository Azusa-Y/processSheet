<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Construction;

class ConstructionController extends Controller
{
    //
    public function add()
    {
        return view('admin.construction.create');
    }
    
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Construction::$rules);
        
        $construction = new construction;
        $form = $request->all();
        
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        
        // データベースに保存する
        $construction->fill($form);
        $construction->save();
        
        return redirect('admin/construction/create');
  }  
}
