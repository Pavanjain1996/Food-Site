<?php
session_start();
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'Food');
$query='select * from cart where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
$quantity=array($row['pizza'],$row['sandwich'],$row['dosa'],$row['kulche'],$row['chowmein'],$row['macroni'],$row['pasta'],$row['manchurian'],$row['coldcoffee'],$row['colddrink'],$row['sweet'],$row['icecream']);
$query="select * from price";
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
$price=array();
for($i=0;$i<$n;$i++){
	$row=mysqli_fetch_array($res);
	$price[$i]=$row['price'];
}
$item=array('pizza','sandwich','dosa','kulche','chowmein','macroni','pasta','manchurian','coldcoffee','colddrink','sweet','icecream');
$query='select address,gender from validate where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
$address=$row['address'];
$gender=$row['gender'];
?>
<html>
<head>
<title>Billing</title>
<style>
body
{
	background-color:rgb(170,70,70);
}
#ordering
{
	text-align:center;
	width:800px;
	color:orange;
	font-size:25px;
	font-family:comic sans ms;
}
#Heading
{
	position:relative;
	left:39%;
	color:black;
	font-size:60px;
	font-family:cardiff;
}
</style>
</head>
<body>
<div id="Heading">FoodyWeb</div><br/>
<div><table id="table1" align="center" border="2px" cellpadding="10px">
<?php
echo '<tr><td align="center">'.$_SESSION['username'].'</td>';
echo '<td align="center">'.$gender.'</td>';
echo '<td align="center">'.date('d-m-y').'</td>';
echo '<td align="center">'.date('h:i:sa').'</td></tr>';
echo '<tr><th align="center">Item</th>';
echo '<th align="center">Quantity</th>';
echo '<th align="center">Price</th>';
echo '<th align="center">Total</th></tr>';
$total=0;
for($i=0;$i<$n;$i++){
	if($quantity[$i]!=0){
		echo '<tr><td align="center">'.$item[$i].'</td>';
		echo '<td align="center">'.$quantity[$i].'</td>';
		echo '<td align="center">'.$price[$i].'</td>';
		echo '<td align="center">'.$price[$i]*$quantity[$i].'</td></tr>';
		$total=$total+($quantity[$i]*$price[$i]);
	}
}
echo '<tr><th align="center">Total</th><th>--</th><th>--</th><th align="center">'.$total.'</th></tr>';
?>
</table></div><br/>
<div align="center"><div id="ordering">Thankyou for placing your order. You will recieve your parcel in 30
 minutes at <?php echo $address; ?>.</br><a href="Home.php">Go to Home</a></div></div><br/><br/><br/>
</body>
</html>