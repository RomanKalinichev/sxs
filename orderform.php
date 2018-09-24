<?php
require('header.php');
?>
<html>
<head>
 <title> Кафе "Чайка"</title>
 </head>
 <body>
 
<h1>Лабораторная работа 1 по теме передача данных из формы в основную программу и их последующая обработка</h1>
 
<h2>Кафе "Чайка"</h2>
<h3>Форма заказа</h3>
<form action="processorder.php" method=post>
<table border=0>
<tr bgcolor=#CCCCCC>
 <td width=150>товар</td>
 <td width=15>Количество</td>
</tr>
<tr>
 <td> Закуска</td>
 <td align="center"><input type="text" name="tireqty" size= "3" maxlength="3"></td>
</tr>
<tr>
 <td>Шашлык</td>
 <td align= "center"><input type="text" name="oilqty" size="3" maxlength="3"></td>
</tr>
<td>Шаурма</td>
 <td align= "center"><input type="text" name="shurqty" size="3" maxlength="3"></td>
</tr>
<tr>
 <td>Кофе</td>
 <td align="center"><input type="text" name="sparkqty" size= "3" maxlength="3"></td>
</tr>
<tr>
 <td>Как вы нашли наше кафе "Чайка?"</td>
 <td><select name="find">
  <option value = "я регулярный клиент">я регулярный клиент
  <option value = "В телевизионной рекламе">в телевизионной рекламе
  <option value = "В телефонном справочнике">в телефонном справочнике
  <option value = "кто-то порекомендовал">кто-то порекомендовал
</select>
</td>
</tr>
<tr>
 <td colspan="2" align="center"><input type="submit" value= "отправить заказ"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
require('footer.php');
?>
