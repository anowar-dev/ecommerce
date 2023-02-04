<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class catController extends Controller
{
    
    public function cat_add(Request $request)
    {
        $data = $request->cat_name;
        $catModel = new category();
        $catModel->cat_name = $data;
        $catModel->save();
        return redirect('cat_show');
    }

    public function cat_show()
    {
        $catModel = new category();
        $allData = $catModel->get();
        return view('admin.cat_show', ["data"=> $allData]);
    }


    // public function cat_store()
    // {
        // 
        //  
    // }
}
