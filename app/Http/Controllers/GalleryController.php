<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function welcomes(){
        $images=Gallery::all();
        return view('form',[
            'images'=>$images
        ]);
    }
    function store(Request $request){
        $mymodel=Gallery::create([
            'caption'=>$request->name,

        ]);
        if($request->image){
            $mymodel->addMediaFromRequest('image')->toMediaCollection();
        }
    }
}
