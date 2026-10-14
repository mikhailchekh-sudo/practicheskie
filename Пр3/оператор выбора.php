<h1>Практическая работа - оператор выбора</h1>
<?php
echo "<h2>Задание 1<h2>";
$digit = 5;
switch ($digit){
    case 0: echo "zero"; break;
    case 1: echo "one"; break;
    case 2: echo "two"; break;
    case 3: echo "three"; break;
    case 4: echo "four"; break;
    case 5: echo "fife"; break;
    case 6: echo  "six"; break;
    case 7: echo "seven"; break;
    case 8: echo "eight"; break;
    case 9: echo "nine"; break;
    default: echo "введено не число от 1 до 9";
} 
?>

<?php
echo "<h2>Задание 2<h2>";
$moonth = 10;
switch ($moonth) {
    case 1: echo "1 января - Новый год, 7 января - Рождество"; break;
    case 2: echo "23 февраля - день защитника отечества"; break;
    case 3: echo "8 марта - Международный женский день"; break;
    case 4: echo "12 апреля - день космонавтики"; break;
    case 5: echo "1 мая - праздник весны и труда"; break;
    case 6: echo "12 июня - день России"; break;
    case 7: echo "8 июля - день семьи"; break;
    case 8: echo "2 августа - день ВДВ"; break;
    case 9: echo "1 сентября - день знаний"; break;
    case 10: echo "5 октября - день учителя"; break;
    case 11: echo "4 ноября - день народного единства"; break;
    case 12: echo "12 декабря - день Конституции"; break;
}
?>

<?php
echo "<h2>Задание 3<h2>";

$number = 12;
$lastDigit = $number % 10;
$sguare  = $number ** 2;
$lastDigitOFSquare = $sguare % 10;
switch ($lastDigit) {
    case 0:
        echo "Последняя цифра квадрата : 0";
        break;
    case 1: case 9:
        echo "Последняя цифра квадрата : 1";
        break;
    case 2: case 8:
        echo "Последняя цифра квадрата : 4";
        break;
    case 3: case 7:
        echo "Последняя цифра квадрата : 9";
        break;
    case 4: case 6:
        echo "Последняя цифра квадрата : 6";
        break;
    case 5:
        echo "Последняя цифра квадрата : 5";
        break;
    default:
        echo "Ошибка";
}
?>

<?php
echo "<h2>Задание 4<h2>";
$age = 100;



