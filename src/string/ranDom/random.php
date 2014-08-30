<?php

/**
 * mt_rand(33, 126)对应ASCII 码的范围，是数字的范围：
 * 0—9 ASCII代码范围 48—57
 * A—Z ASCII代码范围 65—90
 * a—z ASCII代码范围 97—122
 * @param  string $str_length 长度
 * @return string $randstr    随机数
 */
function create_str($str_length = ''){    
   $randpwd = ''; 
   $randstr = '';   
   for($i = 0; $i < $str_length; $i++){    
     $randstr .= chr(mt_rand(65,90));    
   }    
   return $randstr;   
} 

function create_str1( $length = 8 ) {    
    // 密码字符集，可任意添加你需要的字符    
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';    
    $str = '';    
    for( $i = 0; $i < $length; $i++ ){    
       // 这里提供两种字符获取方式    
       // 第一种是使用 substr 截取$chars中的任意一位字符；    
       // 第二种是取字符数组 $chars 的任意元素    
       // $password .= substr($chars, mt_rand(0, strlen($chars) – 1), 1);    
       $str .= $chars[ mt_rand(0, strlen($chars) - 1) ];    
    }    
    return $str;    
}

/**
 * 生成随机数
 * @param int length 随机数长度 
 * @return string 生成的随机码
 */
function get_random_code($length)
{
  srand((double)microtime() * 1000000);//create a random number feed.
  $ychar = "0,1,2,3,4,5,6,7,8,9";
  $list = explode(",",$ychar);
  for( $i = 0; $i < $length; $i++ ) {
    $randnum=rand(0,9); // 10+26;
    $random_code .= $list[$randnum];
  }
  return $random_code;
}    

echo create_str1(9);
