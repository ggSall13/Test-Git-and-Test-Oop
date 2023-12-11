<?php

namespace src;

class Writer
{
   public function save($text) {
      $this->dateCreate = date('d.m.y_H-i-s');
      file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/data/' . date('d.m.y_H-i-s'). '.txt', serialize($text->toArray()));
   }

}

