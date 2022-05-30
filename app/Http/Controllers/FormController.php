<?php

namespace App\Http\Controllers;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $product=new Form();
        $product-> fname=$request->fname; //first fname is for co,umn name
        $product-> lname=$request->lname;
        $product-> mobile=$request->mobile;
        $product-> email=$request->email;
        $product-> pwd=$request->pwd;
        $product-> save();
    }
}
