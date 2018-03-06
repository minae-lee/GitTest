<html>
<body>
<?php
$a = 100;
echo gettype($a); # $a의 타입 출력
settype($a, 'double'); # $a의 데이터 형 변환 int -> double
echo '<br />';
echo gettype($a);
?>
</body>
</html>