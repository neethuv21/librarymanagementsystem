<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    use HasFactory;
    public function registerdata($table,$data){
        DB::table($table)->insert($data);

    }
    public function logindata($table,$email,$password){
        return DB::table($table)->where('email',$email)->where('password',$password)->first();
    }

}
