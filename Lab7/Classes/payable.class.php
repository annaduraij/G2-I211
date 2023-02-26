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
     * @return float of the Total Payment as Computed
     * Option to print in natural language as a formatted decimal in $ or return as a float
     */
    public function getPaymentAmount($naturalLang = false);

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void;


}//End of Payable Interface


?>
