<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 2017/5/9
 * Time: 10:59
 */

if(!empty($_COOKIE['counter'])){
    $counter = $_COOKIE['counter']+1;
}else{
    $counter=1;
}
setcookie("counter",$counter,time()+2678400);
?>
您是第&nbsp;<?php echo $counter; ?>&nbsp;位访客
