<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\member;
class memberController extends Controller {
    # 저장
    public function joinSave(Request $request): void
    {
        $member = new member();
        $member->joinSave($request->all());
    }

    public function joinList(): array
    {
        $list = array();

        $member = new member();
        $list = $member->joinList();

        return $list;
    }
}
