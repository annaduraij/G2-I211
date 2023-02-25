<?php
/**
 * Author: Jay Annadurai
 * Date: 24 Feb 2023
 * Project: I211
 * File: salaried_employee.php
 * Description: Extended from the Employee Class, represents an Hourly Employee
 *
 * UML:
 * (abstract) HourlyEmployee
 *
 * -wage: float
 * -hours: integer
 *
 * + __construct
 * +getWage: float
 * +getHours: integer
 * +getPaymentAmount: float
 * +toString: void
 */

//Extends Employee Class: Salaried Employee
class SalariedEmployee extends Employee {

    //----------------------------------------------//
    //                  Properties                  //
    //----------------------------------------------//

    //Private Properties of the Salaried Employee Class
    //Hourly Rate in $ of the Employee
    private float $wage;

    //Quantity of Hours worked by the Employee
    private int $hours;

    //Attains Other Properties of the Employee Class through the Constructor


    //----------------------------------------------//
    //                  Constructor                 //
    //----------------------------------------------//

    //Employee Class Constructor
    public function __construct($firstName,$lastName,$ssn,$wage,$hoursWorked) {

        //Use the Parent Constructor from Employee
        //Processes First Name, Last Name, and SSN
        parent::__construct($firstName,$lastName,$ssn);

        //Store Employee's Hourly Rate
        $this->wage = $wage;

        //Store Employee's Hours Worked
        $this->hours = $hoursWorked;

    }//End of Constructor

    //----------------------------------------------//
    //                    Methods                   //
    //----------------------------------------------//

    /**
     * Signature Method of the Hourly Employee Class
     * @return float Hourly Employee's Total Payment in $
     */
    public function getPaymentAmount(): float
    {
        //Redundant in the Case of Salaried Employee
        //Payment Amount: wage x hours
        return ($this->getWage())*($this->getHours());
    }

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void
    {
        //Call the toString Method of the Parent Employee Class
        parent::toString();

        //Echo the Employee's Wage in $
        echo "Wage: $".number_format($this->getWage())."<br>";

        //Echo the Employee's Working Hours
        echo "Hours: ".number_format($this->getHours())."<br>";

        //Echo the Employee's Earnings in $
        echo "Earnings: $".number_format($this->getPaymentAmount(),2)."<br>";

    }//End of Signature toString Method


    //----------------------------------------------//
    //                    Getters                   //
    //----------------------------------------------//

    /**
     * @return float Hourly Employment's Hourly Wage in $
     */
    public function getWage(): float
    {
        return $this->wage;
    }

    /**
     * @return int Hourly Employment's Number of Hours
     */
    public function getHours(): int
    {
        return $this->hours;
    }




}//End of Salaried Employee Class


?>
