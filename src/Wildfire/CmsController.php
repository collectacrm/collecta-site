<?php
namespace Wildfire;
/**
* 
*/
class CmsController extends \CMSApplicationController {
  
  public function controller_global() {
    $basedir = getcwd();
    \Autoloader::register_view_path("user", $basedir."/templates/");
    $this->cms();
    $this->cms_stacks();
  }

  public function event_setup() {
    parent::event_setup();
    \WaxEvent::add("cms.view.lookup", function(){
      $obj = \WaxEvent::data();
      $obj->use_layout = "layout";
      $obj->use_view = "cms_view";
      $obj->cms_throw_missing_view = false;
    });
  }
  
}