<?php

namespace Compco\FsTest\Models;

use Compco\FsTest\Data;
use Compco\FsTest\Traits\ConnectionTrait;
use Illuminate\Database\Capsule\Manager as DB;

class User
{
    use ConnectionTrait;

    public function getById($id)
    {
        $user = DB::table('users')
            ->select('*')
            ->where('id', '=', $id)
            ->first();

        return $user && $user->id ? (array) $user : NULL;
    }

    public function update(Data\User $user)
    {

        DB::table('users')->insert(array(array('')));
    }

    public function login(Data\User $user)
    {
        $user = DB::table('users')
            ->select('*')
            ->where('email', '=', $user->email)
            ->where('password', '=', $user->password)
            ->first();
        
        return $user && $user->id ? (array) $user : NULL;
    }
}