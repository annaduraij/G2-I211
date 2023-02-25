<?php
/*
 * Author: Jay Annadurai
 * Date: 14 Feb 2023
 * Name: test_person.php
 * Description: Client Program to Test All Classes and Inheritance
 */
?>

<?php
//Class File Inclusions
//Autoload Required Classes
require_once "autoload.php";

/* Legacy, Replaced with the Autoloader
//Superclass
require_once "person.class.php";
//Class that Extends the Person Class
require_once "student.class.php";
//Classes that Extend the Student Class
require_once "grad_student.class.php";
require_once "undergrad_student.class.php";
*/
?>
<!DOCTYPE html>
<html lang="eng">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta name="author" content="Admin" />

        <title>The Person class and its subclasses</title>
    </head>

    <body>

        <?php
        /* //Legacy Code without Method Overrides:
        //Instantiate a New Graduate Student Object
        $g = new GradStudent("Kevin", "Male");

        //Fluently Set Major, GPA, and Program of the Grad Student Obj
        $g->setMajor("Informatics")
            ->setGPA(3)
            ->setProgram("MS");

        //Print the Graduate Student Object Details:
        echo "<h3>Graduate Student</h3>";
        echo "Name: ", $g->getName(), "<br>";
        echo "Gender: ", $g->getGender(), "<br>";
        echo "Major: ", $g->getMajor(), "<br>";
        printf ("GPA: %.1f<br>", $g->getGPA());
        echo "Program: ", $g->getProgram();

        //Instantiate a New Undergraduate Student Object
        $u = new UndergradStudent("Kevin", "Male");

        //Fluently Set Major, GPA, and Program of the Undergrad Student Obj
        $u->setMajor("Informatics")
            ->setGPA(3.8)
            ->setStatus("Junior");

        //Print the Undergraduate Student Object Details
        echo "<h3>Undergraduate Student</h3>";
        echo "Name: ", $u->getName(), "<br>";
        echo "Gender: ", $u->getGender(), "<br>";
        echo "Major: ", $u->getMajor(), "<br>";
        printf ("GPA: %.1f<br>", $u->getGPA());
        echo "Status: ", $u->getStatus();
        */

        /* // Legacy II Code that Doesn't Rely on Polymorphism
        echo "<hr>";
        echo "<h3>Graduate Student</h3>";

        //create a GradStudent object and display its string representation
        $g1 = new GradStudent("Kevin","Male","Informatics", 3.8, "Master");
        $g1->toString();

        echo "<br><br>";

        $g2 = new GradStudent("Rock","Rock","Biology", 4.0, "PhD");
        $g2->toString();

        //Echo the Count of Grad Students
        echo "<br><br>";
        echo "There are " . GradStudent::getStudentCount() . " graduate students present.";


        echo "<hr>";
        echo "<h3>Undergraduate Student</h3>";

        //create an UndergradStudent object and display its string representation
        $u = new UndergradStudent("Judy","Female","Informatics",3.8,"Junior");
        $u->toString();

        echo "<br><br>";

        $u = new UndergradStudent("Bob","Male","Informatics",2.2,"Senior");
        $u->toString();

        //Echo the Count of UndergradStudents
        echo "<br><br>";
        echo "There are " . UndergradStudent::getStudentCount() .
            " undergraduate students present.";

        echo "<hr>";

        //Echo the Total number of Student Instances
        echo "<h3>" . Student::getStudentCount() . " students have
          been created.</h3>";
        */

        //create Two GradStudent and Two Undergrad objects, as well as two Medical Student Objs

        //Medical Students
        $m1 = new MedicalStudent("Timothy Lindsey", "Male", "Family Medicine", 3.4, "MD", 11.0); $m2 = new MedicalStudent("Amy Ling", "Female", "Anesthesiology", 3.8, "MD", 10.8);

        //Grad Students
        $g1 = new GradStudent ("Bryan Young", "Male", "Informatics", 3.7, "Master");
        $g2 = new GradStudent ("Mellisa Rogers", "Female", "Engineering", 3.2, "Ph.D.");

        //Undergrad Students
        $u1= new UndergradStudent("Ian Watson", "Male", "Library Science", 3.0, "Freshman");
        $u2 = new UndergradStudent ("Kimberlee Wang", "Female", "Nursing", 2.8, "Junior");


        //Store All Student Objects into an Array
        $students = [$m1,$m2,$g1,$g2,$u1,$u2];

        //function 'printStudent' accepts an Object Based on the Student Class and Prints A Title
        function printStudent (Student $studentObj) {

            //Add a Horizontal Line
            echo "<hr>";

            //Class of the Student Obj
            $c = get_class($studentObj);

            //Switch Statement to Echo the Name of the Class the specific Student Object is Derived From
            switch ($c) {
                case 'MedicalStudent':
                    echo "<h3>Medical Student</h3>";
                    break;

                case 'GradStudent':
                    echo "<h3>Graduate Student</h3>";
                    break;

                case 'UndergradStudent':
                    echo "<h3>Undergraduate Student</h3>";
                    break;
            }//End of Switch

            //Add a Horizontal Line
            echo "<hr>";

            //Print the Student Information
            $studentObj->toString();

        }//End of function printStudent

        //Iterate through the Students Array
        foreach ($students as $student) {
            //Print the Student Information
            printStudent($student);
        }

        //Add a Horizontal Line
        echo "<hr>";

        //Echo Final Counts of Students
        echo "<h3>", MedicalStudent::getStudentCount(), " medical students have been created.</h3>";

        echo "<h3>", GradStudent::getStudentCount(), " graduate students have been created.</h3>";

        echo "<h3>",UndergradStudent::getStudentCount(), " undergraduate students have been
               created.</h3>";

        echo "<h3>",Student::getStudentCount(), " students have been
               created in total.</h3>";
        ?>

    </body>
</html>