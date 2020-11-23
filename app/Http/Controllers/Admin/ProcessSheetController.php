<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProcessSheetController extends Controller
{
    //
    public function add()
    {
        return view('admin.processSheet.create');
    }
    
    public function create(Request $request)
    {
        return redirect('admin/processSheet/create');
  }  
}
