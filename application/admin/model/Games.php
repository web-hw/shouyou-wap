<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/7 0007
 * Time: 16:14
 */
namespace app\admin\model;
use think\Model;
use think\Db;
class Games extends Model
{
    public static function game_select(){
        $list =  Db::query('select * from games');
        return $list;
    }
    public static function game_insert($data){
      $list=  Db::table('games')->insert($data);
      return $list;
    }
}