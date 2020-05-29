<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($micopost_id){
        \Auth::user()->favorite($micopost_id);
        return back();
    }
    
    public function destroy($micopost_id){
        \Auth::user()->unfavorite($micopost_id);
        return back();
    }
}
