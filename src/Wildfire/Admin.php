<?php
namespace Wildfire;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Wax\Application as Wax;

class Admin extends Wax {

  protected function route($request) {
    parent::route($request);
    \WaxUrl::$autoload = true;
    \WaxUrl::map("admin/:controller", array());
    \WaxUrl::map("admin/:controller/:action", array());
    \WaxUrl::map("admin/:controller/:action/:id", array());
    \WaxUrl::perform_mappings();
  }

}