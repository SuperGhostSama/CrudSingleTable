                    <!-- THIRD STEP -->
<?php
    include 'connect.php';
    $Title='Index Crud';
    include 'header.php';
    if(isset($_POST['submit'])){ //we put in the post the name of the button submit / "if the data in the modal sent submit"
        $nom=$_POST['nom'];//we put in the post the name of the input in modal 
        $prenom=$_POST['prenom'];//we put in the post the name of the input in modal    
        $telephone=$_POST['telephone'];//we put in the post the name of the input in modal
        $email=$_POST['email'];//we put in the post the name of the input in modal 
        $password=$_POST['password'];//we put in the post the name of the input in modal 
        
        //QUERY FOR INSERT IN DATA BASE
        //table name in data base "crud" In the first line between() we put the data that we want to insert in it
                //(FILL THE BLANK) where we will stock the data 
        $query="INSERT INTO crud (Nom,Prenom,Telephone,Email,Password) 
        VALUES('$nom','$prenom','$telephone','$email','$password')";
        //we will create a variable to execute the query
        $resultat=mysqli_query($connection,$query);//In the () left side we will put the connection variable that connects us to the database
        // In the right side we will put the variable of the query 
        //"mysqli_query" job is to make sure that the query is executed in the database


            //Now we gonna use if statement to show us if the query got executed in the database successefully else it shows the error
        if($resultat){
            // echo "Data ajoutée avec succées";
            header('location:display.php'); //we will use this function to stop showing the msg of data inserted successefully and we get sent to the display.php
        }else
        {
            die(mysqli_error($connection));
        }
    }
?>


    <!-- FIRST STEP PARTIE HTML -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post"> <!-- USED POST METHOD -->

  <div class="form-group">
    <label>Nom</label>
    <input type="text" class="form-control" placeholder="Entrer votre nom" name="nom" autocomplete="off"> <!-- GAVE EACH INPUT A NAME -->
  </div>
  <div class="form-group">
    <label>Prenom</label>
    <input type="text" class="form-control" placeholder="Entrer votre prénom" name="prenom" autocomplete="off"> <!-- GAVE EACH INPUT A NAME -->
  </div>

  <div class="form-group">
    <label>Numero Telephone</label>
    <input type="text" class="form-control" placeholder="Entre votre Numero de Telephone" name="telephone" autocomplete="off"> <!-- GAVE EACH INPUT A NAME -->
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Entrer votre adresse Email" name="email" autocomplete="off"> <!-- GAVE EACH INPUT A NAME -->
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Entrer votre password" name="password" autocomplete="off"> <!-- GAVE EACH INPUT A NAME -->
  </div>

  <button type="submit" class="mt-3 btn btn-primary" name="submit">Submit</button> <!-- GAVE THIS INPUT NAME SUBMIT -->
</form>
    </div>
  </body>
</html>

