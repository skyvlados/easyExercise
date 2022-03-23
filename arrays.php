<?php

class RandomArray
{
    private int $i=0;
    public array $numbers;

    public function getArray()
    {
        while ($this->i < 30) {
            $this->numbers[$this->i] = rand(100_000, 200_000);
            $this->i++;
        }
        return $this->numbers;
    }
}

class Task1Sum
{
    private int $sum=0;
    private int $i=0;
    public function getSum(array $array)
    {
        for (; $this->i < count($array); $this->i++) {
            $this->sum+=$array[$this->i];
        }
        return $this->sum;

    }

}

class Task2MinMaxResult
{
    private int $minResult=1_000_000_000;
    private int $maxResult=0;
    public function getMinResult(array $array)
    {
        foreach ($array as $item) {
            if ($item < $this->minResult) {
                $this->minResult = $item;
            }
        }
        return $this->minResult;
    }

    public function getMaxResult(array $array)
    {
        foreach ($array as $item) {
            if ($item > $this->maxResult) {
                $this->maxResult=$item;
            }
        }
        return $this->maxResult;
    }
}

class Task3AverageResult
{
    private float $averageResult=0;

    public function getAverageResult(array $array): float
    {
        foreach ($array as $item) {
            $this->averageResult+=$item;
        }
        $this->averageResult = $this->averageResult / count($array);
        return $this->averageResult;
    }
}

class Task4Reverse
{
    private array $reverseFullName;

    public function getRevert()
    {
        $this->reverseFullName=array('n', 'a', 'v', 'I', ' ', 'v', 'o', 'n', 'a', 'v', 'I');
        for ($i = count($this->reverseFullName)-1; $i >= 0; $i--) {
            echo $this->reverseFullName[$i];
        }
    }
}

class Task5Matrix
{
    private int $widthAndHeight;

    public function __construct(int $widthAndHeight)
    {
        $this->widthAndHeight = $widthAndHeight;
    }

    public function getMatrix()
    {
        for ($i = 0; $i<$this->widthAndHeight; $i++) {
            echo "\n";
            for ($j = 0; $j<$this->widthAndHeight; $j++) {
                if ($i === $j || $j===$this->widthAndHeight-1-$i) {
                    echo "1 ";
                }else{
                    echo "0 ";
                }
            }
        }
    }
}

class Task6RevertMassive
{
    private array $revertArray=array();
    public function getRevertMassive(array $array): array
    {
        $j=0;
        for ($i = count($array) - 1; $i >= 0; $i--) {
            $this->revertArray[$j] = $array[$i];
            $j++;
        }
        return $this->revertArray;
    }
}

class Task7RevertMassive
{
    public function getRevertMassive(array $array): array
    {
        $j=0;
        for ($i = count($array) - 1; $i >= count($array)/2; $i--) {
                $array[$j] = $array[$i] + $array[$j];
                $array[$i] = $array[$j] - $array[$i];
                $array[$j] = $array[$j] - $array[$i];
                $j++;
        }
        return $array;
    }
}
class Task8findTwoNumber
{
    private int $whatSum;

    public function __construct(int $whatSum)
    {
        $this->whatSum = $whatSum;
    }

    public function getTwoNumber(array $array)
    {
        for ($i = 0; $i < count($array) - 1; $i++) {
            for ($j = $i+1; $j < count($array); $j++) {
                if ($array[$i] + $array[$j]===$this->whatSum) {
                    echo "Сумма ".$array[$i]." и ".$array[$j]." равна ".$this->whatSum."\n";
                }
            }
        }
        return $array;
    }
}
class TaskSortMassive
{
    public function getSortMassive(array $array)
    {
        for ($i = 0; $i < count($array) - 1; $i++) {
            for ($j = $i+1; $j < count($array); $j++) {
                if ($array[$i] > $array[$j]) {
                    $array[$i] = $array[$i] + $array[$j];
                    $array[$j] = $array[$i] - $array[$j];
                    $array[$i] = $array[$i] - $array[$j];
                }
            }
        }
        return $array;
    }
}
$array=new RandomArray();
print_r($array->getArray());
echo "Task1:\n";
$task1=new Task1Sum();
echo "Сумма трат за месяц составила ".$task1->getSum($array->getArray())." рублей.\n";
echo "Task2:\n";
$task2=new Task2MinMaxResult();
echo "Минимальная сумма трат за день составила ".$task2->getMinResult($array->getArray())." рублей\n";
echo "Максимальная сумма трат за день составила ".$task2->getMaxResult($array->getArray())." рублей\n";
echo "Task3:\n";
$task3=new Task3AverageResult();
echo "Средняя сумма трат за месяц составила ".$task3->getAverageResult($array->getArray())." рублей\n";
echo "Task4:\n";
$task4=new Task4Reverse();
$task4->getRevert();
echo "\nTask5:\n";
$task5=new Task5Matrix(5);
$task5->getMatrix();
echo "\nTask6:\n";
$withoutRevertMassive=array(5, 8, 2, 3, 9, 9);
echo "Массив до преобразования:\n";
foreach ($withoutRevertMassive as $item) {
    echo $item." ";
}
echo "\nМассив после преобразования:\n";
$task6=new Task6RevertMassive();
foreach ($task6->getRevertMassive($withoutRevertMassive) as $item) {
    echo $item." ";
}
echo "\nTask7:\n";
echo "Массив до преобразования:\n";
foreach ($withoutRevertMassive as $item) {
    echo $item." ";
}
echo "\nМассив после преобразования:\n";
$task7=new Task7RevertMassive();
foreach ($task7->getRevertMassive($withoutRevertMassive) as $item) {
    echo $item." ";
}
echo "\nTask8:\n";
$task8 = new Task8findTwoNumber(-2);
echo "Массив:\n";
$massive=array(-6, 2, 5, -8, 8, 10, 4, -7, 12, 1);
foreach ($massive as $item) {
    echo $item." ";
}
echo "git \n";
$task8->getTwoNumber($massive);

echo "\nTaskSort:\n";
$withoutSortMassive=array(9,7,8,5,6,2,1);

echo "Массив до преобразования:\n";
foreach ($withoutSortMassive as $item) {
    echo $item." ";
}
echo "\nМассив после преобразования:\n";
$task=new TaskSortMassive();
foreach ($task->getSortMassive($withoutSortMassive) as $item) {
    echo $item." ";
}
