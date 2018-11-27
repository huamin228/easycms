<?php

namespace App\Http\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $listsMenu = [
        'Id',
        '标题',
        '分类',
        '作者',
        '发布时间',
        '操作'
    ];

    public $listsKey = ['id','title','category','createTime'];

    public $formatList = [
        'category'=>''
    ];

    public function getList(){

    }

}
