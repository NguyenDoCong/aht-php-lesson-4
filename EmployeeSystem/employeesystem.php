<?php

abstract class Employee
{
    protected $name;
    protected $salary;
    protected $bonus;
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    public abstract function calculateBonus();
}

interface Workable
{
    function work();
}

class Manager extends Employee implements Workable
{
    public function calculateBonus()
    {
        $this->bonus = $this->salary * 0.2;
        return $this->bonus;
    }
    public function work()
    {
        return "Quản lý dự án";
    }
}

class Developer extends Employee implements Workable
{
    public function calculateBonus()
    {
        $this->bonus = $this->salary * 0.1;
        return $this->bonus;
    }
    public function work()
    {
        return "Lập trình";
    }
}

class Designer extends Employee implements Workable
{
    public function calculateBonus()
    {
        $this->bonus = $this->salary * 0.15;
        return $this->bonus;
    }
    public function work()
    {
        return "Thiết kế giao diện";
    }
}

$newManager = new Manager("T", 3000);
$newDeveloper = new Developer("H", 1500);
$newDesigner = new Designer("C", 200);
$employees = [$newManager, $newDeveloper, $newDesigner];
foreach ($employees as $employee) {
    echo "Công việc: " . $employee->work() . "\n";
    echo "Thưởng: " . $employee->calculateBonus() . "\n";
}
