 



<!DOCTYPE html>
<html>
<head>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ORDER</title>
	<style>
		body {
			background-image: url('bg.jpg');
			background-attachment: fixed;
            background-size: cover;
			font-family: Arial, sans-serif;
		}
		 
		h1 {
			text-align: center;
			color: black;
			margin-top: 30px;

		}
		table {

			border: 1px solid #ccc;
			
			
			margin-top: 50px;
			background-color: white;
			box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.3);
			width: 50%;
		}
		td {
			padding: 5px;
			text-align: left;
			font-size: 16px;
			color: #333;
		}
		input[type=text], select{
			padding: 5px;
			border: none;
			
			background-color: #f2f2f2;
			color: #333;
			font-size: 16px;
		}
		input[type=submit] {
			padding: 10px;
			background-color: #C69749;
			color: white;
			border: none;
			border-radius: 3px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 20px;
            
		}
		input[type=submit]:hover {
			background-color: #562B08;
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
			border-radius: 5px;

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

		background-color: #fefefe;
		margin: 15% auto;
		padding: 20px;
		border: 1px solid #888;
		width: 40%;
		height: 40%;
		border-radius: 20px;
		animation-duration: 0.9s;
		animation-fill-mode: forwards;
		animation-timing-function: ease-out;
	}

	
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
					<center><p class='error'><a href='index.html'>Order first<br><br><img src='cart.gif'></a></p></center>
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
			print"<center><a href='index.html'><i class='bx bxs-home-alt-2 bx-lg bx-burst'></i></a></center>";
		exit();
	}
?>
   <div class=tp>
	<h1>ORDER</h1>
   </div>
  <center>
	<table>
    <form action='confirmation.php' method='get'>
        <tr>
            <?php 
                $item=$_GET['item'];
                $ucost=$_GET['ucost'];
                $image=$_GET['image'];
                print "
                <input type='hidden' name='image' value='$image'>
                <tr>
                <td>Item </td><td><input type='text' name='item' value='$item' readonly> </td><td rowspan='4'><center><img src='$image' alt='Product Image'></center></td>
                <tr>
                <td>Unit Cost </td><td><input type='text' name='ucost' value='$ucost' readonly> </td>
                <tr>
                <td>Quantity</td><td><select name='qty'>"; 
                $ctr=1;
                while ($ctr<=100)
                {
                    print "<option value='$ctr'>$ctr</option>\n";
                    $ctr=$ctr+1;
                }

                print "</select><span class='error'> *</span>
                <tr><td colspan='2'><center><input type='submit' name='btnsubmit' value='Order Now'></center>"; 
            ?>
        </tr>
    </form>
 </table>
</center>


	<center>
	<span>
	<a href="index.html"><i class='bx bx-left-arrow-alt bx-lg'></i></a>
	 
	</span>
	</center>
<script>
    window.onload = () => {
   let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
   bannerNode.parentNode.removeChild(bannerNode);
}
</script>
</body>
</html>

