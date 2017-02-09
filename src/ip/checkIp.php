<?php
/**
 * private IPs
 * http://php.net/manual/zh/function.filter-var.php
 */
function is_private_ip($ip) { 
    return !filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE);
}