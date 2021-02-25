<?php
session_start();
?>
<html>
<head>
<title>Menu Card</title>
<style>
body
{
	background-color:rgb(170,170,70);
}
#Heading
{
	position:relative;
	left:39%;
	color:black;
	font-size:60px;
	font-family:cardiff;
}
#Menu
{
	background-color:gray;
	height:50px;
}
.Item
{
	position:relative;
	left:40%;
	top:10px;
	font-family:comic sans ms;
	font-size:20px;
}
a
{
	color:purple;
	text-decoration:none;
}
a:hover
{
	color:orange;
	font-family:Calibri;
	font-size:25px;
}
#table1
{
	font-size:25px;
	font-family:comic sans ms;
}
input
{
	width:200px;
}
</style>
<script>
function Validation(){
	arr=document.getElementsByClassName('dish');
	res=true;
	for(i=0;i<12;i++){
		if(arr[i].value<0){
			res=false;
			break;
		}
	}
	if(!res){
		alert("Invalid number of items");
	}
	return res;
}
</script>
</head>
<body>
<div id="Heading">FoodyWeb</div><br/>
<div id="Menu">
<div class="Item">
<a href="Home.php">Home</a> &nbsp &nbsp
<a href="MenuCard.php">MenuCard</a> &nbsp &nbsp
<a href="Register.php">Register</a> &nbsp &nbsp
<a href="Login.php">Login</a> &nbsp &nbsp
<a href="About.php">About<a/> &nbsp &nbsp
<?php
if(isset($_SESSION['logstatus'])){
	if($_SESSION['logstatus']=='YES'){
		echo '<a href="Cart.php">Cart</a> &nbsp &nbsp';
		echo '<a href="Logout.php">Logout<a/> &nbsp &nbsp';
		echo '--'.$_SESSION['username'];
	}
}
?>
</div>
</div>
<div><form method="post" action="CartUpdate.php" onsubmit="return Validation()">
<table id="table1" align="center" cellspacing="20px">
<tr>
<td align="center">Pizza<br/><img src="pizza.jpg" width="200px" height="150px"/><br/><br/>
<input type="number" class="dish" name="pizza"/></td>
<td align="center">Sandwich<br/><img src="sandwich.jpg" width="200px" height="150px"/><br/><br/>
<input type="number" class="dish" name="sandwich"/></td>
<td align="center">Dosa<br/><img src="dosa.jpg" width="200px" height="150px"/><br/><br/>
<input type="number" class="dish" name="dosa"/></td>
<td align="center">Kulche<br/><img src="kulche.jpg" width="200px" height="150px"/><br/><br/>
<input type="number" class="dish" name="kulche"/></td>
</tr>
<tr>
<td align="center">Chowmein<br/><img src="chowmein.jpg" width="200px" height="150px"/><br/><br/>
<input type="number" class="dish" name="chowmein"/></td>
<td align="center">Macroni<br/><img src="macroni.jpg" width="200px" height="150px"/><br/><br/>
<input type="number" class="dish" name="macroni"/></td>
<td align="center">Pasta<br/><img src="pasta.jpg" width="200px" height="150px"/><br/><br/>
<input type="number" class="dish" name="pasta"/></td>
<td align="center">Manchurian<br/><img src="manchurian.jpg" width="200px" height="150px"/><br/><br/>
<input type="number" class="dish" name="manchurian"/></td>
</tr>
<tr>
<td align="center">Cold Coffee<br/><img src="coldcoffee.jpg" width="200px" height="150px"/><br/><br/>
<input type="number" class="dish" name="coldcoffee"/></td>
<td align="center">Cold Drink<br/><img src="colddrink.jpg" width="200px" height="150px"/><br/><br/>
<input type="number" class="dish" name="colddrink"/></td>
<td align="center">Sweets<br/><img src="sweet.jpg" width="200px" height="150px"/><br/><br/>
<input type="number" class="dish" name="sweet"/></td>
<td align="center">Ice Cream<br/><img src="icecream.jpg" width="200px" height="150px"/><br/><br/>
<input type="number" class="dish" name="icecream"/></td>
</tr>
<tr><td align="center"><input type="submit" value="Add to cart"/></td></tr>
</table></form></div>
<br/><br/><br/><br/><br/>
</body>
</html>