<?php

namespace App\Http\Controllers;

use App\Models\subCategory;
use Illuminate\Http\Request;

class FrontContrller extends Controller
{
    public function home()
    {
        $SubCats = subCategory::with(['subCat'])->get()->groupBy('cat_id');
        
        return view('home', ["data"=>$SubCats]);
    }
}
