# lucky-number
Проверка числа на счастливое

``` php
use DimAl\\LuckyNumber\\LuckyNumberChecker as L;
$c = new L();
$c->isLuckyNumber(11);
```




## Счастливое число
*Материал из Википедии — свободной энциклопедии*

В теории чисел **счастливым числом** называется число, которое в конечном итоге достигает 1 при замене суммой квадратов каждой цифры. Например, 13 - счастливое число, потому что
``` 
1^2 + 3^2 = 10 
1^2 + 0^2 = 1
```
С другой стороны, 4 не является счастливым числом, потому что последовательность начинается с
```
 4^2 = 16 
```
и 
```
1^2 + 6^2 = 37 
```
в конечном итоге достигает 
```
2^2 + 0^2 = 4 
```
 числа, с которого началась последовательность, и поэтому процесс продолжается в бесконечном цикле, никогда не достигая 1. Число, которое не радует, называется **грустным** или **несчастным**.

