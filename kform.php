
<?php include('server.php') ?>
<!Doctype html>

<head>
<title>MUMBAI FEST</title>
</head>
<style>
body 
{
   background-image: url("try2.jpg");
   background-repeat:repeat;
   background-size:150%;
}
h1
{
color:white;
font-family:Comic Sans MS;
font-size: 230%;
background-color:black;

}

h2 {
color:yellow;
background-color:#454E0A;
}

header{
background-color:black;
}
.container{
position:realtive;
}
.left{
position: absolute;

right:70px;
padding-left:20px;
padding-right:20px;
padding-top:10px;}
form.example input[type=text] {
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 68%;
    background: #f1f1f1;
}

form.example button {
   float:right;
    width: 20%;
	
    padding: 3px;
    background: blue;

}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.show {
    display: block;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}
.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
table{
text-align:center;
color:yellow;
}
th{
font-size:30;
color:white;}
footer{
background-color:#333;
}
h3{
color:white;
}
</style>
<body>
<header><div class="container">
       <img src="bghhh.jpg"style="width:1250px;height:250px;">
<div class= "left">
<form class="example"  method="post" action="kform.php" style="max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit" >OK</button>
</form></div></div>
        <div class="navbar">
  <a href="prac.php">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Festival Options
  
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="#">College Festivals</a>
      <a href="#">Art Festivals</a>
      <a href="#">Food Festivals</a>
	  <a href="theatre.html" target="_blank">Theatre Festivals</a>
	  <a href="#">Cultural Festivals</a>
    </div>
  </div> 
  
  <a href="kform.html" >Feedback</a>
  <a href="#news">About Us</a>
  <a href="#news">Contact Us</a>

</div>

</header>
<br><font face="Verdana" color="white" size='6'>
	<center><p>Welcome <?php echo $_SESSION['username']; ?></p></center>
  </font>
<FORM name="Reg" method="post">

    

<fieldset>
    <legend><font face="Garamond" color="white" size='6'><b>Review</b><br></font></legend>
    <br><font color="white" size=5 > 
	Which event did you attend?<br>
     <select name="Events" style="color:blue; font-family:verdana; font-size:100%; background-color:#CFB7FB;width: 150px;height:30px;margin: 10px;">
  <option value="Kalaghoda">Kalaghoda</option>
  <option value="Trifles">Trifles</option>
  <option value="Joy_of_giving">Joy of Giving</option>
  <option value="Technext">Technext</option>
</select>
 <br><br>

    Overall,how entertaining was the event?<br><br>

<input id="slider1" type="range" min="100" max="500" step="10" /> <br><br>
    After the event, how did you feel?<br>
  <font color="#F4FF00" size=5> <input type="radio"
     name="feel" value="Boring"/>Boring<br>
<input type="radio"
     name="feel"value="Exciting">Exciting<br>
<input type="radio"
     name="feel"value="Excellent"/>Excellent
</font><br><br>

Do you feel the day provided value for money?<br><br>
<font color="yellow" size=5>
<input type="radio"
     name="value" value="YES">YES<br>
<input type="radio"
     name="value"value="NO"/>NO<br><br></font><br>

 <p>Ratings</p>
 <font color="yellow" size=5>
 <input type="radio" name="ratingquality" value="5stars">5 stars<br>
 <input type="radio" name="ratingquality" value="4stars">4 stars<br> 
 <input type="radio" name="ratingquality" value="3stars">3 stars<br> 
 <input type="radio" name="ratingquality" value="2stars">2 stars<br>
 <input type="radio" name="ratingquality" value="1star">1 star<br>
</font></font>
</fieldset>



<input type="submit" name="feed_user" text="Submit" style="color:blue; font-family:verdana; font-size:100%; background-color:#CFB7FB;width: 250px;height:30px;margin: 10px;">Submit</font>
</form>

</FORM>
<script>
var e = document.getElementById("Events");
var strUser = e.options[e.selectedIndex].text;
</script>

</BODY>
</HTML>

