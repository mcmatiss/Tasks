<?php
//Foo Corporation needs a program to calculate how much to pay their hourly employees.
//The US Department of Labor requires that employees get paid time and a half for any hours over 40 that
//they work in a single week. For example, if an employee works 45 hours, they get 5 hours of overtime, at
//1.5 times their base pay. The State of Massachusetts requires that hourly employees be paid at least $8.00 an hour.
//Foo Corp requires that an employee not work more than 60 hours in a week.
//
//An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
//For every hour over 40, they get overtime = (base pay) × 1.5.
//The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
//If the number of hours is greater than 60, print an error message.
//
//Write a method that takes the base pay and hours worked as parameters, and prints the total pay or an error.
//Write a main method that calls this method for each of these employees:
class Employee {
    public int $basePayInDollars;
    public int $hoursWorked;

    function set_basePayInDollars($basePayInDollars) {
        $this->basePayInDollars = $basePayInDollars;
    }
    function set_hoursWorked($hoursWorked) {
        $this->hoursWorked = $hoursWorked;
    }
    function get_basePayInDollars(): int {
        return $this->basePayInDollars;
    }
    function get_hoursWorked(): int {
        return $this->hoursWorked;
    }
    function get_totalPay(int $hoursWorked, int $basePayInDollars): string {
        if ($basePayInDollars < 8) {
            return "Error! The base pay must not be less than the minimum wage ($8.00 an hour).";
        } elseif ($hoursWorked >= 60) {
            return "Error! The number of hours is greater than 60.";
        } elseif ($hoursWorked <= 40) {
            return '$' . $hoursWorked * $basePayInDollars;
        } else {
            return '$' . ((40 * $basePayInDollars) + ($hoursWorked - 40) * $basePayInDollars * 1.5);
        }
    }
    function get_totalPayAllEmployees(): string
    {
        return $this->get_totalPay($this->get_hoursWorked(), $this->get_basePayInDollars());
    }
}
$Employee1 = new Employee();
$Employee1->set_basePayInDollars(7.50);
$Employee1->set_hoursWorked(35);
$Employee2 = new Employee();
$Employee2->set_basePayInDollars(8.20);
$Employee2->set_hoursWorked(47);
$Employee3 = new Employee();
$Employee3->set_basePayInDollars(10.00);
$Employee3->set_hoursWorked(73);

$employees = [$Employee1, $Employee2, $Employee3];
foreach ($employees as $employee) {
    echo $employee->get_totalPayAllEmployees() . PHP_EOL;
}