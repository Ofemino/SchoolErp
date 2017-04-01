<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table='userprofile';

    public function getUserRole($uid){
        $profileId = DB::select('select user_id from userprofile where user_id=?', [$uid]);
        return $profileId;
    }
}
