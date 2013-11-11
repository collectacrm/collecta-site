<?php

Config::set("log_info", false);
Config::set("log_warn", false);
Config::set("log_error", true);

WXRoutingException::$redirect_on_error = "/404.html"; // Page not found error
WaxException::$redirect_on_error = "/error.html";
?>