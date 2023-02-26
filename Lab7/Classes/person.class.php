<?php
/**
 * Author: Jay Annadurai
 * Date: 24 Feb 2023
 * Project: I211
 * File: person.php
 * Description: Sub Class of the Employee Class. Demonstrates Composition; i.e. an Employee is made from a Person
 *
 * UML:
 * Person (Composed into Employee)
 * ----------------------------
 * -first_name: String
 * -last_name: String
 * ----------------------------
 * + __construct
 * +getFirstName: String
 * +getLastName: String
 * +toString: void
 * ----------------------------
 */

//Person Class, composed into (Abstract) Employee Class
class Person {

    //----------------------------------------------//
    //                  Properties                  //
    //----------------------------------------------//

	//Private Name Attributes of a Person Object
    private string $first_name,$last_name;

    //----------------------------------------------//
    //                  Constructor                 //
    //----------------------------------------------//

    //Person Class Constructor
    public function __construct($firstName,$lastName) {
        $this->first_name= $firstName;
        $this->last_name = $lastName;
    }//End of Constructor

    //----------------------------------------------//
    //                    Methods                   //
    //----------------------------------------------//

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void
    {
        echo "Name: ".$this->getFirstName()."&nbsp".
        $this->getLastName()."<br>";

    }//End of Signature toString Method


    //----------------------------------------------//
    //                    Getters                   //
    //----------------------------------------------//

    /**
     * @return string that is the Instance's first_name Property
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @return string that is the Instance's last_name Property
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }


}//End of Person Class, composed into Employee Class

?>
