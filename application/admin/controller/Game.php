<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/7 0007
 * Time: 16:16
 */

namespace app\admin\controller;

use app\admin\model\Games;

class Game
{
    public function index(){
        $list=Games::game_select();
        dump($list);
//        return $list;
    }
    public function add(){
    $data=array(
      'name'=>'锤子游戏2',
      'content'=>'大家一起玩锤子游戏2',
      'android'=>'www.baidu.com',
      'ios'=>'www.baidu.com',
      'guanwang'=>'www.baidu.com',
        'type'=>2,
        'types'=>5,
        'time'=>time(),
        'py'=>'czxy2',
        'kb'=>'3000M',

    );
    $list= Games::game_insert($data);
    var_dump($list);

//        return $list;
    }
}