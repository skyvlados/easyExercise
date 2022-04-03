<?php

/*
Дан массив из n - элементов от 1 до 100 в произвольном порядке с пропущенными значениями и цифры не повторяются.
Выполните 3 задания.
1. Получить из массива все четные числа.
2. Получить пропущенные цифры.
3. Получить все элементы отсортированные по возрастанию.
*/

class ArrayTask
{
    private array $items;
    public function __construct(int $n)
    {
        $this->items=$this->generateArray($n);
    }

    private function generateArray(int $n):array
    {
        return [];
    }

    public function getEvenNumbers():array
    {
        return [];
    }

    public function getMissNumbers():array
    {
        return [];
    }

    public function getSortedNumbers():array
    {
        return [];
    }
}
$task=new ArrayTask(5);
$task->getEvenNumbers();