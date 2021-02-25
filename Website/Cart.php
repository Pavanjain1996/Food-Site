<?php
session_start();
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'Food');
$query='select * from cart where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
?>
<html>
<head>
<title>Cart</title>
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
	color:Orange;
}
#Last
{
	text-align:center;
	font-size:25px;
	font-family:comic sans ms;
	color:orange;
}
#button
{
	width:200px;
	font-size:25px;
	font-family:comic sans ms;
}
</style>
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
<br/>
<div><table id="table1" align="center" border="2px" cellpadding="10px">
<tr>
<td align="center">Pizza</td>
<td align="center"><?php echo $row['pizza']; ?></td>
<td align="center">Sandwich</td>
<td align="center"><?php echo $row['sandwich']; ?></td>
</tr>
<tr>
<td align="center">Dosa</td>
<td align="center"><?php echo $row['dosa']; ?></td>
<td align="center">Kulche</td>
<td align="center"><?php echo $row['kulche']; ?></td>
</tr>
<tr>
<td align="center">Chowmein</td>
<td align="center"><?php echo $row['chowmein']; ?></td>
<td align="center">Macroni</td>
<td align="center"><?php echo $row['macroni']; ?></td>
</tr>
<tr>
<td align="center">Pasta</td>
<td align="center"><?php echo $row['pasta']; ?></td>
<td align="center">Manchurian</td>
<td align="center"><?php echo $row['manchurian']; ?></td>
</tr>
<tr>
<td align="center">Cold Coffee</td>
<td align="center"><?php echo $row['coldcoffee']; ?></td>
<td align="center">Cold Drink</td>
<td align="center"><?php echo $row['colddrink']; ?></td>
</tr>
<tr>
<td align="center">Sweet</td>
<td align="center"><?php echo $row['sweet']; ?></td>
<td align="center">Ice Cream</td>
<td align="center"><?php echo $row['icecream']; ?></td>
</tr>
</table></div>
<br/>
<div id="Last" align="center">If you want to change quantity of any item go to menu card and again write and add to cart.</div>
<div><br/><form align="center" action="Billing.php" method="post"><input type="Submit" value="Order" id="button"/></form></div>
<br/><br/><br/><br/><br/><br/></body>
</html>