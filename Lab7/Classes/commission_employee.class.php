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
     * @return float|string Hourly Employee's Total Payment in
     * @param bool $naturalLang allows for natural language formatting as a formatted decimal and returns a string
     */
    public function getPaymentAmount(bool $naturalLang = false): float|string
    {
        //Bind Value as Payment Amount: sales x commission rate
        $value = $this->getSales() * $this->getCommissionRate();

        //If Natural Language flag is False
        if (!$naturalLang) {
            //Return the value as a Float
            return $value;
        } else {
            //Otherwise, Return it as a Formatted String in $##.00
            return "$".number_format($value,2);
        }

    }//End of getPaymentAmount Function that represents the Employee's Total Earnings

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void
    {
        //Call the toString Method of the Parent Employee Class
        parent::toString();

        //Echo the Employee's Sales Quantity in $
        echo "Sales: ".$this->getSales(true)."<br>";

        //Echo the Employee's % Commission Rate as a Decimal
        echo "Commission Rate: ".$this->getCommissionRate(true)."<br>";

        //Echo the Employee's Commission Earnings in $
        //echo "Commission Earnings: ".$this->getPaymentAmount(true)."<br>"; //Not Extensible into Base Plus Commission Employee
        echo "Commission Earnings: ".CommissionEmployee::getPaymentAmount(true)."<br>";

    }//End of Signature toString Method


    //----------------------------------------------//
    //                    Getters                   //
    //----------------------------------------------//


    /**
     * @return int|string Commission Employee's Quantity of Sales
     * @param bool $naturalLang allows for natural language formatting as a formatted decimal and returns a string
     */
    public function getSales(bool $naturalLang = false): int|string
    {
        //Bind the Value
        $value = $this->sales;

        //Use Natural Language Function of Employee to Determine Printed Value
        return Employee::nlUSD($value,$naturalLang);

    }

    /**
     * @return float|string Commission Employee's Commission Rate as % float of sales
     * @param bool $naturalLang allows for natural language formatting as a formatted decimal and returns a string
     */
    public function getCommissionRate(bool $naturalLang = false): float|string
    {
        //Bind the Value as Payment Amount: Part Quantity x Part Price
        $value = $this->commission_rate;

        //Use Natural Language Function of Employee to Determine Printed Value
        return Employee::nlUSD($value,$naturalLang,false);

    }


}//End of Commission Employee Class


?>
