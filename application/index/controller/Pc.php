<?php
namespace app\index\controller;

class Pc
{

    //平台手游大厅
    public function gcenter()
    {
        return view("gcenter/index");
    }
  //平台手游大厅-游戏详情
    public function gamedetail()
    {
        return view("gcenter/game-detail");
    }
    //平台首页
     public function index()
    {
        return view("index/index");
    }
     //平台用户中心-个人资料
      public function ucenter()
     {
         return view("ucenter/index");
     }
      //平台用户中心-修改密码
   public function changgepsw()
   {
       return view("ucenter/changge-psw");
       }
    //平台用户中心-账号安全
      public function usersafe()
      {
          return view("ucenter/user-safe");
      }
    //平台用户中心-礼包中心
     public function giftcenter()
     {
         return view("ucenter/gift-center");
     }
  //礼包中心
    public function gifts()
    {
        return view("gifts/index");
    }
 //礼包中心
     public function giftsdetail()
     {
         return view("gifts/gifts-detail");
     }
  //新闻中心
      public function newcenter()
      {
          return view("newcenter/index");
      }
 //新闻中心-详情页
     public function newdetail()
     {
         return view("newcenter/news-detail");
     }
   //客服中心—建议与BUG
       public function cs_bug()
       {
           return view("customer/bug");
       }
 //客服中心—接驾服务
       public function cs_car()
       {
           return view("customer/car");
       }
  //客服中心—投诉
        public function cs_complain()
        {
            return view("customer/complain");
        }
    //客服中心—密码找回
        public function cs_findpsw()
        {
            return view("customer/findpsw");
        }

     //客服中心—服务记录
         public function cs_service_records()
         {
             return view("customer/Myrecords");
         }
     //客服中心—账号查询
         public function cs_query()
         {
             return view("customer/query");
         }
     //客服中心—账号修复
         public function cs_repair()
         {
             return view("customer/repair");
         }
      //客服中心—账号修复结果
          public function cs_repair_result()
          {
              return view("customer/repairResult");
          }
      //客服中心—外挂举报
           public function cs_wg()
           {
               return view("customer/wg");
           }
      //客服中心—首页
               public function cs_index()
               {
                   return view("customer/index");
               }
}
