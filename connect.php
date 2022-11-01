<!-- SECOND STEP ESTABLISHING CONNECTION-->
<?php
                                                //name of database
$connection=mysqli_connect('localhost','root','','crudoperation');

// if($connection){
//     echo "Connection successfull";
// } else { 
//     die(mysqli_error($connection)); //used to show connection failed error
// }


if(!$connection){ 
    die(mysqli_error($connection));}
    

?>