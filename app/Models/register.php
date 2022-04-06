<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
   public function insertData($table,$data)
   {
       DB::table($table)->insert($data);
   }
   public function viewRegister($table)
   {
       return DB::table($table)->get();
   }
   public function loginData($table,$email,$password)    
    {
        return DB::table($table)->where('email',$email)->where('password',$password)->first();
    }
    public function viewDonor($table)
    {
        return DB::table($table)->get();
    }
}
