<?php
namespace Wildfire;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Wax\Application as Wax;

class Application extends Wax {

  public function route($request) {
    parent::route($request);
    $this->server = "http://".$_SERVER['HTTP_HOST'];
    \WaxUrl::map("", array("controller"=>"Wildfire\ Cms","action"=>"index"));
    \WaxUrl::map(":action", array("controller"=>"Wildfire\ Cms"));
    \WaxUrl::map(":action/:id", array("controller"=>"Wildfire\ Cms"));
  }

}