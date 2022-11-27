<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    
    protected $table = 'demo';  // 資料表名稱
    protected $primaryKey = 'userId';   // 主鍵
    public $timestamps = false;
    protected $fillable =   
       ['userId','account','pw'];
}
