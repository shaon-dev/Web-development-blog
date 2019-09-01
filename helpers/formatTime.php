<?php
public class formatTime
{
public function formatDate($data){
    return $data('F j, y, g:i a',strtotime($data));


}
}


?>
