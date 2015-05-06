 <html>
 <head>
 	<title>Ninja Gold Game(Codeigniter version)</title>
 	<meta charset='utf-8'>
 	<style type="text/css">

 	*{
 		font-family: sans-serif;
 	}
 	body{
 		text-align: center;
 		background-color: gold;
 	}

 	#farm, #cave, #house,#casino{
 		border:10px dotted red;
 		width: 200px;
 		height: 200px;
 		display: inline-block;
 		margin: 20px;
 	}
 	.activities{
 		width: 500px;
 		height: 300px;
 	}

 	</style>

 </head>
 <body>
 	<h1>Your gold: <input type='text' value='<?= $gold_total?>'></h1><br>

 	<div id='farm'>
	 	<h2>Farm</h2>
	 	<h4>(earns 10-20 golds)</h4>
	 	<form action='ninjagolds/add_gold' method='post'>
	 		<input type='hidden' name='action' value='farm'>
	 		<input type = 'submit' value='Find Gold!'>
	 	</form>
 	</div>
 	<div id='cave'>
	 	<h2>Cave</h2>
	 	<h4>(earns 5-10 golds)</h4>
	 	<form action='ninjagolds/add_gold' method='post'>
	 		<input type='hidden' name='action' value='cave'>
	 		<input type = 'submit' value='Find Gold!'>
	 	</form>
 	</div>
 	<div id='house'>
	 	<h2>House</h2>
	 	<h4>(earns 2-5 golds)</h4>
	 	<form action='ninjagolds/add_gold' method='post'>
	 		<input type='hidden' name='action' value='house'>
	 		<input type = 'submit' value='Find Gold!'>
	 	</form>
 	</div>
 	<div id='casino'>
	 	<h2>Casino</h2>
	 	<h4>(earns/takes 0-50 golds)</h4>
	 	<form action='ninjagolds/add_gold' method='post'>
	 		<input type='hidden' name='action' value='casino'>
	 		<input type = 'submit' value='Find Gold!'>
	 	</form>
 	</div><br><br>
 	<p>Activities</p>
	<?php echo $this->session->userdata('activity_log')?>

 	


 </body>
 </html>