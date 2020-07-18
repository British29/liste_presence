<!DOCTYPE html>
 <html>
    <head>
        <title></title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     </head>
     <body>
      
        <center>
         <div class="container pt-3 my-3 border">
             <h1>Formulaires</h1>
             <form action="" method="POST">
                 <div class="form-group">
                   <label for="nom">Nom et Prenoms</label>
                   <input type="text" class="form-control" name="nom" placeholder="Entrer votre nom et Prenoms">
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Entrez votre Email</label>
                   <input type="email" class="form-control" name="email" placeholder="votre Email">
                 </div>

                <div class="form-group">
                   <label for="password">Password</label>
                   <input type="password" class="form-control" name="password" placeholder="votre mot de passe" required>
                 </div>

                 <div class="form-group">
                    <button class="btn btn-lg btn-primary" type="submit" name="Enregistrer">Enregistrer</button>
                 </div>
             </form>
           </center>
         </div>







<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classe";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['Enregistrer'])){
$nom = $_POST['nom'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "INSERT INTO student (nom, email, password) VALUES ('$nom', '$email', '$password')";

if (mysqli_query($conn, $sql)) {

	echo '<script language="javascript">';
	echo'document.location.replace("./index.php")';// -->
	echo '</script>';
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>



</body>
</html>