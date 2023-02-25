<?php
/**
 * Author: Jay Annadurai
 * Date: 2/14/23
 * File: autoload.php
 * Description: Contains Function to Automatically Load All Classes
 */

//function 'camelCaseToUnderscore' Converts a Camel Case String to a String with Underscores
function camelCaseToUnderscore($string) {
    //Trim Extra Spaces
    $string = trim($string);

    //Split String into an Array of Character
    $characters = str_split($string);

    //Set the First Character to Lowercase
    $characters[0] = strtolower($characters[0]);

    //Iterate Through All the Characters
    foreach ($characters as &$character) {

        //If a Character is uppercase,
        if (ord($character) >= ord('A') && ord($character) <= ord('Z')) {
            //Replace Camel-Cased Character with Underscore and Lowercase Character
            $character = '_' . strtolower($character);
        }//End of If Statement

    }//End of forEach Loop

    //Fuse Character Elements inside the Array into a Single String and Return
    return implode('', $characters);
}

//On Load, Create a Queue
spl_autoload_register(
    //Import the Required Class but with CamelCase converted to Underscores
    function($class_name){

        //Path to Folder with Classes
        $folderPath = 'Classes/';
        //Extension of PHP Class Files
        $fileExtension = '.class.php';
        //Name of PHP Class File in Underscores
        $file = camelCaseToUnderscore($class_name);

        //Require the Class File
        require_once $folderPath.$file.$fileExtension;
    }
);