<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Construction;
use App\ProcessSheet;


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
        
        return redirect('admin/construction');
        
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
          // 検索されたら検索結果を取得する
            $posts = Construction::where('construction_name', $cond_title)->get();
        } else {
          // それ以外はすべての工事を取得する
            $posts = Construction::all();
        }
    return view('admin.construction.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Construction::$rules);
        $construction = Construction::find($request->id);
        $construction_form = $request->all();

        unset($construction_form['_token']);

        $construction->fill($construction_form)->save();
        
        $processSheet = new processSheet;
        $processSheet->constructions_id = $construction->id;
        $processSheet->save();
        
        return redirect('admin/processSheet/create');
    }
}
