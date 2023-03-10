<?php
/**
 * Author: Jay Annadurai
 * Date: 24 Feb 2023
 * Project: I211
 * File: commission_employee.php
 * Description: Extended from the Employee Class, represents a Base Salary Plus Commission Employee that is paid a percentage commission from their sales and a fixed salary
 *
 * UML:
 * Base Salary Plus CommissionEmployee
 * ----------------------------
 * -base_salary: float
 * ----------------------------
 * + __construct
 * +getBaseSalary: float
 * +getPaymentAmount: float
 * +toString: void
 * ----------------------------
 */

//Extends Commission Employee Class: Base Salary Plus Commission Employee
//An Employee that is paid purely by commissions
class BasePlusCommissionEmployee extends CommissionEmployee {

    //----------------------------------------------//
    //                  Properties                  //
    //----------------------------------------------//

    //Private Properties of the Base Salary Plus Commission Employee Class
    //Base Fixed Salary of the Employee regardless of Commissioned Sales
    private float $base_salary;

    //Attains Other Properties of the Commission Employee Class through the Constructor

    //Attains Other Properties of the Employee Class through the parent::Constructor

    //----------------------------------------------//
    //                  Constructor                 //
    //----------------------------------------------//

    //Employee Class Constructor
    public function __construct(string $firstName,string $lastName,string $ssn,float $commissionRate,int $salesQuantity,float $baseSalary) {

        //Use the Parent Constructor from Commission Employee
        //Grandparent Constructor Processes First Name, Last Name, and SSN
        //Parent Constructor Processes Commission Rate and Sales Quantity
        parent::__construct($firstName,$lastName,$ssn,$commissionRate,$salesQuantity);

        //Store Employee's Base Salary
        $this -> base_salary = $baseSalary;

    }//End of Constructor

    //----------------------------------------------//
    //                    Methods                   //
    //----------------------------------------------//

    /**
     * Signature and Polymorphic Method of the Base Plus Commission Employee Class
     * @return float Base Salary plus Commission Employee's Total Payment

     */
    public function getPaymentAmount(): float
    {
        //Bind Value as Payment Amount: Commission Amount + Base Salary
        //Return Value
        return (parent::getPaymentAmount()) + ($this->getBaseSalary());

    }//End of getPaymentAmount Function that represents the Employee's Total Earnings

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void
    {


        //Incorrect Use of Polymorphism, but Gets the Desired Format without Issues
        /*
        //Call the toString Method of the Grand Parent Employee Class
        //Employee::toString();

        //Cannot Simply Call the Parent toString Method as that will Result in Improper Repetition or Formatting and Order of the Earnings Line
        //Echo the Employee's Sales Quantity in $
        echo "Sales: $".number_format($this->getSales( ),2)."<br>";

        //Echo the Employee's % Commission Rate as a Decimal
        echo "Commission Rate: ".number_format($this->getCommissionRate( ),2)."<br>";

        //Echo the Employee's Base Salary
        echo "Base Salary: $".number_format($this->getBaseSalary( ),2)."<br>";

        //Echo the Employee's Gross Earnings in $
        echo "Earnings: $".number_format($this->getPaymentAmount( ),2)."<br>";
        */


        //Requires toString Method of 'Commission Employee' Class Modification
        //Force the Parent Method of Base Plus Commission Salary to strictly use the getPayment Amount Method within its own class

        //Call the toString Method of the Parent Commission Employee Class
        parent::toString();

        //Echo the Employee's Base Salary
        echo "Base Salary: $".number_format($this->getBaseSalary( ),2)."<br>";

        //Echo the Employee's Gross Earnings in $
        echo "Earnings: $".number_format($this->getPaymentAmount( ),2)."<br>";


    }//End of Signature toString Method


    //----------------------------------------------//
    //                    Getters                   //
    //----------------------------------------------//


    /**
     * @return float Employee's Base Salary in $
     */
    public function getBaseSalary(): float
    {
        //Bind Value
        //Return the Value
        return $this->base_salary;
        
    }


}//End of Base Salary Plus Commission Employee Class


?>
