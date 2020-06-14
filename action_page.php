<?php
session_start();

?>
<html>
<head> 
<title> Word Doc </title>	
	
</head>
<body>

<input type="text" name="search" placeholder="Untitled Document">
<div class="top-right">
<input type="image" src="default.jpg" alt="Pro pic" width="30" height="30" style="margin-left=150px; margin-top=40px">
</div>
<style>
.top-right {
  position: absolute;
  top: 18px;
  right: 150px;
}
</style>
<style>
input[type=text] {
  width: 230px;
  transition: width 0.4s ease-in-out;
	float:left;
	font-size: 17px ;
	margin-top:50px;
    margin-right: 15px;
    margin-left: 38px ;
	 bottom: 10px;
 </style>
 <form action="share_doc.php">
 <button class="btn success">Share</button>
 </form>
<style>
.btn {
  border: none;
  float:right;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}

.btn:hover {background: #eee;}

.success {color: blue;}

</style>
 
<div class="dropdown">
  <button class="dropbtn">File</button>
  <div class="dropdown-content">
    <a href="home.php">New</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Edit</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">View</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Insert</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Tools</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
<style>
.dropbtn {
  background-color: grey;
  color: white;
  padding: 16px;
  font-size: 16px;
  margin-top: 100px;
  margin-left:10px;
  margin-right : 30px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #f1f1f1;}
}

</style>
<hr style="width:100%;text-align:left;margin-left:0">
<div class="container">
  <form action="home.php">

	<br> <br> <br>
	
    <textarea id="subject" name="subject" placeholder="Please use this portion to write" style="width:100%; height:500px"></textarea>
	<br>
    <input type="submit" value="Submit">
 </form>
</div>


</body>

</html>