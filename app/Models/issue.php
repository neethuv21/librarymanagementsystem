<?php


namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issue extends Model
{
    use HasFactory;
    public function issuebook($table){
        return DB::table($table)->get();
    }
    public function ibook($table){
        return DB::table($table)->get();
    }
     public function insertData($table,$data){
        DB::table($table)->insert($data);

    }
    public function vissue($table){
        return DB::table($table)->get();
    }
    public function idata($table,$id){
        return DB::table($table)->where('id',$id)->get();
    }
     public function rdata($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
    public function olddate($table,$id){
        return DB::table($table)->where('id',$id)->value('returndate');
    }
    public function ridata($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
}
