<?php
require('header.php');
?>
<html>
<head>
<title>Кафе Чайка - Результаты заказа</title>
</head>
<body>
<h1>Лабораторная работа Ne 1 по теме передача данных из формы в основную программу и их последующая обработка</h1>
<h2>Кафе "Чайка"</h2>
<h3>Результаты заказа</h3>
<?php
 echo '<p>Заказ обработан в ';
echo date('H:i, jS F');
echo '</p>';

//создать короткие имена переменных
$tireqty = $HTTP_POST_VARS['tireqty'];
$oilqty = $HTTP_POST_VARS['oilqty'];
$sparkqty = $HTTP_POST_VARS['sparkqty'];
$shurqty = $HTTP_POST_VARS['shurqty'];
$find = $HTTP_POST_VARS['find'];


echo '<p>Список вашего заказа: </p>';
echo $tireqty .'Шашлык</br>';
echo $oilqty .'Чашек кофе</br>';
echo $sparkqty .'Закуска</br>';
echo $shurqty .'Шаурма</br>';

$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty + $shurqty;
echo 'Заказано товаров: '.$totalqty.'</br>';

$totalamount = 0.00;

define('TIREPRICE',100);
define('OILPRICE',10);
define('SPARKPRICE',4);
define('SHURPRICE',15);

$totalamount = $tiregty * TIREPRICE
 + $oilqty * OILPRICE
 + $sparkqty * SPARKPRICE
 + $shurqty * SHURPRICE;
echo 'Итого: $'.number_format($totalamount,4).'</br>';

 $taxrate = 0.10; // местный налог с продаж составляет 10%
 $totalamount = $totalamount * (1 + $taxrate);
 echo 'Всего, включая налог с продаж: $'. number_format($totalamount,2).'<br>';

 ?>
 На вопрос как Вы нашли нашу компанию был получен ответ: <? echo $find; ?>
</body>
</html>
<?php
require('footer.php');
?>
