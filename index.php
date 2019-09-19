<?php
echo '<h1>PHP version: ' . phpversion() . '<br/>';
echo  $_ENV['HOSTNAME'] .' @ '. $_SERVER['SERVER_ADDR'] .' >>> '. $_SERVER['HTTP_HOST'].'</h1>';
if($_GET)
{
  foreach($_ENV as $var => $val)
  {
    echo $var.'='.$val.'<br/>';
  }
}
?>
