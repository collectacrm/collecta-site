<?php
$dev = include __DIR__."/config_development.php";
return array_merge($dev, array(
  "db"=>[
    "dbtype"  =>"mysql",
    "host"    =>"localhost",
    "database"=>"collecta",
    "username"=>"collecta",
    "password"=>"c0ll3ctacat"
  ]
));