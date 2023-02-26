<?php
/**
 * Author: Jay Annadurai
 * Date: 24 Feb 2023
 * Project: I211
 * File: salaried_employee.php
 * Description: Extended from the Employee Class, represents a Salaried Employee that is paid a weekly wage
 *
 * UML:
 * (abstract) SalariedEmployee
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

    /**
     * Signature and Polymorphic Method of the Salaried Employee Class
     * @return float Salaried Employee's Total Payment
     * Option to print in natural language as a formatted decimal in $ or return as a float
     */
    public function getPaymentAmount($naturalLang = false): float
    {
        //Bind Value as Payment Amount: Weekly Salary
        $value = $this->getWeeklySalary();

        //Use Natural Language Function of Employee to Determine Printed Value
        return Employee::nlUSD($value,$naturalLang);

    }//End of getPaymentAmount Function that represents the Employee's Total Earnings

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void
    {
        //Call the toString Method of the Parent Employee Class
        parent::toString();

        //Echo the Employee's Weekly Salary in $
        echo "Weekly Salary: ".$this->getWeeklySalary(true)."<br>";

        //Echo the Employee's Earnings in $
        echo "Earnings: ".$this->getPaymentAmount(true)."<br>";

    }//End of Signature toString Method


    //----------------------------------------------//
    //                    Getters                   //
    //----------------------------------------------//

    /**
     * @return float Salaried Employee's Weekly Salary
     * Option to print in natural language as a formatted decimal in $ or return as a float
     */
    public function getWeeklySalary($naturalLang = false): float
    {
        //Bind the Value
        $value = $this->weekly_salary;

        //Use Natural Language Function of Employee to Determine Printed Value
        return Employee::nlUSD($value,$naturalLang);
    }



}//End of Salaried Employee Class


?>
