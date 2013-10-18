<?php
$dev = include __DIR__."/development.php";
return array_merge($dev, array(
  'db.user' => 'collecta',
  'db.password' => 'c0ll3ctacat',
));
