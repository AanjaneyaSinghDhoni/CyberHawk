<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
.tbl,.tbl td, .tbl tr{
    border: 1px solid black;
	border-spacing: 0px;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
      <a href="admin.php" class="w3-bar-item w3-button w3-theme-l1">CyberHawkCorp</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">#</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">#</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">#</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">#</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">#</a>
    <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">LOGOUT</a>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="newsdata.php">News-Entry</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="toolsdata.php">Tools-Entry</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="factsdata.php">Facts-Entry</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="admin.php">HOME</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->





<!--form of news-data----->
<div class="w3-main" style="margin-left:250px">
 
  <div class="w3-row w3-padding-64">
   
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
	<h1 style="color:#f4428c"><b>Enter the NEWS<b></h1><hr>
		<form name="formdata" method="post" enctype="multipart/form-data">
		<table>
		<tr>
			<td>
			HEADING:
			</td>
			<td></br>
			<textarea name="heading" rows="1" cols="130"></textarea></br></br>
			</td>	
		</tr>
		<tr>
			<td>
			CONTENT:
			</td>
			<td></br>
			<textarea name="body" rows="15" cols="130"></textarea></br></br>
			</td>
		</tr>
		<tr>
			<td>
			AUTHOR:
			</td>
			<td></br>
			<input name="author"  type="text"/></br></br>
			</td>
		</tr>
		<tr>
			<td>
			UPLOAD IMAGE:
			</td>
			<td></br>
			<input type="file" name="uploadimage" accept="image/*"></br></br>
			</td>
		</tr>
		<tr>
			<td>
			DATE:
			</td>
			<td></br>
			<input type="date" name="date"></br></br>
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td></br>
			<input type="submit" name="submit">
			<input type="reset">
			</td>
		</tr>
		</table>
		</form>
  </div>

  
  
  
  
  
  
  
  
  
  
  
  
  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal"></h1>
      </div>
    <div class="w3-third w3-container">
   
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal"></h1>
      </div>
    <div class="w3-third w3-container">
     
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
  
    </div>
  </div>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">

    </div>
	
	<h1 style="color:#f4428c"><b>NEWS DATA</b></h1>

    <div class="w3-container w3-theme-l1">
  
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
<?php

$connection=mysqli_connect("localhost","root","","cyberhawk");

$query='select * FROM `newsdata`';
$result=mysqli_query($connection, $query);


 
if(isset($_POST['submit']))
{
	echo "<table class=tbl>";
	while($r=mysqli_fetch_assoc($result))
	{
		echo "<tr>"."<td>".$r['id']."</td><td>". $r['heading']."</td><td>". $r['body']."</td><td>". $r['author']."</td><td>". $r['image_link']."</td><td>". $r['date']."</td><td><form><input type='submit' name='delete' value='delete'/></form></td></tr>";
	}
	 
	echo "</table>";
	

	if($connection)
		{
			$heading = $_POST['heading'];
			$body = $_POST['body'];
			$author = $_POST['author'];
			$file = "hello";
			$date = $_POST['date'];
	
			mysqli_query($connection,"INSERT INTO `newsdata`(`id`, `heading`, `body`, `author`, `image_link`, `date`) VALUES ('','$heading','$body','$author','$file','$date')");
		}
		else
		{
			echo "no connection";
		}
		
}	

mysqli_close($connection);





?>





