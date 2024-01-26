<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order Confirmation</title>
	<link rel="stylesheet" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
/* Global styles */
img[src*="https://cdn.000webhost.com/000webhost..."]
{display:none !important;}
 

body {
  font-family: Arial, sans-serif;
  background-image: url('bg.jpg');
  background-attachment: fixed;
  background-size: cover;
}

/* Header styles */

header {
  background-color: #333;
  color: #fff;
  padding: 5px;
}

h1 {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 20px;
}

/* Table styles */

table {
   background-color: white;
   box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.3);
   height: 300px;
   width: 500px;
   
    
   text-align: center;


   }
  



table, form, tr, th, td {
   
  text-align: center;
  border: 1px solid #ccc;

  


}

th {
  background-color: #f2f2f2;

}

img {
   
     width: 300px;
     height: 250px;
     padding: 0;
     margin: 0;
     border-radius: 0px;
   
  
  

}

/* Form styles */

form {
   
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
}

form label {
  display: block;
  margin-bottom: 10px;
}

form input[type="text"],
form select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 1px;
  margin-bottom: 16px;
}

form input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

form input[type="submit"]:hover {
  background-color: #45a049;
}

/* Link styles */

a {
  color: #1e90ff;
  text-decoration: none;
}

a:hover {
  color: #0071c5;
}

#purchase-btn {
  background-color: #C69749;
  border-radius: 4px;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 20px;
  cursor: pointer;
}
#purchase-btn:hover{
	background-color: #3C2A21;
}

/* Modal styles */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

 

.error {
			color: red;
			font-size: 25px;
			margin-left: 5px;
			text-align: center;
		}
		.error, a{
			text-decoration: none;
			color: black;
		}
		.error, img{
			width: 60%;
			border-radius: 3px;

		}
		.modal {
		display: none; 
		position: fixed; 
		z-index: 1;
		left: 0;
		top: 0;
		width: 100%; 
		height: 100%;
		overflow: auto;
		background-color: rgba(0, 0, 0, 0.4);
	}

	
	.modal-content {
    font-size: 25px;
		background-color: #fefefe;
		margin: 15% auto; 
		padding: 10px;
		border: 1px solid #888;
		width: 40%; 
		height: 40%;
		border-radius: 3px;
		animation-duration: 0.9s;
		animation-fill-mode: forwards;
		animation-timing-function: ease-out;
	}

	/* The Close Button */
	.close {
		color: #aaaaaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}

	 
	 


</style>


</head>
<body>
	 <?php
	if (empty($_GET['item']))
	{
		 print "<div id='myModal' class='modal'>
				<div class='modal-content'>
					<span class='close'>&times;</span>
					<center><p class='error'><a href='index.html'>Order first<br><br><img src='cart.gif' style='height: fit-content;'></a></p></center>
				</div>
			</div>
			<script>
				var modal = document.getElementById('myModal');
				var btn = document.getElementById('myBtn');
				var span = document.getElementsByClassName('close')[0];
				modal.style.display = 'block';
				span.onclick = function() {
					modal.classList.add('fadeOut');
					setTimeout(function() {
						modal.style.display = 'none';
						modal.classList.remove('fadeOut');
					}, 500);
				}
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.classList.add('fadeOut');
						setTimeout(function() {
							modal.style.display = 'none';
							modal.classList.remove('fadeOut');
						}, 500);
					}
				}
			</script>";
			print "<center><a href='index.html'><i class='bx bxs-home-alt-2 bx-lg bx-burst'></i></a></center>";
		exit();

		
	}
	?>


<center> 
	<h1>Order Confirmation</h1>
</center>
 
<center>
<table border=1 cellspacing="5" cellpadding="5" align="center" style="width: 50%;">
		<form action=confirmed.php method="get" align=center>
			<tr>
				<?php 
				$item=$_GET['item'];
				$ucost=$_GET['ucost'];
				$image=$_GET['image'];
				$qty=$_GET['qty'];
				$total=$qty * $ucost;

				print "
			<tr>
				<td>Item<td width=200px>$item<td rowspan='4'><img src='$image' width='500px' height='300px'>
			<tr>
				<td>Unit Cost<td>$ucost
			<tr>
				<td>Quantity<td>$qty
			<tr>
				<td>Amount<td>$total";
			?>
		</tr>
	</form>
</table>
</center>

<center>
<button id="purchase-btn">Confirm</button>
</center>
<!-- Modal -->
<div id="purchase-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <br>
    <br>
    <p align="center">Thank you for purchasing!</p>
    <center><i class='bx bx-check-circle bx-lg' style='color:#47c716'></i></center>
    <center><a href="index.html" style="font-size: 15px;">--ORDER AGAIN--</a></center>
  </div>
</div>

<center><a href="index.html">HOME | ORDER</a></center>
 

<script>
var btn = document.getElementById("purchase-btn");
var modal = document.getElementById("purchase-modal");


var closeBtn = document.getElementsByClassName("close")[0];


btn.onclick = function() {
  modal.style.display = "block";
}


closeBtn.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }




}
</script>
<script>
    window.onload = () => {
   let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
   bannerNode.parentNode.removeChild(bannerNode);
}
</script>
</body>
</html>
