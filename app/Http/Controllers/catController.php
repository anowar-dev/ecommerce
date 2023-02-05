<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

    public function cat_edit($id)
    {
        $cateModel = new category();
        $cat_name = $cateModel->where('id', $id)->get();
    
        return view('admin.cat_edit', ["data"=>$cat_name]);
    }

    public function cat_update(Request $request)
    {
        $catName = $request->cat_name;
        $catId = $request->cat_id;
        $catModel = category::find($catId);
        $catModel->cat_name = $catName;
        $catModel->save();
        return Redirect('cat_show/')->with('massage', 'Successfully Edited');
    }

    public function delete($id)
{
    $cateModel = new category();
    $cateModel->where('id', $id)->delete();
    
    return redirect('cat_show/')->with('success', 'Successfully Deleted');
}


    // public function cat_store()
    // {
        // 
        //  
    // }
}
