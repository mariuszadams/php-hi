<h1>
<?php
echo 'PHP version: ' . phpversion();
echo '<br/>';
echo $_SERVER['HTTP_HOST'] .' @ '. $_SERVER['SERVER_ADDR'] .' @@ '. $_ENV['HOSTNAME'] . '</h1>';
if($_GET){
  foreach($_ENV as $var => $val)
  {
    echo $var.'='.$val.'<br/>';
  }
}
?> 
