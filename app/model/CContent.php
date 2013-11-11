<?
class CContent extends WildfireContent{
  public $table = "wildfire_content";

  public function live_children($limit=false){
    if(($children = $this->children) && ($children = $children->scope("live")->limit($limit)->all()) && $children->count() ) return $children;
    return false;
  }
}
?>