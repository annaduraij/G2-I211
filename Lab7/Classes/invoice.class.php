<?php
/**
 * Author: Jay Annadurai
 * Date: 24 Feb 2023
 * Project: I211
 * File: invoice.php
 * Description: Invoice Class that Manages the Invoice Information
 *
 * UML:
 * Invoice
 * ----------------------------
 * -part_number: String
 * -part_description: String
 * -quantity: integer
 * -price_per_item: float
 * -invoice_count: integer
 * ----------------------------
 * + __construct
 * +getPartNumber: integer
 * +getPartDescription: String
 * +getQuantity: integer
 * +getPricePerItem: float
 * +getPaymentAmount: float
 * +toString: void
 * +getInvoiceCount: integer
 * ----------------------------
 */

//Abstract Invoice Base Class that Implements the Payable Interface
class Invoice implements Payable {

    //----------------------------------------------//
    //                  Properties                  //
    //----------------------------------------------//

    //Private Properties of the Invoice Class
    //Part Number and Description of Parts in Invoice
    private string $part_number,$part_description;

    //Quantity of Items in Invoice
    private int $quantity;

    //Price Per Item of Parts in Invoice
    private float $price_per_item;

    //Static Count of Invoice Instances
    //Incremented whenever the Invoice Constructor is Called
    private static int $invoice_count = 0;

    //----------------------------------------------//
    //                  Constructor                 //
    //----------------------------------------------//

    //Invoice Class Constructor
    public function __construct(string $partNumber, string $partDescription,int $partQuantity,float $partPricePerItem) {

        //Increment the Count of Invoice Class Instances
        self::$invoice_count++;

        //Store Invoice Part Information
        $this->part_number = $partNumber;
        $this->part_description = $partDescription;
        $this->quantity = $partQuantity;
        $this->price_per_item = $partPricePerItem;

    }//End of Constructor

    //----------------------------------------------//
    //                    Methods                   //
    //----------------------------------------------//

    /**
     * Signature and Polymorphic Method of the Invoice Class
     * @return float|string of the Total Payment as Computed by Part Price x Part Quantity
     * @param bool $naturalLang allows for natural language formatting as a formatted decimal and returns a string
     */
    public function getPaymentAmount(bool $naturalLang = false): float|string
    {
        //Bind the Value as Payment Amount: Part Quantity x Part Price
        $value = ($this->getQuantity() * $this->getPricePerItem());

        //Use Natural Language Function of Employee to Determine Printed Value
        return Employee::nlUSD($value,$naturalLang);

    }//End of getPaymentAmount Function that represents the Total Invoice Amount

    //Polymorphic Method to Echo the Traits of the Class
    //Echoes the Properties of an Instance with Line Breaks
    public function toString(): void
    {
        //Echo the Invoice's Part Number with the Part's Description in Parentheses
        echo "Part Number: ".$this->getPartNumber()." "."(".$this->getPartDescription().")"."<br>";

        //Echo the Quantity of Parts
        echo "Quantity: ".$this->getQuantity()."<br>";

        //Echo the Price per Part/Item in $
        echo "Price Per Item: ".$this->getPricePerItem(true)."<br>";

        //Echo the Total Payment Amount in $
        echo "Payment: ".$this->getPaymentAmount(true)."<br>";

    }//End of Signature toString Method


    //----------------------------------------------//
    //                    Getters                   //
    //----------------------------------------------//

    /**
     * @return string of Integers which represent Part's Item Number
     */
    public function getPartNumber(): string
    {
        return $this->part_number;
    }

    /**
     * @return string of Literal Part Description
     */
    public function getPartDescription(): string
    {
        return $this->part_description;
    }

    /**
     * @return int of Count of Parts/Items billed in the Invoice
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return float|string of the Price per Part/Item in $
     * @param bool $naturalLang allows for natural language formatting as a formatted decimal and returns a string
     */
    public function getPricePerItem(bool $naturalLang = false): float|string
    {
        //Bind the Value
        $value = $this->price_per_item;

        //Use Natural Language Function of Employee to Determine Printed Value
        return Employee::nlUSD($value,$naturalLang);

    }

    /**
     * @return int of the Amount of Invoice Instances
     */
    public static function getInvoiceCount(): int
    {
        return self::$invoice_count;

    }


}//End of Base Invoice Class

?>
