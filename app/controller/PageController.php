<?
class PageController extends ApplicationController{

  public function controller_global(){
    parent::controller_global();
    $this->cms();
    $this->cms_stacks();
  }



}
?>