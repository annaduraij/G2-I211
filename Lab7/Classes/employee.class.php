<?php
/**
 * Author: Jay Annadurai
 * Date: 24 Feb 2023
 * Project: I211
 * File: employee.php
 * Description: Base Class of the Four Employee Classes: SalariedEmployee | Commission Employee | Hourly Employee | BasePlusCommission Employee
 *
 * UML:
 * (abstract) Employee
 * ----------------------------
 * -person: Person
 * -ssn: String
 * -employee_count: integer
 * ----------------------------
 * + __construct
 * +getPerson: Person
 * +getSSN: String
 * +getEmployeeCount: integer
 * +toString: void
 * +nlUSD: variable
 * ----------------------------
 */

//Abstract Employee Base Class that Implements the Payable Interface
abstract class Employee implements Payable {

    //----------------------------------------------//
    //                  Properties                  //
    //----------------------------------------------//

    //Private Properties of the Employee Class
    //Person Object Composed into Employee
    private Person $person;
    //Employee's SSN
    private string $ssn;

    //Static Count of Employee and Child Class Instances
    //Incremented whenever the Employee Constructor is Called
    private static int $employee_count;

    //----------------------------------------------//
    //                  Constructor                 //
    //----------------------------------------------//

    //Employee Class Constructor
    public function __construct($firstName,$lastName,$ssn) {

        //Increment the Count of Employee Class Instances
        self::$employee_count++;

        //Construct and Store a Person Object using the Person Class Constructor
        $this->person = (new Person)->__construct($firstName,$lastName);
        //Store Employee SSN Information
        $this->ssn = $ssn;

    }//End of Constructor

    //----------------------------------------------//
    //                    Methods                   //
    //----------------------------------------------//

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void
    {
        //Call the toString Method of the Person Object
        $this->person->toString();

        //Echo the Employee's SSN
        echo "Social Security Number: ".$this->getSSN()."<br>";

    }//End of Signature toString Method

    //Static Function to Convert Values to Natural Language for USD
    public static function nlUSD($value,$enableNL = false,$enableUSD = true){

        //If Natural Language flag is Enabled
        if ($enableNL) {
            //Set Value to a Formatted String in ##.00
            return number_format($value,2);
        }

        //If USD flag is Enabled, Set a '$' prefix
        if ($enableUSD) { $value = "$".$value;}

        //Return the Formatted Value
        return $value;

    }//End of Static Function nlUSD

    //----------------------------------------------//
    //                    Getters                   //
    //----------------------------------------------//

    /**
     * @return Person that is the Instance's internal Person instance
     */
    public function getPerson(): Person
    {
        return $this->person;
    }

    /**
     * @return string that is the Social Security Number of the Employee
     */
    public function getSSN(): string
    {
        return $this->ssn;
    }

    /**
     * @return integer that represents the count of Employee Instances
     */
    public function getEmployeeCount(): int
    {
        return self::$employee_count;
    }


}//End of Base Employee Class


?>
