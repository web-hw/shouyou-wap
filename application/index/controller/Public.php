<?php
namespace app\index\controller;

class Public
{
    public function footer()
    {
        return view("public/footer");
    }
     public function header()
        {
            return view("public/header");
        }
          public function top_line()
                {
                    return view("public/top_line");
                }
}
