<?php
/**
 * 获取IP
 *
 * @return unknown
 */
function GetIP() {
    if (! empty( $_SERVER ["HTTP_CLIENT_IP"] ))
        $cip = $_SERVER ["HTTP_CLIENT_IP"];
    else if (! empty( $_SERVER ["HTTP_X_FORWARDED_FOR"] ))
        $cip = $_SERVER ["HTTP_X_FORWARDED_FOR"];
    else if (! empty( $_SERVER ["REMOTE_ADDR"] ))
        $cip = $_SERVER ["REMOTE_ADDR"];
    else
        $cip = "";
    return $cip;
}

// 定义一个函数getIP()
function getIP()
{
  global $ip;
 
  if (getenv("HTTP_CLIENT_IP"))
    $ip = getenv("HTTP_CLIENT_IP");
  else if(getenv("HTTP_X_FORWARDED_FOR"))
    $ip = getenv("HTTP_X_FORWARDED_FOR");
  else if(getenv("REMOTE_ADDR"))
    $ip = getenv("REMOTE_ADDR");
  else
    $ip = "Unknow"; 
  return $ip;
}

// 使用方法：
echo getIP();


// 获取客户端IP地址
function getClientIp() {
 if (getenv ( "HTTP_CLIENT_IP" ) && strcasecmp ( getenv ( "HTTP_CLIENT_IP" ), "unknown" ))
  $ip = getenv ( "HTTP_CLIENT_IP" );
 else if (getenv ( "HTTP_X_FORWARDED_FOR" ) && strcasecmp ( getenv ( "HTTP_X_FORWARDED_FOR" ), "unknown" ))
  $ip = getenv ( "HTTP_X_FORWARDED_FOR" );
 else if (getenv ( "REMOTE_ADDR" ) && strcasecmp ( getenv ( "REMOTE_ADDR" ), "unknown" ))
  $ip = getenv ( "REMOTE_ADDR" );
 else if (isset ( $_SERVER ['REMOTE_ADDR'] ) && $_SERVER ['REMOTE_ADDR'] && strcasecmp ( $_SERVER ['REMOTE_ADDR'], "unknown" ))
  $ip = $_SERVER ['REMOTE_ADDR'];
 else
  $ip = "unknown";
 return addslashes($ip);
}

function getip()
{
 if (isset ($_SERVER['HTTP_X_FORWARDED_FOR']))
 {
  $onlineip = $_SERVER['HTTP_X_FORWARDED_FOR'];
 }
 elseif (isset ($_SERVER['HTTP_CLIENT_IP']))
 {
  $onlineip = $_SERVER['HTTP_CLIENT_IP'];
 }
 else
 {
  $onlineip = $_SERVER['REMOTE_ADDR'];
 }
 $onlineip = preg_match('/[\d\.]{7,15}/', addslashes($onlineip), $onlineipmatches);
 return $onlineipmatches[0] ? $onlineipmatches[0] : 'unknown';
}

?>
