<?php

class Task1Numbers
{
    public function getNumbersIncrease()
    {
        $i=1;
        while ($i<=10){
            echo $i . " ";
            $i++;
        }
    }
    public function getNumbersDecrease()
    {
        $i=10;
        while ($i >= 1) {
            echo $i . " ";
            $i--;
        }
    }
}

class Task2Fridays
{
    private int $firstFridayByMonth;

    public function __construct(int $firstFridayByMonth)
    {
        $this->firstFridayByMonth=$firstFridayByMonth;
    }

    public function getFridays()
    {
        while ($this->firstFridayByMonth <= 31) {
            echo "Сегодня пятница, ".$this->firstFridayByMonth."-ое число. Необходимо подготовить отчет.\n";
            $this->firstFridayByMonth+=7;
        }
    }
}

class Task3Comet
{
    private int $baseYear=2021;
    private int $futurePeriod=100;
    private int $backPeriod=200;

    public function getYears()
    {
        for($this->baseYear=2021-200;$this->baseYear<=2021+100;$this->baseYear++){
//        for ($this->baseYear=(($this->baseYear)-($this->backPeriod));($this->baseYear)<=(($this->baseYear)+($this->futurePeriod))
//        ;$this->baseYear++){
            if ($this->baseYear % 79 === 0) {
                echo $this->baseYear."\n";
            }
        }
    }

}

class Task4PingPong
{
    private int $i=1;

    public function getMessage()
    {
        while ($this->i <= 30) {
            if ($this->i%5 === 0 && $this->i%3 === 0) {
                echo $this->i . ": ping pong\n";
            } elseif ($this->i % 5 === 0) {
                echo $this->i . ": pong\n";
            } elseif ($this->i%3 === 0) {
                echo $this->i . ": ping\n";
            } else {
                echo $this->i.":\n";
            }
            $this->i++;
        }
    }
}

class Task5Fibbonachy
{
    private int $i=1;
    private int $first=0;
    private int $second=1;
    private int $nextNumber;

    public function getFibbonachy()
    {
        while ($this->i <= 10) {
            $this->nextNumber=$this->first+$this->second;
            echo $this->first." ";
            $this->first=$this->second;
            $this->second=$this->nextNumber;
            $this->i++;
        }
    }
}
echo "Task1:\n";
$task1 = new Task1Numbers();
echo $task1->getNumbersIncrease()."\n";
echo $task1->getNumbersDecrease()."\n";
echo "Task2:\n";
$task2 = new Task2Fridays(7);
echo $task2->getFridays();
echo "Task3:\n";
$task3 = new Task3Comet();
echo $task3->getYears();
echo "Task4:\n";
$task4 = new Task4PingPong();
$task4->getMessage();
echo "Task5:\n";
$task5 = new Task5Fibbonachy();
$task5->getFibbonachy();