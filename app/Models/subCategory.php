<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    use HasFactory;
    function subCat()
    {
        return $this->belongsTo(category::class, 'cat_id');
    }

}
