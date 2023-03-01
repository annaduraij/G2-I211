<?php
/**
 * Author: Jay Annadurai
 * Date: 24 Feb 2023
 * Project: I211
 * File: salaried_employee.php
 * Description: Extended from the Employee Class, represents a Salaried Employee that is paid a weekly wage
 *
 * UML:
 * SalariedEmployee
 * ----------------------------
 * -weekly_salary: float
 * ----------------------------
 * + __construct
 * +getWeeklySalary: float
 * +getPaymentAmount: float
 * +toString: void
 * ----------------------------
 */

//Extends Employee Class: Salaried Employee
//An Employee that is Paid a Fixed Salary
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
    public function __construct(string $firstName,string $lastName,string $ssn, float $weeklySalary) {

        //Use the Parent Constructor from Employee
        //Processes First Name, Last Name, and SSN
        parent::__construct($firstName,$lastName,$ssn);

        //Store Employee's Weekly Salary
        $this->weekly_salary = $weeklySalary;

    }//End of Constructor

    //----------------------------------------------//
    //                    Methods                   //
    //----------------------------------------------//

    /**
     * Signature and Polymorphic Method of the Salaried Employee Class
     * @return float Salaried Employee's Total Payment

     */
    public function getPaymentAmount(): float
    {
        //Bind Value as Payment Amount: Weekly Salary
        //Return the Value
        return $this->getWeeklySalary();

    }//End of getPaymentAmount Function that represents the Employee's Total Earnings

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void
    {
        //Call the toString Method of the Parent Employee Class
        parent::toString();

        //Echo the Employee's Weekly Salary in $
        echo "Weekly Salary: $".number_format($this->getWeeklySalary( ),2)."<br>";

        //Echo the Employee's Earnings in $
        echo "Earnings: $".number_format($this->getPaymentAmount( ),2)."<br>";

    }//End of Signature toString Method


    //----------------------------------------------//
    //                    Getters                   //
    //----------------------------------------------//

    /**
     * @return float Salaried Employee's Weekly Salary

     */
    public function getWeeklySalary(): float
    {
        //Bind the Value
        //Return the Value
        return $this->weekly_salary;
    }



}//End of Salaried Employee Class


?>
