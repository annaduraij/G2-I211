<?php
/**
 * Author: Jay Annadurai
 * Date: 24 Feb 2023
 * Project: I211
 * File: commission_employee.php
 * Description: Extended from the Employee Class, represents a Commission Employee that is paid a percentage commission from their sales
 *
 * UML:
 * CommissionEmployee
 * ----------------------------
 * sales: int
 * -weekly_salary: float
 * ----------------------------
 * + __construct
 * +getSales: integer
 * +getWeeklySalary: float
 * +getPaymentAmount: float
 * +toString: void
 * ----------------------------
 */

//Extends Employee Class: Commission Employee
//An Employee that is paid purely by commissions
class CommissionEmployee extends Employee {

    //----------------------------------------------//
    //                  Properties                  //
    //----------------------------------------------//

    //Private Properties of the Commission Employee Class

    //Quantity of Sales in $ by Employee
    private int $sales;

    //Commission Rate as percentage float of sales amount
    private float $commission_rate;

    //Attains Other Properties of the Employee Class through the Constructor

    //----------------------------------------------//
    //                  Constructor                 //
    //----------------------------------------------//

    //Employee Class Constructor
    public function __construct(string $firstName,string $lastName,string $ssn,float $commissionRate,int $salesQuantity) {

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
     * Signature and Polymorphic Method of the Hourly Employee Class
     * @return float Hourly Employee's Total Payment in

     */
    public function getPaymentAmount(): float
    {
        //Bind Value as Payment Amount: sales x commission rate
        //Return the Value
        return $this->getSales() * $this->getCommissionRate();

    }//End of getPaymentAmount Function that represents the Employee's Total Earnings

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void
    {
        //Call the toString Method of the Parent Employee Class
        parent::toString();

        //Echo the Employee's Sales Quantity in $
        echo "Sales: $".number_format($this->getSales( ),2)."<br>";

        //Echo the Employee's % Commission Rate as a Decimal
        echo "Commission Rate: ".number_format($this->getCommissionRate( ),2)."<br>";

        //Echo the Employee's Commission Earnings in $
        //echo "Commission Earnings: ".$this->getPaymentAmount( )."<br>"; //Not Extensible into Base Plus Commission Employee
        echo "Commission Earnings: $".number_format(CommissionEmployee::getPaymentAmount( ),2)."<br>";

    }//End of Signature toString Method


    //----------------------------------------------//
    //                    Getters                   //
    //----------------------------------------------//


    /**
     * @return int Commission Employee's Quantity of Sales

     */
    public function getSales(): int
    {
        //Bind the Value
        //Return the Value
        return $this->sales;

    }

    /**
     * @return float Commission Employee's Commission Rate as % float of sales

     */
    public function getCommissionRate(): float
    {
        //Bind the Value as Payment Amount: Part Quantity x Part Price
        //Return the Value
        return $this->commission_rate;

    }


}//End of Commission Employee Class


?>
