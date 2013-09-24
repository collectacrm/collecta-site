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
  $dir = '/home/collecta/deployer/';
  exec("cd $dir; /usr/bin/git fetch --all; /usr/bin/git reset --hard origin/master");
  error_log("[SUCCESS] ".print_r($_POST, 1));
  echo 'Done.';
} else {
  header('HTTP/1.1 404 Not Found');
  echo '404 Not Found.';
  echo exec("cd $dir; /usr/bin/git status");
  exit;
}