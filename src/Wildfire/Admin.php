<?php
namespace Wildfire;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Wax\Application as Wax;

class Admin extends Wax {  
  
  protected function route($request) {
    parent::route($request);
    if(!defined("CONTENT_MODEL")) define("CONTENT_MODEL","WildfireContent");
    \WaxUrl::$autoload = true;
    \WaxUrl::map("wp-login/:controller", array());
    \WaxUrl::map("wp-login/:controller/:action", array());
    \WaxUrl::map("wp-login/:controller/:action/:id", array());
    \WaxUrl::perform_mappings();
  }

}