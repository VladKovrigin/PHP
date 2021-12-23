<?php

//Дана строка. Если она начинается на 'abc', то заменить
// их на 'www', иначе добавить в конец строки 'zzz'.
$string = "abcedfrgtbhn";
if( str_starts_with($string, 'abc') ) {
    $string = str_replace( 'abc', 'www',$string);
} else {
    $string .= 'zzz';
}
echo "<br/>",$string;


//Дана строка. Если ее длина больше 10, то оставить в
// строке только первые 6 символов, иначе дополнить
// строку символами 'o' до длины 12.
$secondString = 'qwertyuiwsdcfvgb';

if( strlen($secondString) > 10 ) {
    $secondString = mb_strimwidth($secondString, 0, 6);
} else {
    while( strlen($secondString) < 12 ) {
        $secondString .= 'o';
    }
}
echo "<br/>",$secondString;


//В данной строке найти количество цифр.
$thirdString = 'sd 23 d 34f f54';
echo "<br/>", preg_match_all( "/[0-9]/", $thirdString );


//Замените в строке все вхождения 'word' на 'letter'.
$fourthString = "word edfcv edfcr word edf";

$fourthString = str_replace('word', 'letter', $fourthString);
echo "<br/>", $fourthString;


//Удалите в строке все буквы 'x', за которыми следует 'abc'.
$fifthString = 'xabcedfrvgxabc';
$fifthString = str_replace('xabc', 'abc', $fifthString);

echo "<br/>", $fifthString;


//Найдите количество вхождения 'aba' в строку.
$sixthString = 'aba edwrevrfv aba eedf aba';
$count = substr_count($sixthString, 'aba', 0, strlen($sixthString));
echo "<br/>", $count;


//Дана строка. Преобразовать все символы кроме первого в нижний регистр.
$seventhString = 'FdfgHHJKdfHJff';

$firstLetter = $seventhString[0];
$secondString = substr($seventhString, 1, strlen($seventhString));
$secondString = mb_strtolower($secondString);
$seventhString = $firstLetter.$secondString;

echo "<br/>", $seventhString;


//Дана строка с ФИО в формате "Фамилия Имя Отчество".
// Вывести на экран сокращенную форму (Фамилия И.О.)
$userNames = 'Фамилия Имя Отчество';

$userNames = explode(' ', $userNames);
$name = substr($userNames[1], 0, 2).'.';
$patronymic = substr($userNames[2], 0, 2).'.';

echo "<br/>", $userNames[0],' ', $name, $patronymic;


//Выведите  10 раз фразу "You are welcome!"
for($i = 0; $i < 9; $i++) {
    echo "<br/>","You are welcome!";
}

//Найти сумму  1+4+7+10+...+112. Ответ: 2147
$result = 0;
for($i = 1; $i <= 112; $i += 3) {
    $result += $i;
}
echo "<br/>", $result, "<br/>";

//Вывести все числа, меньшие 10000, у которых есть
// хотя бы одна цифра 3 и которые не делятся на 5.
for($i = 1; $i <=10000; $i++) {
    if(strripos(strval($i), '3') && $i % 5 !== 5) {
        echo $i.',';
    }
    if($i % 1000 === 0) {
        echo "\n";
    }
}

//Вывести 3 случайных числа от 0 до 100 без повторений.
$randNums = [];
$i = 0;
while($i <= 2) {
    $thisNum = rand(0, 10);
    if (!in_array($thisNum, $randNums)) {
        $randNums[] = $thisNum;
        $i++;
    }
}
echo "<br/>", $randNums[0];
echo "<br/>", $randNums[1];
echo "<br/>", $randNums[2];

// Вывести на экран все шестизначные счастливые билеты.
// Билет называется счастливым, если сумма первых трех цифр
// в номере билета равна сумме последних трех цифр. Найдите
// количество счастливых билетов и процент от общего числа билетов.
echo "<br/>";
$count = 0;
for($i = 000; $i <= 999; $i++) {
    for ($j = 000; $j <= 999; $j++) {
        if(array_sum(str_split($i)) === array_sum(str_split($j))) {
            $count++;
        }
    }
}
echo "<br/>", $count;
echo "<br/>", $count / 10000000;


//Определите, есть ли в массиве повторяющиеся элементы.
$myArray = [234,1,2345,65,654,3451234567890,487,4567, 234];
echo "<br/>", (boolean)(count(array_unique($myArray)) !== count($myArray));


//Поменять местами наибольший и наименьший элементы массива
$max = array_search(max($myArray), $myArray);

$min = array_search(min($myArray), $myArray);
$temple = $myArray[$min];
$myArray[$min] = $myArray[$max];
$myArray[$max] = $temple;

echo "<br/>";
foreach ($myArray as $item) {
    echo $item.', ';
}


//Удалите в массиве повторы значений. Например, для массива
// 1 2 4 4 2 5 результатом будет 1 2 4 5
$newArray = array_unique($myArray);
echo "<br/>";
foreach ($newArray as $item) {
    echo $item.', ';
}


//Даны два упорядоченных по возрастанию массива. Образовать
// из этих двух массивов единый упорядоченный по возрастанию массив.
sort($myArray);
$secondArray = [23, 65, 356, 74, 245, 75, 2, 76, 245, 865];
$result = array_merge($myArray, $secondArray);
sort($result);

echo "<br/>";
foreach ($result as $item) {
    echo $item.', ';
}


//Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'. Пусть
// первый ключ содержит элемент, являющийся массивом названий дней недели
// по-русски, а второй - по-английски. Выведите с помощью этого массива
// понедельник по-русски и среду на английском (пусть понедельник - это первый день).

$week = [
    'ru' => ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'],
    'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
];
echo "<br/>", $week['ru'][0], ', ', $week['en'][2];


//Дан массив с числами от 1 до 9, с помощью цикла выведите на экран элементы массива в таком виде
//1, 2, 3
//4, 5, 6
//7, 8, 9
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

for($i = 0; $i < 8; $i++) {
    echo "<br/>", $numbers[$i].', ', $numbers[++$i].', ', $numbers[++$i];
}

//создать массив из 10 чисел и создать переменную с номером элемента
//сделать алгоритм, который меняет нулевой и заданный в переменной элемент массива, например:
//$arr = [4,7,1];
//$index = 2;
//результат выполнения функции: [1,7,4];
//добавить проверки на наличие заданного индекса в массиве
$thirdArray = [11, 22, 33, 44, 55, 66, 77, 88, 99];
$index = 4;
if(count($thirdArray) > $index) {
    $tmp = $thirdArray[$index];
    $thirdArray[$index] = $thirdArray[0];
    $thirdArray[0] = $tmp;
}

echo "<br/>";
foreach ($thirdArray as $item) {
    echo $item.', ';
}
