<!DOCTYPE html>
<html>
    <head> 
    <title>micro clube</title>
    <link rel="icon" type="image/x-icon" href="mc5.jpg">
        <style>
         .round {
             border: 8px solid #04294F ;
  border-radius: 20px;
  padding: 9px;
         }
         .o{
  position: absolute;

  left: 300px;
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
            
                
        <div style="padding:20px;margin-top:30px;background:url(home2.png); ;height:800px;">
            
               
              
                
                <ul>
                    <li><a style="float:left;" href="connect.php">Home</a></li>
                    <li><a href="event.php">event</a></li>
                    <li><a href="contactme.php">Contact</a></li>
                    <li><a href="historique.php">About</a></li>
                    
                    <li><a href="inscription.php">registration</a></li>
                   <li> <a style=" left:100px;" >  <img  src="mc2.jpg"></a> </li>
                  </ul>
                  <br>
                 <div class="o">
         
            <button onclick="myFunction()" class="round" >qui somme nous</button> <br>
            <p id="demo"class="round"></p> <br>
            <script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Micro Club est le premier club scientifique universitaire en Alg??rie. il ??uvre ?? la vulgarisation et l'initiation ?? l'informatique et  vise non seulement ?? armer les ??tudiants d'un bagage de comp??tences techniques, par le biais de la promotion de l'informatique et des diff??rents domaines IT, mais pousse aussi ?? la familiarisation et l'insertion  au monde professionnel en encourageant led??veloppement des relations entre notre communaut?? estudiantine et le monde de l'entreprenariat.";
}</script>

            <button onclick="myFunction1()" class="round">notre historique</button><br>
            <p id="demo1"class="round"></p><br>
            <script>
function myFunction1() {
  document.getElementById("demo1").innerHTML = "Cr???? en 1985 ?? l'USTHB, Micro Club est le premier club scientifique universitaire en Alg??rie ";
}</script><br>
            <button onclick="myFunction2()" class="round">nos activit??s</button><br>

<p id="demo2"class="round"></p>



<script>
function myFunction2() {
  document.getElementById("demo2").innerHTML = "Micro Club a pour coutume d'organiser, chaque ann??e, une s??rie d'??v??nements exclusifs qui ont su gagner une grande popularit?? estudiantine et m??diatique Micro Club prend  part ?? diff??rentes activit??s impliquant par exemple l'organisation d'??v??nements avec le Ministre d??l??gu?? charg?? des Startup. Nous avons aussi eu l'honneur de recevoir le Pr??sidentde la R??publique Mr Tebboune qui a salu?? les efforts fournis par notre club et l'ambition d??gag??e parles jeunes ??tudiants alg??riens.";
}
</script>
</div>
 
                  

=              
          

        </body>
</html>