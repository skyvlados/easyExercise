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