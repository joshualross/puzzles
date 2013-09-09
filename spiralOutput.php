<?php

for($i = size � 1 , $j = 0; $i >= 0; $i--, $j++)
{
    for(int k = j; k < i; k++)
        Console.Write(numbers[j][k]+ " ");
    for(int k = j; k < i; k++)
        Console.Write(numbers[k][i]+ " ");
    for(int k = i; k > j; k�)
        Console.Write(numbers[i][k]+ " ");
    for(int k = i; k > j; k�)
        Console.Write(numbers[k][j]+ " ");
}