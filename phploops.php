<?php

// Matthew Cabrera IT202-011 Fall 2020

$numbers = array(1,2,3,4,5,6,7); //1-7 are the elements in the array
//Created the array called numbers

foreach($numbers as &$value){ //&$value is the reference within the array that allows me to modify or see the elements
	if ($value % 2 == 0) //this checks elements within the array one by one, to see if it's even 
    echo "$value<br>"; //this prints the elements that passed the equation which means it is even
	
}	
?>