<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\member;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class memberController extends Controller {
    public function joinSave(Request $request): void
    {
        /**
         * 쿼리빌더 사용
         * 회원가입
         */
        DB::table('users')->insert
        ([
            'userid' => $request->input('userid')
            , 'password' => $request->input('password')
            , 'email' => $request->input('email')
            , 'timestamps'=> date("Y-m-d H:i:s")
        ]);
    }
}
