<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div class="row" style="padding:100px 300px;">
	<div class="col-50">
	<div class="container" >
	<form action="payscript.php" method="post" style="padding: 25px;">
	<div class="row">
	<div class="col-25">
	<h3 style="text-align: center; margin:20px 10px;font-family: lato;">Checkout Form</h3>
	<label for="fname"><i class="fa fa-user"></i> Full Name</label>
	<input type="text" id="fname" name="name" placeholder="John M. Doe">
	<label for="email"><i class="fa fa-envelope"></i> Email</label>
	<input type="text" id="email" name="email" placeholder="john@example.com">
	<input type="hidden" value="<?php echo 'OID'.rand (100, 1000); ?>" name="orderid">
	<input type="hidden" value="<?php echo 1; ?>" name="amount">
	<label for="city"><i class="fa fa-mobile"></i> Mobile</label>
	<input type="text" id="city" name="mobile" placeholder="Mobile Number">
	<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
	<input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
	</div>
	<input type="submit" value="Pay Now" class="btn">
	</form>
	</div>
	</div>

</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
            margin-top: 50px;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .row {
            display: flex;
            justify-content: center;
        }
        .col-25 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .btn:hover {
            background-color: #45a049;
        }
        h3 {
            text-align: center;
            margin: 20px 10px;
            font-family: Lato, sans-serif;
        }
        label {
            margin-top: 10px;
            display: block;
        }
        .fa {
            padding: 10px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin-right: 10px;
        }
        .fa-envelope {
            padding: 10px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin-right: 10px;
        }
        .fa-mobile {
            padding: 10px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin-right: 10px;
        }
        .fa-address-card-o {
            padding: 10px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="row">
    <div class="col-25">
        <div class="container">
            <form action="payscript.php" method="post">
                <h3>Checkout Form</h3>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input type="text" id="fname" name="name" placeholder="John M. Doe">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" placeholder="john@example.com">
                <input type="hidden" value="<?php echo 'OID'.rand (100, 1000); ?>" name="orderid">
                <input type="hidden" value="<?php echo 1; ?>" name="amount">
                <label for="city"><i class="fa fa-mobile"></i> Mobile</label>
                <input type="text" id="city" name="mobile" placeholder="Mobile Number">
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                <input type="submit" value="Pay Now" class="btn">
            </form>
        </div>
    </div>
</div>

</body>
</html>
