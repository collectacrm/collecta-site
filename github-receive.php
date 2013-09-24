<?php
function cidr_match($ip, $ranges) {
  $ranges = (array)$ranges;
  foreach($ranges as $range) {
    list($subnet, $mask) = explode('/', $range);
    if((ip2long($ip) & ~((1 << (32 - $mask)) - 1)) == ip2long($subnet)) return true;
  }
  return false;
}
 
$github_cidrs = array('204.232.175.64/27', '192.30.252.0/22');
 
if(cidr_match($_SERVER['REMOTE_ADDR'], $github_cidrs)) {
  error_log("[WEBHOOK] Received github request as ".date("d j Y H:i:s"));
  shell_exec("/home/collecta/deployer/deploy.sh");
  echo 'Done.';
} else {
  header('HTTP/1.1 404 Not Found');
  echo exec('whoami');
  echo '404 Not Found.';
  exit;
}