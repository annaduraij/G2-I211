<?php
/**
 * Author: Jay Annadurai
 * Date: 26 Feb 2023
 * Project: I211
 * File: payable.php
 * Description: Interface for the Abstract Employee Superclass as well as the Invoice Class and forces implementation of the getPaymentAmount and toString Methods
 *
 * UML:
 * (interface) Payable
 * ----------------------------
 * +getPaymentAmount: float
 * +toString: void
 * ----------------------------
 */

//Interface Payable
//Forces Implementing Classes to have getPaymentAmount and toString Methods
interface Payable {

    //----------------------------------------------//
    //                    Methods                   //
    //----------------------------------------------//

    //Methods in an Interface are Abstract and thus do not have a Method/Function Body

    /**
     * Signature and Polymorphic Method
     * @return float|string of the Total Payment as Computed
     * @param bool $naturalLang allows for natural language formatting as a formatted decimal and returns a string
     */
    public function getPaymentAmount(bool $naturalLang = false): float|string;

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void;


}//End of Payable Interface


?>
