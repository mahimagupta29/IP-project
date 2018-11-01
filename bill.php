<?php include('server.php') ?>
<!DOCTYPE html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{background-color:#DFBDFF;}
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
#headd{width:1250px;height:250px;}
header{width:100%;
background-color:black;
}
.container1{
position:realtive;
}

.navbar {width:1250px;
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
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
footer{height:400px;}
.active {
  background-color: #717171;
}
.fa {
  padding: 10px;
  font-size: 30px;
  width: 40px;
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
</head>
<body>
<header><div class="container">
       <img src="bghhh.jpg"style="width:1250px;height:250px;">
</div>
        <div class="navbar">
  <a href="prac.php">Home</a>
  
 
  
  <a href="kform.php" >Feedback</a>
  <a href="about_us.html">About Us</a>
  <a href="bill.php#contact">Contact Us</a>
  <?php  if (isset($_SESSION['username'])) : ?>
    <a  href="prac.php?logout='1'"style="float:left;left:50px;">logout</a>
    	 
    <?php endif ?>
</div>
</header>
<br>
</br><form method="post" action="bill.php">
  <input style="color:#14E6F9; font-family:verdana; font-size:150%; background-color:black;"type="submit" name="theatre_event" value="Generate Bill">
</form><br><br>
<?php
if(isset($_POST['theatre_event']))
{$con = mysqli_connect("localhost","root","16111998","mumbai");
$x= $_SESSION['username'];
$result = mysqli_query($con,"SELECT * FROM billdetails ");
echo '<div style="background-color:#333;width:600px;" id="bill">';
while($row = mysqli_fetch_array($result))

  {echo '<p style="color:#14E6F9; font-family:verdana; font-size:150%; ">Username&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row[0].' </p>';
echo '<p style="color:#14E6F9; font-family:verdana; font-size:150%; ">Event Name&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;'.$row[1].' </p>';
echo '<p style="color:#14E6F9; font-family:verdana; font-size:150%; ">Total Tickets&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;'.$row[2].' </p>';
echo '<p style="color:#14E6F9; font-family:verdana; font-size:150%; ">Price&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row[3].' </p>';
echo '<p style="color:#14E6F9; font-family:verdana; font-size:150%; ">Payment mode&nbsp;:&nbsp;'.$row[4].' </p>';

  }

echo '</div>';

 

mysqli_close($con);


  }?>
  <input type="button" style="color:#14E6F9; font-family:verdana; font-size:150%; background-color:black;"onclick="printDiv('bill')" value="PRINT" /><br><br>
<footer style="width:1250px;"><br><br><br><br>
<table style="width:100%">
<tr>
<th>Related links</th>
<th>About Us</th>
<th>Other Options</th>
</tr>
<tr>
<td><a href="https://www.foodpanda.in" target="_blank" style="text-decoration:none;color:yellow;">FoodPanda</td></a>
<td><a href="about_us.html#komal"  style="text-decoration:none;color:yellow;">Komal Aswani</td></a>
<td>Copyrights link</td></tr>
<tr>
<td><a href="https://www.trivago.in" target="_blank" style="text-decoration:none;color:yellow;">Trivago</td></a>
<td><a href="about_us.html#hiba"  style="text-decoration:none;color:yellow;">Mahima Gupta</td></a>
<td>Blog</td></tr>
<tr>
<td><a href="https://festpav.com" target="_blank" style="text-decoration:none;color:yellow;">festpav</td></a>
<td><a href="about_us.html#mahima"  style="text-decoration:none;color:yellow;">Hiba Hussain</td></tr></a>
</table>
<div id='contact'><h3>Contact Us</h3>
<a href="https://www.facebook.com/hiba.hussain.1257"target="_blank" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a><br>
<center><h3>@Copyrights 2018</h3></center>
</footer>
<script>
function printDiv(bill) {
     var printContents = document.getElementById(bill).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}</script>
</body>
</html>