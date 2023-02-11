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
        return redirect('cat_show')->with('massag', 'Successfully Inserted');
    }

    public function cat_show()
    {
        $catModel = new category();
        $allData = $catModel->get();
        return view('admin.cat_show', ["data"=> $allData]);
    }

    public function cat_edit($id)
    {
        $data= category::find($id);
        return view('admin.cat_edit', compact('data'));
    }

    public function cat_update(Request $request, $id)
    {
        $cat_name = category::find($id);
        $cat_name->cat_name = $request->cat_name;
        $cat_name->save();
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
