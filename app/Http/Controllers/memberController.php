<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class memberController extends Controller
{
    public function joinSave(Request $request): string
    {
        $name = $request->input('name');
        echo '::::::: test ::::::';
        return redirect('/');
    }
}
