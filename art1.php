<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.4/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

   body {
background-color:black;}
h2 {
color:yellow;
background-color:#454E0A;
}

header{
background-color:black;
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
.dropdown:hover .dropdown-content {display: block;}
.show {
    display: block;
}
.btn {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: #881409;
    cursor: pointer;
}

.btn:hover {
    background-color: #CE2919;
}

.btn.active {
    background-color: #CE2919;
    color: white;
}
h2 a{color:white;
text-decoration:none;}
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

    .bs-example{
		margin: 30px;
    }

    .modal-content iframe{
        margin: 0 auto;
        display: block;
    } 
	img:hover {
       cursor: pointer;
   }
   input[type=submit] {
       display: none;
   }
</style>
<script type="text/javascript">

$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#kalaghodaVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#kalaghodaVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#kalaghodaVideo").attr('src', url);
    });
});
</script>
</head>
<body>
<header><div class="container1">
       <img src="bghhh.jpg"style="width:1250px;height:250px;">
</div>
        <div class="navbar">
  <a href="prac.php">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Festival Options
  
    </button>
    <div class="dropdown-content" id="myDropdown">
    	  <a href="theatre.php">Theatre Festivals</a>
      <a href="art.php">Art Festivals</a>
      <a href="food.php">Food Festivals</a>

	    <a href="college.php">College Festivals</a>
    </div>
  </div> 
  
  <a href="kform.php">Feedback</a>
  <a href="about_us.html">About Us</a>
  <a href="theatre.php#contact">Contact Us</a>
 <?php  if (isset($_SESSION['username'])) : ?>
    <a  href="prac.php?logout='1'"style="float:left;left:50px;">logout</a>
    	 
    <?php endif ?>
</div>
</header><br>
<div class="bs-example">
  <h1 style="font-size:80px;" align="center">ART FESTIVAL</h1>
    <!-- Button HTML (to Trigger Modal) -->
    
	<img src="KALAGHODA.jpg" href="#myModal" style="height: 300px;width:550px;border:1px;margin-left:40px;margin-right:50px; " data-toggle="modal"/>
	
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<div class="row">
						<div class="col-md-3">
							<img src="kalaghoda_icon.png" width="150" height="120"><!-- style="border: 5px solid purple"-->
						</div>
						<div class="col-md-6">
							<!-- time icon-->
								<h2 style="margin-left:15px;"> KALA GHODA</h2>
								<h4 class="modal-title" style="margin-left:15px;"><span class="glyphicon glyphicon-time"></span >  02-09 Feb 2019</h4>
							<!--location icon-->
								<h4 class="modal-title" style="margin-left:15px;"><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a>Fort,Mumbai,India</h4>		
						</div>
					</div>
                </div>
                <div class="modal-body">
                    <iframe id="kalaghodaVideo" width="560" height="315" src="https://www.youtube.com/embed/dwHPcS5m-30" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style=""></iframe>
                </div>
				<p style="padding:15px;"><b>"Country’s largest multicultural festival"</b>
Kala Ghoda Arts Festival, first organised with the object of maintaining and preserving art, culture and heritage of South Mumbai. This event organises a community celebration of the arts within one of the most beautiful and historic precincts of Mumbai. This event draws visitors for it carries out heritage walks, literature fest, music, art shows for the proliferation of the Art and Heritage.</p>
                <div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right: 221px;background-color: purple !important; border-color: purple !important">INTERESTED</button>
				</div>
			</div>
        </div>
    </div>
	
	<img src="NEHRU.jpg" href="#myModal2" style="height: 300px;width:550px;border:1px;margin-left:40px;margin-right:50px;" data-toggle="modal"/>
    <!-- Modal HTML -->
    <div id="myModal2" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<div class="row">
						<div class="col-md-3">
							<img src="india-art-festival_icon.jpg" width="150" height="120"><!-- style="border: 5px solid purple"-->
						</div>
						<div class="col-md-8">
                    <h2 style="margin-left:15px;">INDIA ART FESTIVAL</h2>
                    <!-- time icon-->
						<h4 class="modal-title" style="margin-left:15px;"><span class="glyphicon glyphicon-time"></span>  17-20 Jan 2019</h4>
					<!--location icon-->
						<h4 class="modal-title" style="margin-left:15px;"><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a>Nehru Centre,Mumbai,India</h4>
						</div>
					</div>
				</div>
                <div class="modal-body">
                    <iframe id="kalaghodaVideo" width="560" height="315" src="https://www.youtube.com/embed/ptYNx0OF5Ew?rel=0&amp;start=28" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></iframe>
                </div>
				<p style="padding:15px;"><b>"A modern and contemporary art fair."</b>
India Art Festival showcases product from Gifts & Handicrafts industry which include paintings, sculptures. The interaction and communication between the art collectors and artists of the contemporary times will give rise to new and innovative ideas. It will bring forward the importance and value of modern, fine and contemporary art in the recent times. The significance of art development and innovations which are taking place in the sector of art and craft will be highlighted.</p>
                <div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right: 221px;background-color: purple !important; border-color: purple !important" >INTERESTED</button>
				</div>
			</div>
        </div>
    </div>
<br><br><br><br><br>
	<img src="kalaaspan.jpg" href="#myModal3" style="height: 300px;width:550px;border:1px;margin-left:40px;margin-right:50px; " data-toggle="modal"/>
	<!-- Modal HTML -->
    <div id="myModal3" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<div class="row">
						<div class="col-md-3">
							<img src="kalaaspan_icon.jpg" width="150" height="130"><!-- style="border: 5px solid purple"-->
						</div>
						<div class="col-md-9">
							<!-- time icon-->
								<h2 style="margin-left:15px;"> KALAA SPANDAN </h2>
								<h4 class="modal-title" style="margin-left:15px;"><span class="glyphicon glyphicon-time"></span >  23-26 Nov 2018</h4>
							<!--location icon-->
								<h4 class="modal-title" style="margin-left:15px;"><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a>Nehru Centre, Worli, Mumbai,India</h4>		
						</div>
					</div>
                </div>
                <div class="modal-body">
                    <iframe id="kalaghodaVideo" width="560" height="315" src="https://www.youtube.com/embed/TQfo0hpfEqI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
				<p style="padding:15px;">Indian Art Promoter has started kalaa Spandan Art Fair in order to render the art arena an opportunity to showcase their artistic talents through a very economical platform in metro cities of India & abroad & thus enabling the art fraternity to find out the elegant creations as well as the unveiled, untold & unimagined contemporary artworks from various corners of the globe at an affordable cost.</p>
                <div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right: 221px;background-color: purple !important; border-color: purple !important">INTERESTED</button>
				</div>
			</div>
        </div>
    </div>
	
	
	
	
</div>
<footer>
<table style="width:100%">
<tr>
<th>Related links</th>
<th>About Us</th>
<th>Other Options</th>
</tr>
<tr>
<td>FoodPanda</td>
<td>Komal Aswani</td>
<td>Copyrights link</td></tr>
<tr>
<td>Trivago</td>
<td>Mahima Gupta</td>
<td>Blog</td></tr>
<tr>
<td>festpav</td>
<td>Hiba Hussain</td></tr>
</table>
<h3>Contact Us</h3>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a><br>
<center><h3>@Copyrights 2018</h3></center>
</footer>     <script>function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}</script>
</body>
</html>              