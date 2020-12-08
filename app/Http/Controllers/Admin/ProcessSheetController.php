<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ProcessSheet;

class ProcessSheetController extends Controller
{
    //
    public function add()
    {
        return view('admin.processSheet.create');
    }
    
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, ProcessSheet::$rules);
        
        $processSheet = new processSheet;
        $form = $request->all();
        
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        
        // データベースに保存する
        $processSheet->fill($form);
        $processSheet->save();
        
        return redirect('admin/processSheet/create');
  }  
}
