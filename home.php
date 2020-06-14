<?php

session_start();

?>

<html>
<head> 
<title> Home Page </title>
	<link rel="stylesheet" type="text/css" href="Style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="topnav">
<div class="top-right">
<input type="image" src="default.jpg" alt="Pro pic" width="30" height="30" style="margin-left=150px; margin-top=40px">
</div>
<style>
.top-right {
  position: absolute;
  top: 28px;
  right: 200px;
}
</style>
 
<h1>Docs  </h1>
 
  <input type="text" placeholder="Search..">
  
</div>
<div class="container">
<br>
<hr>
<style>

th, td {
 margin-top: 30px;
  padding: 15px;
  color:white;
}
</style>
<table style="width:100%">
  <tr>
    <th>create doc</th>
    <th>resume</th>
    <th>letter</th>
  </tr>
  
  
  <br> <br>
  <tr>
    <td><form action="action_page.php" target='_blank'>
    <input type="image" src="new_doc.png" alt="Submit" width="48" height="48">
</form>
</td>
    <td> <form action="resume_page.php" target='_blank'>
    <input type="image" src="resume.jpg" alt="Submit" width="48" height="48">
</form> </td>
    <td><form action="letter_page.php" target='_blank'>
    <input type="image" src="letter.png" alt="Submit" width="48" height="48">
</form></td>
  </tr>

</table>


<a class="float-right" href="logout.php"> Logout </a>
<h3 color="#fff"> Previously used </h3>
<br>
<hr>




</div>
</body>

</html>





