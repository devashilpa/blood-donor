<?php

namespace App\Models;
 use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminlogin extends Model
{
    use HasFactory;
    public function loginData($table,$email,$password)    
    {
        return DB::table($table)->where('email',$email)->where('password',$password)->first();
    }
}
