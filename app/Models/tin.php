<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class tin extends Model
{
    use HasFactory;
    protected $table='tin';
    protected $table1='loaitin';
    public function get_tin_view_desc(){
        return DB::table($this->table)->orderBy('xem','desc')->limit(10)->get();
    }
    public function get_tin_new(){
        return DB::table($this->table)->orderBy('ngayDang','desc')->limit(10)->get();
    }
    public function get_tl(){
        return DB::table($this->table1)->get();
    }
    public function get_tin_by_tl($idLT){
        return DB::table($this->table)->where($this->table.'.idLT','=',$idLT)->get();
    }
    public function detail_tin($id){
        return DB::table($this->table)->where('id','=',$id)->get();
    }
    public function get_name_tl($id){
        return DB::table($this->table1)->where($this->table1.'.id','=',$id)->pluck('ten');
    }
}
