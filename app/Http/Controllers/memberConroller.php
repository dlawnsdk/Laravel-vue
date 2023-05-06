<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class memberController extends Controller
{
     public function joinSave(Request $request): string
     {
         echo "회원가입 컨트롤러 진입".$request;
         return "회원가입 성공";
     }
}
