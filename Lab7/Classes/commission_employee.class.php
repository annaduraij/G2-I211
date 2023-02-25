<?php
/**
 * Author: Jay Annadurai
 * Date: 24 Feb 2023
 * Project: I211
 * File: commission_employee.php
 * Description: Extended from the Employee Class, represents a Commission Employee that is paid a percentage commission from their sales
 *
 * UML:
 * (abstract) CommissionEmployee
 *
 * -weekly_salary: float
 *
 * + __construct
 * +getWeeklySalary: float
 * +getPaymentAmount: float
 * +toString: void
 */

//Extends Employee Class: Commission Employee
//An Employee that is paid purely by commissions
class CommissionEmployee extends Employee {

    //----------------------------------------------//
    //                  Properties                  //
    //----------------------------------------------//

    //Private Properties of the Salaried Employee Class

    //Quantity of Sales in $ by Employee
    private int $sales;

    //Commission Rate as percentage float of sales amount
    private float $commission_rate;

    //Attains Other Properties of the Employee Class through the Constructor

    //----------------------------------------------//
    //                  Constructor                 //
    //----------------------------------------------//

    //Employee Class Constructor
    public function __construct($firstName,$lastName,$ssn,$commissionRate,$salesQuantity) {

        //Use the Parent Constructor from Employee
        //Processes First Name, Last Name, and SSN
        parent::__construct($firstName,$lastName,$ssn);

        //Store Employee's Sales Amount
        $this->sales = $salesQuantity;

        //Store Employee's Commission Rate
        $this->commission_rate = $commissionRate;

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
        //Payment Amount: sales x commission rate
        return ($this->getSales())*($this->getCommissionRate());

    }//End of getPaymentAmount Function that represents the Employee's Total Earnings

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void
    {
        //Call the toString Method of the Parent Employee Class
        parent::toString();

        //Echo the Employee's % Commission Rate as a Decimal
        echo "Commission Rate: ".number_format($this->getCommissionRate(),2)."<br>";

        //Echo the Employee's Sales Quantity
        echo "Sales: ".number_format($this->getSales())."<br>";

        //Echo the Employee's Earnings in $
        echo "Earnings: $".number_format($this->getPaymentAmount(),2)."<br>";

    }//End of Signature toString Method


    //----------------------------------------------//
    //                    Getters                   //
    //----------------------------------------------//


    /**
     * @return int Commission Employee's Quantity of Sales
     */
    public function getSales(): int
    {
        return $this->sales;
    }

    /**
     * @return float Commission Employee's Commission Rate as % float of sales
     */
    public function getCommissionRate(): float
    {
        return $this->commission_rate;
    }



}//End of Commission Employee Class


?>
