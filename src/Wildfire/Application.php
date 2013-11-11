<?php
namespace Wildfire;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Wax\Application as Wax;

class Application extends Wax {

  public function route($request) {
    parent::route($request);

  }

}