<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProcessSheet;
class ProcessController extends Controller
{
    //
    public function index(Request $request)
    {
      $posts = ProcessSheet::where('constructions_id', $request->id)->get();
      $days = 0;
      foreach($posts as $processSheet){
        if($processSheet->workload != 0){
        $days +=ceil(($processSheet->quantity)/($processSheet->workload));
        }
      }

      return view('admin.process.index', ['posts' => $posts,'days' => $days]);
    }
}
