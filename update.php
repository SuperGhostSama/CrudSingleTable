<!-- SIXTH STEP FOR THE UPDATE PART WE TOOK THE EXACT SAME CODE IN THE INDEX.PHP AND WE WILL USE IT ON THE UPDATE-->

<?php
    include 'connect.php';
    $id=$_GET['updateid'];
                            
                        //SEVENTH STEP QUERRY TO SHOW THE DATA IN THE UPDATE MODAL
                    $query="SELECT * FROM crud WHERE id=$id"; 

                    $resultat=mysqli_query($connection,$query);

                    $row=mysqli_fetch_assoc($resultat); 
                    $nom=$row['Nom'];//we put in the [] its name in the database where its stocked
                    $prenom=$row['Prenom'];//we put in the [] its name in the database where its stocked
                    $telephone=$row['Telephone'];//we put in the [] its name in the database where its stocked
                    $email=$row['Email'];//we put in the [] its name in the database where its stocked
                    $password=$row['Password'];//we put in the [] its name in the database where its stocked

    


    if(isset($_POST['submit'])){ //we put in the post the name of the button submit / "if the data in the modal sent submit"
        $nom=$_POST['nom'];//we put in the [] its name in the modal
        $prenom=$_POST['prenom'];//we put in the [] its name in the modal
        $telephone=$_POST['telephone'];//we put in the [] its name in the modal
        $email=$_POST['email'];//we put in the [] its name in the modal
        $password=$_POST['password'];//we put in the [] its name in the modal

        //QUERY FOR UPDATE
        //table name in data base "crud" In the first line between() we put the data that we want to insert in it

        $query="UPDATE crud set Nom='$nom', Prenom='$prenom', Telephone='$telephone', Email='$email', Password='$password'
        WHERE  id='$id'";
        //we will create a variable to execute the query
        $resultat=mysqli_query($connection,$query);
     
          
        if($resultat){
            echo "Updated successefully";
            // header('location:display.php'); //we will use this function to stop showing the msg of data inserted successefully and we get sent to the display.php
        }else
        {
            die(mysqli_error($connection));
        }
    }
?>


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
    <input type="text" class="form-control" placeholder="Entrer votre nom" name="nom" autocomplete="off" value="<?php echo $nom?>"> <!-- GAVE EACH INPUT AN ECHO VALUE TO PRINT THE VALUE TAKEN FROM DATABASE -->
  </div>
  <div class="form-group">
    <label>Prenom</label>
    <input type="text" class="form-control" placeholder="Entrer votre prénom" name="prenom" autocomplete="off"value="<?php echo $prenom?>"> <!-- GAVE EACH INPUT AN ECHO VALUE TO PRINT THE VALUE TAKEN FROM DATABASE -->
  </div>

  <div class="form-group">
    <label>Numero Telephone</label>
    <input type="text" class="form-control" placeholder="Entre votre Numero de Telephone" name="telephone" autocomplete="off" value="<?php echo $telephone?>"> <!-- GAVE EACH INPUT AN ECHO VALUE TO PRINT THE VALUE TAKEN FROM DATABASE -->
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Entrer votre adresse Email" name="email" autocomplete="off" value="<?php echo $email?>"> <!-- GAVE EACH INPUT AN ECHO VALUE TO PRINT THE VALUE TAKEN FROM DATABASE -->
  </div>

  <div class="form-group">
    <label>Password</label>
    <input class="form-control" placeholder="Entrer votre password" name="password" autocomplete="off" value="<?php echo $password?>"> <!-- GAVE EACH INPUT AN ECHO VALUE TO PRINT THE VALUE TAKEN FROM DATABASE -->
  </div>

  <button type="submit" class="mt-3 btn btn-primary" name="submit">Update</button> <!-- GAVE THIS INPUT NAME SUBMIT -->
</form>
    </div>
  </body>
</html>


