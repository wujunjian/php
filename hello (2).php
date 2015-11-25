
<html>
 <head>
  <title>PHP 测试</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>
<?php 
echo $_SERVER['HTTP_USER_AGENT']; 
?>
<!-- <?php phpinfo(); ?> -->
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
    echo '正在使用 Chrome Explorer. <br />';
}
?>


<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
<h3>strpos() 肯定没有返回假 (FALSE)</h3>
<p>正在使用 Internet Explorer</p>
<?php
} else {
?>
<h3>strpos() 肯定返回假 (FALSE)</h3>
<center><b>没有使用 Internet Explorer</b></center>
<?php
}
?>


<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show. <br>
<?php endif; ?>


<?php
   foreach ($_SERVER as $key=>$value) 
   {
      echo $key."=".$value;
      echo "<br>";
   }
?>


<form action="action.php" method="post">
 <p>姓名: <input type="text" name="name" /></p>
 <p>年龄: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>

 </body>
</html>
