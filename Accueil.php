<?php session_start();?>

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
    <script src="https://kit.fontawesome.com/7cb0e7c261.js" crossorigin="anonymous"></script>

</head>
<body>

  

<style>
    .sidebar {
      height: 100%;
      width: 220px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #FAEBD7;
      overflow-x: hidden;
      padding-top: 16px;

    

    }


</style>


	  <div class="sidebar ">

      <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Déconnexion</a><br>

	  </div>
<center>
<h1 class="center">LISTES DES ELEVES</h1>


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

$sql = "SELECT id, nom FROM student";
$result = mysqli_query($conn, $sql);


echo "<table border='1'>
<tr>

    <th>ID</th>

    <th>NOMS</th>

</tr>";

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_array($result)) {

  echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      
      echo "<td>" . $row['nom'] . "</td>";
  echo "</tr>";
}
echo "</table>";
  
} else {
  
  echo "0 results";
}

mysqli_close($conn);
?>


</center>


</body>
</html>