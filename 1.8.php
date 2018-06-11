<?php
// 1.8 Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр

for($i = 1000; $i < 10000; $i ++)
{
	$fourth = floor(($i%100)%10);
	$third = floor(($i%100)/10);
	$second = floor(($i%1000)/100);
	$first = floor($i/1000);

	if(($first != $second && $first != $third && $first != $fourth && $second != $first && $second != $third  && $second != $fourth && $third != $first && $third != $second && $third != $fourth && $fourth != $first && $fourth != $second && $fourth != $third ))
	{
		echo $i."<br>";
	}
}
?>
