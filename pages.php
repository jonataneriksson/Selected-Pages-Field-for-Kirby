<?php

/**
 * Put your plugin code here
 */

class PagesField extends StructureField {

  public function content()
  {
      $wrapper = new Brick('div');
      $wrapper->addClass('Pages');
      return $wrapper;
  }

}
