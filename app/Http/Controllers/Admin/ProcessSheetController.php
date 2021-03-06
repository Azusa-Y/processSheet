<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ProcessSheet;

class ProcessSheetController extends Controller
{
    //
    public function add(Request $request)
    {
        return view('admin.processSheet.create', ['construction_id' => $request->id]);
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
        
        return redirect('admin/construction');
    }
    
    public function edit(Request $request)
    {
      // processSheet Modelからデータを取得する
      $processSheet = ProcessSheet::find($request->id);
      if (empty($processSheet)) {
        abort(404);    
      }
      return view('admin.processSheet.edit', ['processSheet_form' => $processSheet]);
        
    }
    
    public function update(Request $request)
    {
      // Validationをかける
      $this->validate($request, processSheet::$rules);
      // ProcessSheet Modelからデータを取得する
      $processSheet = ProcessSheet::find($request->id);
      // 送信されてきたフォームデータを格納する
      $processSheet_form = $request->all();
      unset($processSheet_form['_token']);

      // 該当するデータを上書きして保存する
      $processSheet->fill($processSheet_form)->save();
      

      return redirect('admin/processSheet');
        
    }

    public function index(Request $request)
    {
      $posts = ProcessSheet::where('constructions_id', $request->id)->get();
      $days = 0;
      foreach($posts as $processSheet){
      if($processSheet->workload != 0){
        $days +=ceil(($processSheet->quantity)/($processSheet->workload));
      }
      }

      return view('admin.processSheet.index', ['posts' => $posts ,'days' => $days ,'id' =>$request->id]);
    }
}
