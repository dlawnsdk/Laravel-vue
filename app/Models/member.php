<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class member extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public function joinSave(array $request): void
    {
        /**
         * 쿼리빌더 사용
         * 회원가입
         */
        DB::table('users')->insert([
            'userid' => $request['userid'],
            'password' => $request['password'],
            'email' => $request['email'],
            'timestamps' => now(),
        ]);
    }

    public function joinList(): array{
        $list = array();

        $list = DB::table('users')->select('*')->get();

        return $list;
    }
}
