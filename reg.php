<?php
    session_start();

    $db = mysqli_connect("localhost", "root", "", "dbsoummo");

    if(isset($_POST['insert']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
		$phone = $_POST['phone'];
        $address = $_POST['address'];
        $sql = "Insert Into dt(name, email, phone, address) values('$name', '$email', '$phone', '$address')";
        mysqli_query($db, $sql);
        die();
    }
?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>
<hr>

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	
	<form method="post" action="reg.php">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
    	<input name="phone" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
		</div>
        <input name="address" class="form-control" placeholder="Address" type="text">
    </div> <!-- form-group// -->                                     
    <div class="form-group">
        <button name="insert" type="submit" class="btn btn-primary btn-block"> Insert Data  </button>
    </div> <!-- form-group// -->                                                                   
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
</article>