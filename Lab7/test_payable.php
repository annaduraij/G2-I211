<?php
/*
 * Author: Jay Annadurai
 * Date: 26 Feb 2023
 * Name: test_payable.php
 * Description: Client Program to Test All Classes of the Payroll Application
 */
?>

<?php
//Class File Inclusions
//Autoload Required Classes
require_once "Library/autoload.php";

?>
<!DOCTYPE html>
<html lang="eng">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta name="author" content="Admin" />

        <title>I211 - Lab 7</title>

    </head>

    <body>
        <?php
        //Create an Array of Objects to Test the Payroll System

        //Create a Test Invoice for Engine Pistons
        $invoiceEP = new Invoice('10062','2GR-FKS Forged Connection Rods',6,408.00);

        //Create a Test Invoice for Vehicle Tires
        $invoiceVT = new Invoice('20124','Michelin Pilot Sport 4 AS 18x8.5',2,199.99);

        //Create a Salaried Employee:
        $employeeS = new SalariedEmployee('Eli','Bules','227737987',8192);

        //Create an Hourly Employee:
        $employeeH = new HourlyEmployee('Jenna','Horall','623980785',40,40);

        //Create a Commission Employee:
        $employeeC = new CommissionEmployee('Jay','Annadurai','800336324',0.04,22812);

        //Create a Base Salary plus Commission Employee:
        $employeeBC = new BasePlusCommissionEmployee('Louie','Zhu','209099962',0.16,65656,20000);

        //Place All Items into the Array
        $test = [
                'Invoice 1' => $invoiceEP,
                'Invoice 2' => $invoiceVT,
                'Salary Employee' => $employeeS,
                'Hourly Employee' => $employeeH,
                'Commissions Employee' => $employeeC,
                'Base Salary Plus Commissions Employee' => $employeeBC
        ];

        //Take Advantage that All Instances directly or indirectly implement 'Payable' and have a 'toString' Method
        //Iterate through Array and Use Polymorphic Methods to Print
        foreach($test as $class=>$object){
            echo "<hr>";
            //Print the Class Name
            echo "<h3> $class </h3>";
            echo "<hr>";
            //Use the Polymorphic toString Method of Each Object
            $object->toString();
            echo "<hr>";

            echo "<br>";
        }

        //Print the Counts of Invoices and Employees
        echo "<i> <b> Number of Invoices: ".Invoice::getInvoiceCount()."<br> </b> </i>";
        echo "<i> <b> Number of Employees: ".Employee::getEmployeeCount()."<br> </b> </i>";

        ?>

    </body>
</html>