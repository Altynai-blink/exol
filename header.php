<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="C:\Users\User\Desktop\OSPanel\domains\oop\index.css">
</head>
<body bgcolor="#cab8bc">
	<div class="povt"><p>Software and Computer technology</p></div>
<?php
class Header {
private $title;
public function __construct($var1) {
$this->title = $var1;
}
public function f_display()
{
echo "<html><head>\n";
echo '<title>' . $this->title . "</title>\n";
echo '<meta http-equiv="Content-Type" content="text/html; ';
echo "charset=windows-1251\">\n";
echo '</head>';
echo "<body>\n";
echo '<link rel="stylesheet" type="text/css" href="C:\Users\User\Desktop\OSPanel\domains\oop\index.css">';
}
}
?>
</body>
</html>