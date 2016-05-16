<?php
class BackgroundImage {
  public function ui() {
    return array(
      'title'     => __('Background Image', 'cornerstone-helper'),
      'autofocus' => array(
        'content'   => 'div.background-image'
      ),
      'icon_group'=> 'cornerstone-helper'
    );
  }
}
