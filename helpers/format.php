<?php


 class format
{
    public function formatTD($data){
        return data('F j, y, g:i a',strtotime(data));


    }
}
?>