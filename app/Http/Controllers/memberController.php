<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\member;

class memberController extends Controller
{
    public function joinSave(Request $request): string
    {
        echo 'test1';

        $data = [
            'userid' => $request.input('userid'),
            'password' => $request.input('password'),
            'email' => $request.input('email'),
            'timestamps' => date("Y-m-d H:i:s"),
        ];

        // 모델을 사용하여 데이터를 추가합니다.
        member::create($data);

        echo 'test2';
        echo '::::::: test ::::::';
        return redirect('/');
    }
}
