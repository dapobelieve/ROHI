<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     private function word_teaser($string, $count){
      $original_string = $string;
      //explode breaks a string into an array
      $words = explode(' ', $original_string);

       if (count($words) > $count){
       //start slicing ($words) from the first word and return $count number of words
       $words = array_slice($words, 0, $count);
       $string = implode(' ', $words);
      }
     
      return $string;
    }

    public function getSumry($word, $count)
    {
    	return $this->word_teaser($word, $count);
    }

    public function getImage()
    {
      if(empty($this->image))
        {
            $img = "/assets/images/blog/r1.jpg";
        }else
        {
            $img = $this->image;
        }
        return $img;
    }
}
