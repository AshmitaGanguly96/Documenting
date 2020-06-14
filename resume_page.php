<?php
session_start();

?>
<html>
<head> 
<title> Resume Template </title>	
	
</head>
<body>

<input type="text" name="untitled" placeholder="Untitled Document" style="height:12px width: 12px">
<div class="top-right">
<input type="image" src="default.jpg" alt="Pro pic" width="30" height="30" style="margin-left=150px; margin-top=40px">
</div>
<style>
.top-right {
  position: absolute;
  top: 88px;
  right: 120px;
}
</style>
<style>
input[type=text] {
  width: 45%;
  padding: 12px;
 	float:left;
	font-size: 17px ;
	margin-top:50px;
    margin-right: 15px;
    margin-left: 38px ;
	 bottom: 10px;
 </style>
 <form action='share.php'>
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
<style>

input[type=text], select, textarea {
  width: 90%;
  padding: 12px;
  font: 17px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: grey;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: blue;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<h3>Resume</h3>

<div class="container">
  <form action="home.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname"  placeholder="Your name..">
	<br> <br> <br>
	<br> <br> <br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
	<br> <br> <br>
	<br> <br> <br>
    <label for="country">College</label>
	<br> 
	
    <select id="country" name="country">
      <option value="India">VIT</option>
      <option value="Sri Lanka">SMIT</option>
      <option value="Bangladesh">IIT</option>
    </select>
	<br>
    <label for="about">About yourself</label>
	<br> <br> <br>
	
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>



</body>

</html>