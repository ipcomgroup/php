<html>
<head>
<meta http-equip="Content-Type" content="text/html; charset=windows-1251">
<title>PHP lessons</title>
<body>

<!--Комментирование блока кода html-->
<?php
//Однострочный комментарий
/*Многострочный комментарий*/
#phpinfo();
/*
//Обьявление переменных..:
$empty = 0;
#User name
$name = "User";
#User age
$age = 25;
#Num variable
$n = 10;
#Count variable
$cou = $age * $n;
#Output variable
echo $name;
echo "<br>$age";
echo "<p align='center'><br>My friend name was $name, he is old $age\"Экранирование двойных ковычек\"</p>";
#Count variable output
echo "<br>Old $name was be sometimes $cou";
$empty = $age + $n;
echo "<br>Addition, $age + $n = $empty";
$empty = $age - $n;
echo "<br>Substaction, $age - $n = $empty";
$empty = $age * $n;
echo "<br>Multiplication, $age * $n = $empty";
$empty = $age / $n;
echo "<br>Division, $age / $n = $empty";
$empty = $age.$n;
echo "<br>Пристыковка переменных, $age и $n = $empty";


//Конструкция if-else
echo "<p align=center>Конструкция if-else</p>";
$a = 1;
$b = 2;
# == равенство != не равентсво
if ($a == $b ) 
{
	echo "<br>Переменные равны";
}
else 
{
	echo "<br>Переменные не равны";
}

$a = 1;
$b = 2;
$c = 3;
$d = 4;
//Булевая операция
if ($a != $b and $c != $d or $d != $a) 
{
	echo "Переменные не равны";
}
else
{
	echo "Переменные равны";
}
*/

/*
//Вложенные конструкции if-else
$a = 1;
$b = 2;
$c = 3;
$d = 4;
$cat = "Juli";
$dog = "Hart";

if ($a != $b and $c != $d) 
{
	echo "Переменные не равны";
}
else
{
	echo "Переменные равны";
}

if ($cat != $dog) 
{
	echo "<br>В переменных Cat и Dog содержаться разные имена";
}
else
{
	echo "<br>В переменных Cat и Dog содержаться одинаковые имена";
}
*/

/*
//Цикл do-while
$a = 0;
do
{
	echo "$a<br>";
	$a = $a + 1;
}
while ($a <= 10);
*/

/*
$sum = 0;
$i = 1;
//Цикл с предусловием
while ($i <= 100)
{
	$sum = $sum + $i;
	//echo "Variable sum = $sum <br>";
	$i++;
}

echo "Сумма всех чисел от 1 до 100 = $sum <br>";
*/

/*
//Цикл с постусловием
do
{
	$sum = $sum + $i;
	//echo "Variable sum = $sum <br>";
	$i++;
}
while ($i <= 100);
echo "Сумма всех чисел от 1 до 100 = $sum <br>";
*/
/*
//Цикл for
for ($i=0, $sum=0; $i <= 1000; $i++) 
{ 
	$sum = $sum + $i;
}
echo "Сумма всех чисел от 1 до 1000 = $sum";
print($sum);
*/


// Синтаксис HEREDOC Вывод текста без экранирования синтаксиса*
/*
echo <<<HERE

<a href="http://www.php.su/scripts/" ping="/url?sa=t&amp;source=web&amp;rct=j&amp;url=http://www.php.su/scripts/&amp;ved=2ahUKEwjM5Lu6w4PdAhUiJ5oKHWd_CyQQFjABegQICRAB">PHP.SU - PHP Скрипты</a>

HERE;
*/


/*
//Конструкция svitch-case
$sposob = "Cashless payments";
switch ($sposob)
{
	case "Bank":
		echo "<br>Что бы оплатить через банк...";
		break;
	case "Mail":
	{
		echo "<br>Что бы оплатить через почту...";
		break;
	}
	case "Cashless payments":
	{
		echo "<br>Что бы оплатить безналичным расчетом...";
		break;
	}
	default:
	{
		echo "<br>Вы не выбрали способ оплаты!";
		break;
	}
}
*/
/*
//Индексные Массивы!!!
//Способ создания массива №2
$name[0] = "Sasha";
$name[1] = "Masha";
$name[2] = "Vanja";
$name[3] = "Anya";
$name[4] = "Kosta";
echo $name[3];
echo "<br>";
//Способ создания массива №1
$arrayName = array(0 => "Sasha", "Masha", "Vanja", "Anya", "Kosta");
echo $arrayName[3];
*/
/*
//Ассоциативные массивы!!!
//Способ создания массива №1
$capital ["Russia"] = "Moskva";
$capital ["USA"] = "<br>Washengtone";
$capital ["France"] = "<br>Parise";
$capital ["Ukraine"] = "<br>Kiev";
$capital ["Italy"] = "<br>Roma";
echo $capital ["Russia"];

//Способ создания массива №2
$Population = array ("Russia" => "150", "USA" => "250", "France" => "40", "Ukraine" => "30", "Italy" => "35");

echo "<br>Capital of Russia is - ".$capital["Russia"].". <br>Население России = ".$Population["Russia"]." млн. человек.";

echo "<br>Столица России - $capital[Russia], Население России = $Population[Russia] млн. человек.";
*/
/*

//Многомерные массивы!!
$auto ["bmw"] = array("color" => "White", "year" => "2005", "pr" => "2000");
$auto ["audi"] = array("color" => "Blue", "year" => "2003", "pr" => "2200");
$auto ["nissan"] = array("color" => "Black", "year" => "2007", "pr" => "1000");
$auto ["toyota"] = array("color" => "White", "year" => "2005", "pr" => "7000");
$auto ["ferrari"] = array("color" => "Red", "year" => "2001", "pr" => "9000");


echo "BMW, color -".$auto["bmw"]['color']."<br>Ferrari, year -".$auto["ferrari"]["year"];
//Тестовая задача => Задействовать все перечисленные операции и функции с возможностью выбора машины...
*/

//----------------------Функции------------------------


function square ($a)
{
	$result = $a*$a;
	echo "Квадрат $a равен - $result";
}

$num = "12";

square($num);

//Функция вывода ссылки
function mylink ()
{
	echo "<a href='https://mail.ipcom.ua:8443'><br>Mail Ipcom</br></a>";
}

mylink();


//Функция для вывода ссылки с параметрами $link, $linkTitle
function linkWithParam($link, $linkTitle)
{
	echo "<a href='$link'><br>$linkTitle</br></a>";
}

linkWithParam('http://fbi.gov','Call FBI');



















?>

</body>
</html>