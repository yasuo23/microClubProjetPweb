<!DOCTYPE html>
<html>
    <head> 
        <title>micro clube</title>
    <link rel="icon" type="image/x-icon" href="mc5.jpg">
       

        <style>
          .error{
            color: red;
          }
    .round {
  border: 8px solid #04294F ;
  border-radius: 20px;
  padding: 9px;
}
            .bottomleft {
  position: absolute;
top: 60px;
  left: 60px;
  font-size: 18px;
}
.stat {
  position: absolute;
top: 1100px;
  left: 450px;
  font-size: 18px;
}
.bottomright {
  position: absolute;
  top: 60px;
  right: 6px;
  font-size: 18px;
}
          ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #04294F;
  
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: right;
}

li a {
  display: block;
  color: rgb(252, 252, 255);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  background: color #04294F;
}

li a:hover:not(.active) {
  background-color:rgb(73, 73, 139);
  background: color #04294F;
}

.active {
  background-color: #2a2a5e;
}
         
body {margin:0;}
    .img{
    
background-position: center;
background-size: cover;
height: 100vh;
background:url(home2.png);}
.logo {
  
  top: 18px;
left: 10px;
  
}
.wrapper{
  max-height: 120px;
  border:1 xp solid #ddd ;
  display: flex;
  overflow-x:auto;
}
.wrapper :-webkit-scrollbar{
  width:0;
}
.wrapper .item{
min-width: 110px;
height: 110px;
line-height: 110px;
text-align: center;
background-color: #ddd;
margin-right: 2px;
}
.center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 18px;
}
h4{
  color:#04294F

}

            
        </style>
        </head>
        <body>
            <section class="img">
            
               
              
                <ul>
                    <li><a style="float:left;" href="connect.php">Home</a></li>
                    <li><a href="event.php">event</a></li>
                    <li><a href="contactme.php">Contact</a></li>
                    <li><a href="historique.php">About</a></li>
                    
                    <li><a href="inscription.php">registration</a></li>
                   <li> <a style=" left:100px;" >  <img  src="mc2.jpg"></a> </li>
                  </ul>
// define variables and set to empty values
<div style="padding:20px;margin-top:30px;background:url(home2.png); ;height:1500px;">

<?php
$nameErr = $emailErr = $anneErr  =$matriculeErr=$phoneErr=$motifErr = $objectifErr =$spesialitéErr=$faculterErr=$prenomErr="";
$name = $email = $anne  =$matricule=$phone=$motif = $objectif =$spesialité=$faculter=$prenom="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]); 
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["spesialité"])) {
    $spesialitéErr = "spesialitéErr is required";
  } else {
    $spesialité = test_input($_POST["spesialité"]); 
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$spesialité)) {
      $spesialitéErr = "Only letters and white space allowed";
    }
  }
    if (empty($_POST["prenom"])) {
      $prenomErr = "prenom is required";
    } else {
      $prenom = test_input($_POST["prenom"]); 
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$prenom)) {
        $prenomErr = "Only letters and white space allowed";
      }
    }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["matricule"])) {
    $matricule = "";
  } else {
    $matricule = test_input($_POST["matricule"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!is_numeric($matricule)) {
      $matriculeErr = "Invalid matricule";
    }
  }

  if (empty($_POST["motif"])) {
    $motif = "";
  } else {
    $motif = test_input($_POST["motif"]);
  }
  if (empty($_POST["objectif"])) {
    $objectif = "";
  } else {
    $objectif= test_input($_POST["objectif"]);
  }
  if (empty($_POST["anne"])) {
    $anneErr = "l'année is required";
  } else {
    $anne = test_input($_POST["anne"]);
  }
  if (empty($_POST["faculter"])) {
    $faculterErr = "faculteris required";
  } else {
    $faculter= test_input($_POST["faculter"]);
  }
  if (empty($_POST["phone"])) {
    $phone = "";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!is_numeric($phone)) {
      $phoneErr = "Invalid phone number";
    }
  }}

 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div style="top: 50px; left:450px; position: absolute; font-family:Verdana, Geneva, Tahoma, sans-serif; padding: 3px; " class="round" ><h3> formulaire   d'inscription  </h3></div>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<div class="bottomleft" class="round" style=" font-family:Verdana, Geneva, Tahoma, sans-serif;">
<h4> Nom: </h4> <input type="text" name="name" value="<?php echo $name;?>" class="round">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
<h4> prénom:</h4> <input type="text" name="prenom" value="<?php echo $prenom;?>" class="round">
  <span class="error">* <?php echo $prenomErr;?></span>
  <br><br>
  
 <h4> E-mail:</h4> <input type="text" name="email" value="<?php echo $email;?>" class="round">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 <h4> matricule:</h4> <input type="text" name="matricule" class="round" value="<?php echo $matricule;?>" class="round">
  <span class="error"><?php echo $matriculeErr;?></span>
  <br><br>

  <h4>phone: </h4><input type="text" name="phone" value="<?php echo $phone;?>" class="round">
  <span class="error"><?php echo $phoneErr;?></span>
  <br><br>
 
 <h4> niveaux:</h4> <br>
 <h6>
  <input type="radio" name="anne" <?php if (isset($anne) && $anne=="L1") echo "checked";?> value="L1">L1<br>
  <input type="radio" name="anna" <?php if (isset($anne) && $anne=="L2") echo "checked";?> value="L2">L2<br>
  <input type="radio" name="anna" <?php if (isset($anne) && $anne=="L3") echo "checked";?> value="L3">L3<br>
  <input type="radio" name="anna" <?php if (isset($anne) && $anne=="M1") echo "checked";?> value="M1">M1<br>
  <input type="radio" name="anna" <?php if (isset($anne) && $anne=="M2") echo "checked";?> value="M2">M2<br>
  <span class="error">* <?php echo $anneErr;?></span> </h6>
  </div>
  <div  class="bottomright " style=" font-family:Verdana, Geneva, Tahoma, sans-serif;">
 <h4> facultée:</h4> <br><h6>
  <input type="radio" name="faculter" <?php if (isset($faculter) && $faculter=="Faculté des Sciences Biologiques
") echo "checked";?> value="Faculté des Sciences Biologiques">Faculté des Sciences Biologiques<br>
  <input type="radio" name="faculter" <?php if (isset($faculter) && $faculter=="Faculté de Chimie"
) echo "checked";?> value="Faculté de Chimie">Faculté de Chimie<br>
  <input type="radio" name="faculter" <?php if (isset($faculter) && $faculter=="Faculté de Physique") echo "checked";?> value="Faculté de Physique">Faculté de Physique<br>
  <input type="radio" name="faculter" <?php if (isset($faculter) && $faculter=="Faculté de Génie Civil") echo "checked";?> value="Faculté de Génie Civil">Faculté de Génie Civil<br>
  <input type="radio" name="faculter" <?php if (isset($faculter) && $faculter=="Faculté de génie électrique") echo "checked";?> value="Faculté de génie électrique">Faculté de génie électrique<br>
  <input type="radio" name="faculter" <?php if (isset($faculter) && $faculter=="Faculté d'informatique") echo "checked";?> value="Faculté d'informatique">Faculté d'informatique<br>
  <input type="radio" name="faculter" <?php if (isset($faculter) && $faculter=="Faculté des Mathématiques") echo "checked";?> value="Faculté des Mathématiques">Faculté des Mathématiques<br>
  <input type="radio" name="faculter" <?php if (isset($faculter) && $faculter=="
Faculté des Sciences de la terre et Aménagement du Territoire") echo "checked";?> value="
Faculté des Sciences de la terre et Aménagement du Territoire">
Faculté des Sciences de la terre et Aménagement du Territoire<br>
  <input type="radio" name="faculter" <?php if (isset($faculter) && $faculter=="Faculté de Génie Mécanique et Génie de Procédés") echo "checked";?> value="Faculté de Génie Mécanique et Génie de Procédés">Faculté de Génie Mécanique et Génie de Procédés<br> </h6>
  <span class="error">* <?php echo $faculterErr;?></span> <br><br>
  <h4>spécialité:</h4> <input type="text" name="spesialité" value="<?php echo $spesialité;?> "class="round">
  <span class="error">* <?php echo $spesialitéErr;?></span>
  <br><br>
  <h4> motif de l'inscription:</h4><br> <textarea name="motif" rows="5" cols="40" class="round"><?php echo $motif;?> </textarea>
  <br><br>
  <h4>objectif de l'inscription:</h4><br><textarea name="objectif" rows="5" cols="40" class="round"><?php echo $objectif;?></textarea>
  <br><br>
 

  <button type="submit" value="Submit" class="round">Submit</button>
  <input type="reset" value="Reset" class="round">

  
  
  </div>
</form>
<div class="stat" style=" font-family:Verdana, Geneva, Tahoma, sans-serif;color:#04294F;">
<h2 >les statistiques</h2>
<?php
 echo "le nombre d'inscription par faculté "."<br> " ;

$conn = new mysqli('localhost', 'root','','phpmyadmin');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO inscription (matricule,nom,prénom,mail,année,phone,spécialité,faculté,motif,objectif) VALUES     ($matricule,'$name','$prenom','$email', '$anne',$phone,'$spesialité','$faculter','$motif' , '$objectif' )";

if ($conn->query($sql) === TRUE) {
  echo '<script>alert("demmande enregister")</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT faculté , count(*) AS Number  FROM inscription GROUP BY   faculté order by Number   ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "**faculté: " . $row["faculté"]. " - numro d'inscrit " . $row["Number"] . "<br>";
  }
} else {
  echo "0 results";
}
echo "le nombre d'inscription par niveaux "."<br>";
$sql = "SELECT année , count(*) AS Num  FROM inscription GROUP BY   année order by Num   ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "** niveaux : " . $row["année"]. " - numro d'inscrit " . $row["Num"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();


?></div></div></section>

</body>
</html>