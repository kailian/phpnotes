<?php
/**
 * 将时间戳转换为Y-m-d H:i:s时间
 * @return string
 */
function time_to_date($time){
	if(!isset($time)){
		$time = time();
	}
	return date("Y-m-d H:i:s",$time);
}

/**
 * 将时间戳转换为Y-m-d时间
 * @return string
 */
function time_to_day($time){
	if(!isset($time)){
		$time = time();
	}
	return date("Y-m-d",$time);
}

/**
 * 时间转换
 * @param  string $show_time 显示时间戳
 * @return string mixed
 */
function time_tran( $show_time ) {
		$dur = time() - $show_time;
		if($dur < 0){
		return $show_time;
		} else {
		if($dur < 60){
 			return $dur.'秒前';
		} else {
 			if($dur < 3600){
  			return floor($dur/60).'分钟前';
 			} else {
  				if($dur < 86400){
   				return floor($dur/3600).'小时前';
  				} else {
   					if( $dur < 259200 ){//3天内
    				return floor($dur/86400).'天前';
       				} else {
        				return date("Y-m-d",$show_time);
       				}
  				}
 			}
 		}
 	}
}		


/**
 * 将日期转换为月日
 * @param   string  $date  日期
 */
function format_date_short($date){
    $date = str_replace( "-0", "-", $date );
    $str_date = strtok( $date, "-" );
    $str_date = strtok( "-" );
    $re_date .= $str_date."月";
    $str_date = strtok( " " );
    $re_date .= $str_date."日";
    return $re_date;
}

/**
 * 将日期转换为年月日
 * @param   string  $date  日期
 */
function format_date($date){
    $date = str_replace( "-0", "-", $date );
    $str_date = strtok( $date, "-" );
    $re_date = $str_date."年";
    $str_date = strtok( "-" );
    $re_date .= $str_date."月";
    $str_date = strtok( " " );
    $re_date .= $str_date."日";
    return $re_date;
}

/**
* 将00:00:00转换为00:00
* @param   string  $time  				时间
*/
function format_time($time){	    
    $re_time = date("G:i", strtotime($time));
    return $re_time;
}

/**
 * 星期的星期一
 * @param  integer $timestamp           某个星期的某一个时间戳，默认为当前时间
 * @param  boolean $is_return_timestamp 是否返回时间戳，否则返回时间格式
 * @return date                       
 */
function get_this_monday($timestamp=0, $is_return_timestamp=true){
  	static $cache ;
  	$id = $timestamp.$is_return_timestamp;

  	if(!isset($cache[$id])){
    	if(!$timestamp) {
    		$timestamp = time();
    	}

    	$monday_date = date('Y-m-d', $timestamp - 86400 * date('w',$timestamp) + (date('w',$timestamp) > 0 ? 86400 : -/*6*86400*/518400));
    	if($is_return_timestamp){
      		$cache[$id] = strtotime($monday_date);
    	}
    	else{
      		$cache[$id] = $monday_date;
    	}
  	}

  	return $cache[$id];
}


/**
 * 星期的星期天
 * @param  integer $timestamp           某个星期的某一个时间戳，默认为当前时间
 * @param  boolean $is_return_timestamp 是否返回时间戳，否则返回时间格式
 * @return date                      	[description]
 */
function get_this_sunday($timestamp=0, $is_return_timestamp=true){
  	static $cache ;
  	$id = $timestamp.$is_return_timestamp;

  	if(!isset($cache[$id])){
    	if(!$timestamp){
    		$timestamp = time();
    	}
    	
    	$sunday = $this->get_this_monday($timestamp) + /*6*86400*/518400;
    	if($is_return_timestamp){
	      	$cache[$id] = $sunday;
    	}
    	else{
	      $cache[$id] = date('Y-m-d',$sunday);
	    }
  	}

  	return $cache[$id];
}