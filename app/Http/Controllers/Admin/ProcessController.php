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
      return view('admin.process.index', ['posts' => $posts]);
    }

    //
}
