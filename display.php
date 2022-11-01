<!-- FOURTH STEP -->
<?php
include 'connect.php';
$Title='Display Crud';
include 'header.php';

?>


    
     <!-- Bootstrap CSS -->

<body>
    <div class="container">
        <button class="btn btn-primary my-5"> 
            <a href="index.php" class="text-light">Add User</a>  
        </button>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Telephone</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Operations</th>
            </tr>
         </thead>
         <tbody>

<!-- this php part is used to get data from database -->
        <?php
        $query="SELECT * from crud"; //name of table in database
        
        $resultat=mysqli_query($connection,$query);

        if (mysqli_num_rows ($resultat)>0){
            while($row=mysqli_fetch_assoc($resultat)){
             $id=$row['id']; //we gonna put inside the [] where its stocked in the data base
             $nom=$row['Nom'];//we gonna put inside the [] where its stocked in the data base
             $prenom=$row['Prenom'];//we gonna put inside the [] where its stocked in the data base
             $telephone=$row['Telephone'];//we gonna put inside the [] where its stocked in the data base
             $email=$row['Email'];//we gonna put inside the [] where its stocked in the data base
             $password=$row['Password'];//we gonna put inside the [] where its stocked in the data base
             echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$nom.'</td>
                <td>'.$prenom.'</td>
                <td>'.$telephone.'</td>
                <td>'.$email.'</td>
                <td>'.$password.'</td> 
                    <td>
                            <button class="btn btn-primary">
                                <a class="text-light" href="update.php?updateid='.$id.'">Update </a>
                            </button>

                            <button class="btn btn-danger">
                                <a class="text-light" href="delete.php?deleteid='.$id.'">Delete </a>
                            </button>
                    </td>
                </tr>';
            }

        }else{
            echo "Table is Empty";
        }
        ?>

        <!-- .$id. the dot is used for concatination -->
        </tbody>
        </table>
            </div>
</body>
</html>

