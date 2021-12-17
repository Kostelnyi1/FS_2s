<?php

//задача про выпитые литры
function howManyLiters($hours) {
    $lit = $hours * 0.5;
    echo floor($lit);
}
howManyLiters(11.8);

echo '<hr>';

//задача про повторение строк
function repeatStr($rep, $str){
    echo str_repeat($str, $rep);
}
repeatStr(6, 'O');

echo '<hr>';

//задача про вывод N-го четного числа
function even_number($n) {
    echo $n * 2 - 2;
}
even_number(100);

echo '<hr>';

//перевернутые слова
function revers_word($word){
    echo strrev($word);
}
revers_word('Word');