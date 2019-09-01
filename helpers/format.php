<?php


 class format
{
    public function formatTD($date){
        return date( 'F j, y, g:i a',strtotime($date));


    }

    public function textShort($text, $limit = 200){
             $text=$text . "";
             $text=substr($text,0, $limit);
        $text=substr($text,0, strrpos($text, ''));
        $text=$text . "...";
        return $text;





    }
}
?>