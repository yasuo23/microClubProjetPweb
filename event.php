<!DOCTYPE html>
<html>
    <head> 
        
    <title>micro clube</title>
    <link rel="icon" type="image/x-icon" href="mc5.jpg">

        <style>
                 .flex-container1 {
  display: flex;
  flex-wrap: wrap;
  top:120px;
 
}

.flex-container {
  background-color: white;
  width: 340px;
  margin: 10px;
 
  line-height: 28px;
  font-size: 30px;
   border: 8px solid #04294F ;
  border-radius: 20px;
  padding: 9px;
  
}
    .round {
  border: 8px solid #04294F ;
  border-radius: 20px;
  padding: 15px;
}
            .bottomleft {
  position: absolute;
  bottom: 8px;
  left: 16px;
  font-size: 18px;
}
.bottomright {
  position: absolute;
  bottom: 70px;
  right: 16px;
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
background:linear-gradient(#fefefe80,hwb(228 96% 2%)),url(home2.png);}
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

            
        </style>
        </head>
        <body>
        <div style="padding:20px;margin-top:30px;background:url(home2.png); ;height:1900px;">
            
            
                
            
                <ul>
                    <li><a style="float:left;" href="connect.php">Home</a></li>
                    <li><a href="event.php">event</a></li>
                    <li><a href="contactme.php">Contact</a></li>
                    <li><a href="historique.php">About</a></li>
                    
                    <li><a href="inscription.php">registration</a></li>
                   <li> <a style=" left:100px;" >  <img  src="mc2.jpg"></a> </li>
                  </ul>
                  <div style="padding:20px;margin-top:30px;background:url(home2.png); ;height:1500px;">
                  <div style="top: 50px; left:450px; position: absolute; font-family:Verdana, Geneva, Tahoma, sans-serif; padding: 4px; " class="round" ><h3>      NOS     EVENEMENTS       </h3></div>

                  <h6>              
<div  class="flex-container1" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" >

<?php
// define variables and set to empty values
$conn = new mysqli('localhost', 'root','','phpmyadmin');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = " SELECT *	 FROM event order by date ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo "<div  class=flex-container ><img  src=".$row["img"].">"."<br>titre:   " . $row["titre"].  "<br>date:   " . $row["date"] . "<br>type:  ".$row["type"]."<br>description:     ".$row["description"]."</div>" ;
  }
} else {
  echo "0 results";
}


$conn->close();


?></div></div>
            
</body>
</html>