<?php session_start();?>

<!DOCTYPE html> 
<html>
	<head>
		<title>Page d'identification</title>
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

		<center><h3>CONNECTEZ-VOUS</h3></center>
		<img src="téléchargement (1).jpg">

    <form action="Accueil.php" method="POST">

	      <div class="form-group">
		   <br>   <label class="nu">Email</label>
		        <input type="email" name="email" id="email" class="form-control" placeholder="Entre votre email" required="">
		  </div>

		  <div class="form-group">
		       <label class="nu">Mot de Passe</label>
		        <input type="password" name="password" id="Password" class="form-control" placeholder="Entrer votre mot de passe" required="">
		  </div>
		      
		      	
		 	 <center><button class="btn btn-lg btn-primary" type="Submit" name="Enregistrer"onclick="myFunction()">Se Connecter</button></center>



			<div class="container pt-3 my-3 border">
		    <p class="mt-5 mb-3 text-muted text-center">si vous n'avez pas de compte <a href="inscription.php">Inscrivez-vous</a></p></div>


		 	 
	 </form>

	</center>

   </div>
</div>

 
	 




<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classe";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['Enregistrer'])){
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM student WHERE email = '$email' AND password = '$password' ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {


	$row = mysqli_fetch_assoc($result);
	$nom = $row["nom"];
	$email = $row["email"];
	$_SESSION['nom'] = $nom; 
    $_SESSION['email'] = $email; 
  
 	echo '<script language="javascript">';
	echo'document.location.replace("./Accueil.php")';// -->
	echo '</script>'; 
  
    } else {
 
    }

    }else{
	 
  
    }


    mysqli_close($conn);

    ?> 



</body>
</html>