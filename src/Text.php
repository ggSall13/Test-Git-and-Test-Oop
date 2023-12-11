<?php

namespace src;

class Text
{
   private $text;
   private $author;
   private $title;

   public function __construct($post) {
      $this->text = $post['text'];
      $this->author = $post['author'];
      $this->title = $post['title'];
   }

   public function toArray() {
      return [
         'text' => $this->text,
         'title' => $this->title,
         'author' => $this->author,
      ];
   }
}
