<?php

$server= "localhost";
$user= "root";
$pass= "";
$db= "hi";

$conn = new mysqli($server, $user, $pass, $db);

$Nom=$_POST['nom'];
$Year=$_POST['Annee'];
$Age=$_POST['age'];
$Adresse=$_POST['adresse'];
$Code_secret=$_POST['code2'];
$Sexe=$_POST['Sexe'];
$Wilaya=$_POST['wilaya'];
$Photos=$_POST['Photos'];
$Activites_sportives=$_POST['Sport'];

$sql= "INSERT INTO student(Sname,Sage,Ssex,Swil,Saddr,Sphoto,Syear,Scode,Sact)VALUES('$Nom','$Age','$Sexe','$Wilaya','$Adresse','$Photos','$Year','$Code_secret','$Activites_sportives')";

$Result= mysqli_query($conn,$sql);

if ($Result== true) 
    { die("Student Added Successfully !!" );

    }
 
     
else {
echo("Erreur !!" );
}

?>
