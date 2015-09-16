<?php 

class Structure extends Collection {

  public $page = null;

  public function get($key, $default = null) {

    if(isset($this->data[$key])) {
      return $this->data[$key];
    } else {
      $lowerkeys = array_change_key_case($this->data, CASE_LOWER);
      if(isset($lowerkeys[strtolower($key)])) {
        return $lowerkeys[$key];
      }
    }

    return new Field($this->page, $key, null);

  }

}