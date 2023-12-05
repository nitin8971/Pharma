
<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> -  Pharmacy Management System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
 <link rel="stylesheet" type="text/css" href="style/form.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style/table.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="style/dashboard_styles.css"  media="screen" />
<script src="js/function.js" type="text/javascript"></script>
<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
	<script type="text/javascript" SRC="js/superfish/superfish.js"></script>
	<script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("ul.sf-menu").supersubs({
				minWidth:    12,
				maxWidth:    27,
				extraWidth:  1

			}).superfish();

		});
	</script>
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
    	<script SRC="js/.js" type="text/javascript"></script>
	<script SRC="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript">

		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' });
	</script>
   <style>#left-column {height: 477px;}
 #main {height: 500px;}
</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="images/hd_logo.jpg" class="img"></a> Pharmacy Management System</h1>
            <?php
	include('connect_db.php');
	$qury=mysqli_query($conn, "SELECT * from stock where status='low'") or die(mysqli_error());
	$ros=mysqli_num_rows($qury);
	if($ros>0){
		?>
	<?php

	}
	?>
     <p class="user"></p></div>
<div id="left_column">
<div id="button">
		<ul>
			<li><a href="cashier.php">Home</a></li>
			<li><a href="payment.php"target="_top">Process payment</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
</div>
</div>
<div id="main">
-- <div id="tabbed_box" class="tabbed_box">
    <h4> Manage Payments</h4>
<hr/>
    <div class="tabbed_area">

        <ul class="tabs">
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1">Process payments</a></li>

        </ul>



        <div id="content_1" class="content">
		<div id="viewer1"><span id="viewer2"></span></div>
		  <form name="myform" onsubmit="return validateForm(this);" action="receipt.php" method="post" >
			<table width="220" height="106" border="0" >
				<tr><td ><input name="invoice_no" type="text" style="width:170px" placeholder="Invoice No" required="required" id="invoice_no" /></td></tr>
				<tr><td></td></tr>
		        <tr><td></td></tr>
				<tr><td >
 <script>
			$(document).ready(function()
	{
	$("#invoice_no").change(function()
		{
			var invoice_no=$("#invoice_no").val();



			if(invoice_no.length >0)

				{
					$.ajax(
				{
type: "POST", url: "check.php", data: 'invoice_no='+invoice_no , success: function(msg)

					{
						$("#viewer2").ajaxComplete(function(event, request, settings)
							{


									if(msg)
									{


										$(this).html(msg);




									}
									else
									{
										$(this).html('<font color="red"><strong>Invoice does not exist</strong></font>');
									}



							});
					}
				});
				}else{
                    window.alert("Please provide an invoice number");
                }
	});
	});

		</script>

		</form>
        </div>
    </div>
</div>
</div>
</div>
</body>

</html>