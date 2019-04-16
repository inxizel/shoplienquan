<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lienquan extends Model
{
    protected $fillable = [
    	'loainick',
    	'rank_id', 
    	'season', 
    	'taikhoan', 
    	'matkhau', 
    	'count_champs', 
    	'count_skins', 
    	'count_bangngoc', 
    	'diemngoc', 
    	'gia', 
    	'giamgia', 
    	'ip', 
    	'champs', 
    	'skins',
    	'thongtin', 
    	'trangthai', 
    	'kichhoat',
    	'uutien',  
    	'thumb_id', 
    	'image_id', 
    	'user_id'
    ];

}
