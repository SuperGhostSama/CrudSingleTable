<!-- FIFTH STEP -->
<?php 
include 'connect.php';// to establish connection with database

        //we gonna take the deleteid with GET and we can see it in the URL "id"
if(isset($_GET['deleteid'])) {
    $id=$_GET['deleteid']; //we gonna stock the id in the variable.

    //we will use a query to delete from the database
    $query="DELETE FROM crud WHERE id=$id";

    $resultat=mysqli_query($connection,$query); //HINT : c & q

    if($resultat){
        // echo "Deleted Successfully";
        header('location:display.php'); //we will use it so that when we delete we get sended to display
    }else{
        die(mysqli_error($connection));
    }

 }

?>


