<?php

class Task1OS
{
    private int $clientOs;
    private string $returnOs;

    public function __construct(int $clientOs)
    {
        $this->clientOs = $clientOs;
    }

    public function getOS()
    {
        if ($this->clientOs === 1) {
            $this->returnOs = "Android";
            return $this->returnOs;
        }
        if ($this->clientOs===0) {
            $this->returnOs = "iOS";
            return $this->returnOs;
        }
    }

}

class Task2ClientOsWithYear
{
    private int $clientOs;
    private string $returnOs;
    private int $clientDeviceYear;

    public function __construct(int $clientOs, int $clientDeviceYear)
    {
        $this->clientOs = $clientOs;
        $this->clientDeviceYear = $clientDeviceYear;
    }

    public function getMessage()
    {
        if ($this->clientOs === 1) {
            $this->returnOs = "Android";
            if ($this->clientDeviceYear < 2019) {
                echo "Установите lite-версию приложения для ".$this->returnOs." по ссылке";
            } else {
                echo "Установите версию приложения для ".$this->returnOs." по ссылке.";
            }
        }
        if ($this->clientOs===0) {
            $this->returnOs = "iOS";
            if ($this->clientDeviceYear < 2019) {
                echo "Установите lite-версию приложения для ".$this->returnOs." по ссылке";
            } else {
                echo "Установите версию приложения для ".$this->returnOs." по ссылке.";
            }
        }
    }
}

class Task3LeapYear
{
    private int $year;

    public function __construct(int $year)
    {
        $this->year = $year;
    }

    public function getMessage()
    {
        if ($this->year % 4 === 0 && ($this->year%100!=0 || $this->year%400===0)) {
            echo $this->year." - год является високосным\n";
        } else {
            echo $this->year." - год не является високосным\n";
        }
    }
}

class Task4Delivery
{
    private int $deliveryDistance;
    private int $countDays=0;

    public function __construct(int $deliveryDistance)
    {
        $this->deliveryDistance = $deliveryDistance;
    }

    public function getCountDays()
    {
        if ($this->deliveryDistance<20) {
            $this->countDays+=1;
        }
        if ($this->deliveryDistance >= 20 && $this->deliveryDistance < 60) {
            $this->countDays+=2;
        }
        if ($this->deliveryDistance >= 60) {
            $this->countDays+=3;
        }
        return $this->countDays;
    }

}

class Task5Month
{
    private int $monthNumber;

    public function __construct(int $monthNumber)
    {
        $this->monthNumber = $monthNumber;
    }


    public function getMonth()
    {
        switch ($this->monthNumber) {
            case 1:
                echo "Январь";
                break;
            case 2:
                echo "Февраль";
                break;
            case 3:
                echo "Март";
                break;
            case 4:
                echo "Апрель";
                break;
            case 5:
                echo "Май";
                break;
            case 6:
                echo "Июнь";
                break;
            case 7:
                echo "Июль";
                break;
            case 8:
                echo "Август";
                break;
            case 9:
                echo "Сентябрь";
                break;
            case 10:
                echo "Октябрь";
                break;
            case 11:
                echo "Ноябрь";
                break;
            case 12:
                echo "Декабрь";
                break;
        }
    }
}
$task1=new Task1OS(0);
echo "Task1:\n";
echo "Установите версию приложения для ".$task1->getOS()." по ссылке.\n";
$task2=new Task2ClientOsWithYear(0,2018);
echo "Task2:\n";
$task2->getMessage();
$task3=new Task3LeapYear(2100);
echo "Task3:\n";
$task3->getMessage();
echo "Task4:\n";
$task4=new Task4Delivery(5);
echo "Доставка займет ".$task4->getCountDays()." дня.\n";
echo "Task5:\n";
$task5=new Task5Month(9);
$task5->getMonth()."\n";
