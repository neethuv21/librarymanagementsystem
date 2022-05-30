<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    public function insertData($table,$data){
        DB::table($table)->insert($data);

    }
    public function bview($table){
        return DB::table($table)->get();
    }
    public function bedit($table,$id){
        return DB::table($table)->where('id',$id)->get();
    }
    public function editdata($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
    public function deletedata($table,$id){
        return DB::table($table)->where('id',$id)->delete();
    }
}
