<?
class PageController extends ApplicationController{

  public function controller_global(){
    parent::controller_global();
    $this->cms();
    $this->cms_stacks();
  }


  public function __standard_listing(){
    //if  this is the home page, swap over to the
    if($this->cms_content->permalink == "/"){
      $model = new CContent("live");
      if($found = $model->filter("permalink", "/blog/")->first()) $this->cms_content = $found;
    }
  }


}
?>