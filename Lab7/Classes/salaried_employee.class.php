<?php
/**
 * Author: Jay Annadurai
 * Date: 24 Feb 2023
 * Project: I211
 * File: salaried_employee.php
 * Description: Extended from the Employee Class, represents a Salaried Employee that is paid a weekly wage
 *
 * UML:
 * (abstract) Employee
 *
 * -weekly_salary: float
 *
 * + __construct
 * +getWeeklySalary: float
 * +getPaymentAmount: float
 * +toString: void
 */

//Extends Employee Class: Salaried Employee
class SalariedEmployee extends Employee {

    //----------------------------------------------//
    //                  Properties                  //
    //----------------------------------------------//

    //Private Properties of the Salaried Employee Class
    //Weekly Salary of the Employee
    private float $weekly_salary;

    //Attains Other Properties of the Employee Class through the Constructor


    //----------------------------------------------//
    //                  Constructor                 //
    //----------------------------------------------//

    //Employee Class Constructor
    public function __construct($firstName,$lastName,$ssn,$weeklySalary) {

        //Use the Parent Constructor from Employee
        //Processes First Name, Last Name, and SSN
        parent::__construct($firstName,$lastName,$ssn);

        //Store Employee's Weekly Salary
        $this->weekly_salary = $weeklySalary;

    }//End of Constructor

    //----------------------------------------------//
    //                    Methods                   //
    //----------------------------------------------//

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void
    {
        //Call the toString Method of the Parent Employee Class
        parent::toString();

        //Echo the Employee's Weekly Salary
        echo "Weekly Salary: ".$this->getWeeklySalary()."<br>";

        //Echo the Employee's Earnings
        echo "Earnings: ".$this->getPaymentAmount()."<br>";

    }//End of Signature toString Method


    //----------------------------------------------//
    //                    Getters                   //
    //----------------------------------------------//

    /**
     * @return float Salaried Employee's Weekly Salary
     */
    public function getWeeklySalary(): float
    {
        return $this->weekly_salary;
    }

    /**
     * @return float Salaried Employee's Total Payment
     */
    public function getPaymentAmount(): float
    {
        //Redundant in the Case of Salaried Employee
        return $this->weekly_salary;
    }


}//End of Salaried Employee Class


?>
