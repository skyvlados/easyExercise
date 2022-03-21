<?php

class Task2WeightTwoBoxers
{
    private float $weightFirstBoxer;
    private float $weightSecondBoxer;

    public function __construct(float $weightFirstBoxer,float $weightSecondBoxer)
    {
        $this->weightFirstBoxer=$weightFirstBoxer;
        $this->weightSecondBoxer=$weightSecondBoxer;
    }

    public function getSumWeights()
    {
        return $this->weightFirstBoxer+$this->weightSecondBoxer;
    }
    public function getSubstructionWeights()
    {
        return abs($this->weightFirstBoxer-$this->weightSecondBoxer);
    }
}

class Task3SportBreakfast
{
    private int $countBananas;
    private int $weighBananas;
    private int $weighMilk;
    private int $countIceCream;
    private int $weighIceCream;
    private int $weighEggs;
    private int $countEggs;

    public function __construct(int $countBananas, int $weighBananas, int $weighMilk, int $countIceCream,
                                int $weighIceCream, int $weighEggs, int $countEggs)
    {
        $this->countBananas = $countBananas;
        $this->weighBananas = $weighBananas;
        $this->weighMilk = $weighMilk;
        $this->countIceCream = $countIceCream;
        $this->weighIceCream = $weighIceCream;
        $this->weighEggs = $weighEggs;
        $this->countEggs = $countEggs;
    }

    public function getGeneralWeigh()
    {
        return $sum=$this->countBananas*$this->weighBananas+$this->weighMilk*1.05+$this->weighIceCream*$this->countIceCream+
            $this->countEggs*$this->weighEggs;
    }

}

class Task4LoseWeight
{
    private int $needLoseWeightKg;
    private int $needLoseWeightDailyG;

    public function __construct(int $needLoseWeightKg, int $needLoseWeightDailyG)
    {
        $this->needLoseWeightKg = $needLoseWeightKg;
        $this->needLoseWeightDailyG = $needLoseWeightDailyG;
    }

    public function getCountDays()
    {
        return $this->needLoseWeightKg*1000/$this->needLoseWeightDailyG;
    }

}

class Task5Salary
{
    private int $salary;

    public function __construct(int $salary)
    {
        $this->salary = $salary;
    }

    public function getNewSalary()
    {
        return $this->salary+$this->salary*0.1;
    }

    public function getDifferent()
    {
        return $this->getNewSalary()-$this->salary;
    }

}

class Task6Invert
{
    private int $a=12;
    private int $b=27;
    private int $c=44;
    private int $d=15;
    private int $e=9;
    private int $result;

    public function getInvert()
    {
        return ($this->result=$this->a * ($this->b + ($this->c - $this->d * $this->e)))*(-1);
    }
}

class Task7ChangeVariable
{
    private int $a;
    private int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getChangeVariable()
    {
        $this->a=$this->a+$this->b;
        $this->b=$this->a-$this->b;
        $this->a=$this->a-$this->b;
        echo $this->a." and ".$this->b."\n";
    }

}

class Task8MiddleSymbol
{
    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function getMiddleSymbol()
    {
        return ($this->number%100-$this->number%10)/10;
    }
}
$task2=new Task2WeightTwoBoxers(78.2,82.7);
echo "Task2:\n";
echo $task2->getSumWeights()." kg\n";
echo $task2->getSubstructionWeights()." kg\n";
$task3=new Task3SportBreakfast(5,80,200,2,100,4,
    70);
echo "Task3:\n";
echo $task3->getGeneralWeigh()." g\n";
echo ($task3->getGeneralWeigh()/1000)." kg\n";
$task4=new Task4LoseWeight(7,250);
echo "Task4:\n";
echo $task4->getCountDays()." days\n";
echo "Task5:\n";
$task5=new Task5Salary(67760);
echo "Маша теперь получает ".$task5->getNewSalary()." рублей. Годовой доход вырос на ".$task5->getDifferent()." рублей.\n";
$task5=new Task5Salary(83690);
echo "Денис теперь получает ".$task5->getNewSalary()." рублей. Годовой доход вырос на ".$task5->getDifferent()." рублей.\n";
$task5=new Task5Salary(76230);
echo "Кристина теперь получает ".$task5->getNewSalary()." рублей. Годовой доход вырос на ".$task5->getDifferent()." рублей.\n";
echo "Task6:\n";
$task6=new Task6Invert();
echo $task6->getInvert()."\n";
echo "Task7:\n";
$task7=new Task7ChangeVariable(5,7);
$task7->getChangeVariable();
echo "Task8:\n";
$task8=new Task8MiddleSymbol(123);
echo $task8->getMiddleSymbol()."\n";
